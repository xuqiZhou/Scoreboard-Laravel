<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Teams::class, 16)->create();

        $game1 = new Game;
        $game1->home_team = 'Boston Celtics';
        $game1->away_team = 'Indiana Pacers';
        $game1->home_score = 84;
        $game1->away_score = 74;
        $game1->game_date = Carbon::parse('2019-04-14');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Boston Celtics';
        $game1->away_team = 'Indiana Pacers';
        $game1->home_score = 99;
        $game1->away_score = 91;
        $game1->game_date = Carbon::parse('2019-04-17');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Indiana Pacers';
        $game1->away_team = 'Boston Celtics';
        $game1->home_score = 96;
        $game1->away_score = 104;
        $game1->game_date = Carbon::parse('2019-04-19');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Indiana Pacers';
        $game1->away_team = 'Boston Celtics';
        $game1->home_score = 106;
        $game1->away_score = 110;
        $game1->game_date = Carbon::parse('2019-04-21');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Goledn State Warriors';
        $game1->away_team = 'LA Clippers';
        $game1->home_score = 121;
        $game1->away_score = 104;
        $game1->game_date = Carbon::parse('2019-04-13');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Goledn State Warriors';
        $game1->away_team = 'LA Clippers';
        $game1->home_score = 131;
        $game1->away_score = 135;
        $game1->game_date = Carbon::parse('2019-04-15');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'LA Clippers';
        $game1->away_team = 'Goledn State Warriors';
        $game1->home_score = 105;
        $game1->away_score = 132;
        $game1->game_date = Carbon::parse('2019-04-18');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'LA Clippers';
        $game1->away_team = 'Goledn State Warriors';
        $game1->home_score = 105;
        $game1->away_score = 113;
        $game1->game_date = Carbon::parse('2019-04-21');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Goledn State Warriors';
        $game1->away_team = 'LA Clippers';
        $game1->home_score = 121;
        $game1->away_score = 129;
        $game1->game_date = Carbon::parse('2019-04-24');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'LA Clippers';
        $game1->away_team = 'Goledn State Warriors';
        $game1->home_score = 110;
        $game1->away_score = 129;
        $game1->game_date = Carbon::parse('2019-04-26');
        $game1->attendance = rand(15000, 18000);
        $game1->save();




        $game1 = new Game;
        $game1->home_team = 'Toronto Raptors';
        $game1->away_team = 'Orlando Magic';
        $game1->home_score = 101;
        $game1->away_score = 104;
        $game1->game_date = Carbon::parse('2019-04-13');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Toronto Raptors';
        $game1->away_team = 'Orlando Magic';
        $game1->home_score = 111;
        $game1->away_score = 82;
        $game1->game_date = Carbon::parse('2019-04-16');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Orlando Magic';
        $game1->away_team = 'Toronto Raptors';
        $game1->home_score = 93;
        $game1->away_score = 98;
        $game1->game_date = Carbon::parse('2019-04-19');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Orlando Magic';
        $game1->away_team = 'Toronto Raptors';
        $game1->home_score = 85;
        $game1->away_score = 107;
        $game1->game_date = Carbon::parse('2019-04-21');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Toronto Raptors';
        $game1->away_team = 'Orlando Magic';
        $game1->home_score = 115;
        $game1->away_score = 96;
        $game1->game_date = Carbon::parse('2019-04-23');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Portland Trail Blazers';
        $game1->away_team = 'Oklahoma City Thunder';
        $game1->home_score = 104;
        $game1->away_score = 99;
        $game1->game_date = Carbon::parse('2019-04-14');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Portland Trail Blazers';
        $game1->away_team = 'Oklahoma City Thunder';
        $game1->home_score = 114;
        $game1->away_score = 94;
        $game1->game_date = Carbon::parse('2019-04-16');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Oklahoma City Thunder';
        $game1->away_team = 'Portland Trail Blazers';
        $game1->home_score = 120;
        $game1->away_score = 108;
        $game1->game_date = Carbon::parse('2019-04-19');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Oklahoma City Thunder';
        $game1->away_team = 'Portland Trail Blazers';
        $game1->home_score = 98;
        $game1->away_score = 111;
        $game1->game_date = Carbon::parse('2019-04-21');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Portland Trail Blazers';
        $game1->away_team = 'Oklahoma City Thunder';
        $game1->home_score = 118;
        $game1->away_score = 115;
        $game1->game_date = Carbon::parse('2019-04-23');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Milwaukee Bucks';
        $game1->away_team = 'Detroit Pistons';
        $game1->home_score = 121;
        $game1->away_score = 86;
        $game1->game_date = Carbon::parse('2019-04-14');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Milwaukee Bucks';
        $game1->away_team = 'Detroit Pistons';
        $game1->home_score = 120;
        $game1->away_score = 99;
        $game1->game_date = Carbon::parse('2019-04-17');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Detroit Pistons';
        $game1->away_team = 'Milwaukee Bucks';
        $game1->home_score = 103;
        $game1->away_score = 119;
        $game1->game_date = Carbon::parse('2019-04-20');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Detroit Pistons';
        $game1->away_team = 'Milwaukee Bucks';
        $game1->home_score = 104;
        $game1->away_score = 127;
        $game1->game_date = Carbon::parse('2019-04-22');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Houston Rockets';
        $game1->away_team = 'Utah Jazz';
        $game1->home_score = 122;
        $game1->away_score = 90;
        $game1->game_date = Carbon::parse('2019-04-14');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Houston Rockets';
        $game1->away_team = 'Utah Jazz';
        $game1->home_score = 118;
        $game1->away_score = 98;
        $game1->game_date = Carbon::parse('2019-04-17');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Utah Jazz';
        $game1->away_team = 'Houston Rockets';
        $game1->home_score = 101;
        $game1->away_score = 104;
        $game1->game_date = Carbon::parse('2019-04-20');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Utah Jazz';
        $game1->away_team = 'Houston Rockets';
        $game1->home_score = 107;
        $game1->away_score = 91;
        $game1->game_date = Carbon::parse('2019-04-22');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Houston Rockets';
        $game1->away_team = 'Utah Jazz';
        $game1->home_score = 100;
        $game1->away_score = 93;
        $game1->game_date = Carbon::parse('2019-04-24');
        $game1->attendance = rand(15000, 18000);
        $game1->save();






        $game1 = new Game;
        $game1->home_team = 'Philadelphia Sixers';
        $game1->away_team = 'Brooklyn Nets';
        $game1->home_score = 102;
        $game1->away_score = 111;
        $game1->game_date = Carbon::parse('2019-04-13');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Philadelphia Sixers';
        $game1->away_team = 'Brooklyn Nets';
        $game1->home_score = 145;
        $game1->away_score = 123;
        $game1->game_date = Carbon::parse('2019-04-15');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Brooklyn Nets';
        $game1->away_team = 'Philadelphia Sixers';
        $game1->home_score = 115;
        $game1->away_score = 131;
        $game1->game_date = Carbon::parse('2019-04-18');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Brooklyn Nets';
        $game1->away_team = 'Philadelphia Sixers';
        $game1->home_score = 108;
        $game1->away_score = 112;
        $game1->game_date = Carbon::parse('2019-04-20');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Philadelphia Sixers';
        $game1->away_team = 'Brooklyn Nets';
        $game1->home_score = 122;
        $game1->away_score = 100;
        $game1->game_date = Carbon::parse('2019-04-23');
        $game1->attendance = rand(15000, 18000);
        $game1->save();






        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'San Antonio Spurs';
        $game1->home_score = 96;
        $game1->away_score = 101;
        $game1->game_date = Carbon::parse('2019-04-13');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'San Antonio Spurs';
        $game1->home_score = 114;
        $game1->away_score = 105;
        $game1->game_date = Carbon::parse('2019-04-16');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'San Antonio Spurs';
        $game1->away_team = 'Denver Nuggets';
        $game1->home_score = 118;
        $game1->away_score = 108;
        $game1->game_date = Carbon::parse('2019-04-18');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'San Antonio Spurs';
        $game1->away_team = 'Denver Nuggets';
        $game1->home_score = 103;
        $game1->away_score = 117;
        $game1->game_date = Carbon::parse('2019-04-20');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'San Antonio Spurs';
        $game1->home_score = 108;
        $game1->away_score = 90;
        $game1->game_date = Carbon::parse('2019-04-23');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'San Antonio Spurs';
        $game1->away_team = 'Denver Nuggets';
        $game1->home_score = 120;
        $game1->away_score = 103;
        $game1->game_date = Carbon::parse('2019-04-25');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'San Antonio Spurs';
        $game1->home_score = 90;
        $game1->away_score = 86;
        $game1->game_date = Carbon::parse('2019-04-27');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Milwaukee Bucks';
        $game1->away_team = 'Boston Celtics';
        $game1->home_score = 90;
        $game1->away_score = 112;
        $game1->game_date = Carbon::parse('2019-04-28');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Milwaukee Bucks';
        $game1->away_team = 'Boston Celtics';
        $game1->home_score = 123;
        $game1->away_score = 102;
        $game1->game_date = Carbon::parse('2019-04-30');
        $game1->attendance = rand(15000, 18000);
        $game1->save();





        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'Portland Trail Blazers';
        $game1->home_score = 121;
        $game1->away_score = 113;
        $game1->game_date = Carbon::parse('2019-04-29');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Denver Nuggets';
        $game1->away_team = 'Portland Trail Blazers';
        $game1->home_score = 90;
        $game1->away_score = 97;
        $game1->game_date = Carbon::parse('2019-05-01');
        $game1->attendance = rand(15000, 18000);
        $game1->save();







        $game1 = new Game;
        $game1->home_team = 'Goledn State Warriors';
        $game1->away_team = 'Houston Rockets';
        $game1->home_score = 104;
        $game1->away_score = 100;
        $game1->game_date = Carbon::parse('2019-04-28');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Goledn State Warriors';
        $game1->away_team = 'Houston Rockets';
        $game1->home_score = 115;
        $game1->away_score = 109;
        $game1->game_date = Carbon::parse('2019-04-30');
        $game1->attendance = rand(15000, 18000);
        $game1->save();








        $game1 = new Game;
        $game1->home_team = 'Toronto Raptors';
        $game1->away_team = 'Philadelphia Sixers';
        $game1->home_score = 108;
        $game1->away_score = 95;
        $game1->game_date = Carbon::parse('2019-04-27');
        $game1->attendance = rand(15000, 18000);
        $game1->save();

        $game1 = new Game;
        $game1->home_team = 'Toronto Raptors';
        $game1->away_team = 'Philadelphia Sixers';
        $game1->home_score = 89;
        $game1->away_score = 94;
        $game1->game_date = Carbon::parse('2019-04-29');
        $game1->attendance = rand(15000, 18000);
        $game1->save();
    }
}
