<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Game as GameResource;

use App\Game;
use App\Team;
use DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $home = DB::table('teams')
            ->select(DB::raw('name as homename'), DB::raw('code as homecode'), DB::raw('logo_url as homelogo'));
        $away = DB::table('teams')
            ->select(DB::raw('name as awayname'), DB::raw('code as awaycode'), DB::raw('logo_url as awaylogo'));
        $games = DB::table('games')
            ->joinSub($home, 'home', function($join){
                $join->on('homename', '=', 'games.home_team');
            })
            ->joinSub($away, 'away', function($join){
                $join->on('awayname', '=', 'games.away_team');
            })
            ->orderBy('game_date', 'desc')
            ->paginate(7);
        return new GameResource($games);
    }

    public function fetchAll(){
        $games = Game::orderBy('game_date', 'desc')->get();
        return GameResource::collection($games);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = $request->isMethod('put') ? Game::findOrFail($request->game_id) : new Game;
        $game->id = $request->input('game_id');
        $game->home_team = $request->input('home_team');
        $game->away_team = $request->input('away_team');
        $game->home_score = $request->input('home_score');
        $game->away_score = $request->input('away_score');
        $game->game_date = $request->input('game_date');
        $game->attendance = $request->input('attendance');

        if($request->home_score > $request->away_score){
            DB::table('teams')->where('name', $request->home_team)->update(['win' => DB::raw('win + 1')]);
            DB::table('teams')->where('name', $request->away_team)->update(['lose' => DB::raw('lose + 1')]);
        } else {
            DB::table('teams')->where('name', $request->home_team)->update(['lose' => DB::raw('lose + 1')]);
            DB::table('teams')->where('name', $request->away_team)->update(['win' => DB::raw('win + 1')]);
        }
        if($game->save()){
            return new GameResource($game);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return new GameResource($game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        if($game->delete()){
            return new GameResource($game);
        }
    }
}
