<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Team as TeamResource;
use App\Http\Requests;
use App\Team;

use DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('name')->get();
        return TeamResource::collection($teams);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home = DB::table('teams')
            ->select(DB::raw('name as homename'), DB::raw('code as homecode'), DB::raw('id as homeid'), DB::raw('logo_url as homelogo'));
        $away = DB::table('teams')
            ->select(DB::raw('name as awayname'), DB::raw('code as awaycode'), DB::raw('id as awayid'), DB::raw('logo_url as awaylogo'));
        $games = DB::table('games')
            ->joinSub($home, 'home', function($join){
                $join->on('homename', '=', 'games.home_team');
            })
            ->joinSub($away, 'away', function($join){
                $join->on('awayname', '=', 'games.away_team');
            })
            ->where('homeid', '=', $id)
            ->orWhere('awayid', '=', $id)
            ->orderBy('game_date', 'desc')->get();
        return new TeamResource($games);
    }

    public function teamInfo($id){
        $info = Team::where('id', '=', $id)->get();
        return new TeamResource($info);
    }
}
