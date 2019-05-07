<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Teams::class, 16)->create();
        $celtics = new Team;
        $celtics->name = 'Boston Celtics';
        $celtics->code = 'BOS';
        $celtics->win = 5;
        $celtics->lose = 1;
        $celtics->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/BOS_logo.svg';
        $celtics->save();

        $nets = new Team;
        $nets->name = 'Brooklyn Nets';
        $nets->code = 'BKN';
        $nets->win = 1;
        $nets->lose = 4;
        $nets->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/BKN_logo.svg';
        $nets->save();

        $pistons = new Team;
        $pistons->name = 'Detroit Pistons';
        $pistons->code = 'DET';
        $pistons->win = 0;
        $pistons->lose = 4;
        $pistons->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/DET_logo.svg';
        $pistons->save();

        $magic = new Team;
        $magic->name = 'Orlando Magic';
        $magic->code = 'ORL';
        $magic->win = 1;
        $magic->lose = 4;
        $magic->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/ORL_logo.svg';
        $magic->save();
        
        $sixers = new Team;
        $sixers->name = 'Philadelphia Sixers';
        $sixers->code = 'PHI';
        $sixers->win = 5;
        $sixers->lose = 2;
        $sixers->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/PHI_logo.svg';
        $sixers->save();

        $pacers = new Team;
        $pacers->name = 'Indiana Pacers';
        $pacers->code = 'IND';
        $pacers->win = 0;
        $pacers->lose = 4;
        $pacers->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/IND_logo.svg';
        $pacers->save();
        
        $raptors = new Team;
        $raptors->name = 'Toronto Raptors';
        $raptors->code = 'TOR';
        $raptors->win = 5;
        $raptors->lose = 2;
        $raptors->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/TOR_logo.svg';
        $raptors->save();

        $bucks = new Team;
        $bucks->name = 'Milwaukee Bucks';
        $bucks->code = 'MIL';
        $bucks->win = 5;
        $bucks->lose = 1;
        $bucks->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/MIL_logo.svg';
        $bucks->save();

        $nuggets = new Team;
        $nuggets->name = 'Denver Nuggets';
        $nuggets->code = 'DEN';
        $nuggets->win = 5;
        $nuggets->lose = 4;
        $nuggets->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/DEN_logo.svg';
        $nuggets->save();

        $warriors = new Team;
        $warriors->name = 'Goledn State Warriors';
        $warriors->code = 'GSW';
        $warriors->win = 6;
        $warriors->lose = 2;
        $warriors->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/GSW_logo.svg';
        $warriors->save();

        $rockets = new Team;
        $rockets->name = 'Houston Rockets';
        $rockets->code = 'HOU';
        $rockets->win = 4;
        $rockets->lose = 3;
        $rockets->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/HOU_logo.svg';
        $rockets->save();

        $clippers = new Team;
        $clippers->name = 'LA Clippers';
        $clippers->code = 'LAC';
        $clippers->win = 2;
        $clippers->lose = 4;
        $clippers->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/LAC_logo.svg';
        $clippers->save();

        $thunder = new Team;
        $thunder->name = 'Oklahoma City Thunder';
        $thunder->code = 'OKC';
        $thunder->win = 1;
        $thunder->lose = 4;
        $thunder->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/OKC_logo.svg';
        $thunder->save();

        $blazers = new Team;
        $blazers->name = 'Portland Trail Blazers';
        $blazers->code = 'POR';
        $blazers->win = 5;
        $blazers->lose = 2;
        $blazers->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/POR_logo.svg';
        $blazers->save();

        $spurs = new Team;
        $spurs->name = 'San Antonio Spurs';
        $spurs->code = 'SAS';
        $spurs->win = 3;
        $spurs->lose = 4;
        $spurs->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/SAS_logo.svg';
        $spurs->save();

        $jazz = new Team;
        $jazz->name = 'Utah Jazz';
        $jazz->code = 'UTA';
        $jazz->win = 1;
        $jazz->lose = 4;
        $jazz->logo_url = 'https://ca.global.nba.com/media/img/teams/00/logos/UTA_logo.svg';
        $jazz->save();
    }
}
