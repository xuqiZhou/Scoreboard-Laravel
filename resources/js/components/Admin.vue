<template>
  <div class="container">
    {{getLogo()}}
    <h1 class="my-5">Enter Game Results</h1>
    <form @submit.prevent="addGame()" class="mb-5">
      <div class="row">
        <div class="col mr-3">
          <span>Home Team</span>
          <b-form-select class="mt-3" v-model="game.home_team" :options="teams">
            <template slot="first">
              <option :value="null" disabled>-- Please select a team --</option>
            </template>
          </b-form-select>
          <b-input class="my-3" type="number" min="0" v-model="game.home_score" placeholder="Score"></b-input>
          <b-input v-model="game.game_date" class="col" type="date"></b-input>
        </div>
        <div class="col ml-3">
          <span>Away Team</span>
          <b-form-select class="mt-3" v-model="game.away_team" :options="teams">
            <template slot="first">
              <option :value="null" disabled>-- Please select a team --</option>
            </template>
          </b-form-select>
          <b-input class="my-3" type="number" min="0" v-model="game.away_score" placeholder="Score"></b-input>
          <b-input
            v-model="game.attendance"
            class="col"
            type="number"
            min="0"
            placeholder="Number of Audiences"
          ></b-input>
        </div>
      </div>
      <div class="row"></div>
      <button type="submit" class="my-5 btn btn-light btn-block">Save</button>
    </form>
    <div class="row logo d-flex justify-content-between">
      <img class="col" v-bind:hidden="logo1.length === 0" v-bind:src="logo1" alt="home team logo">
      <h2 class="text-center m-auto col" v-bind:hidden="logo1.length === 0 || logo2.length === 0">vs</h2>
      <img class="col" v-bind:hidden="logo2.length === 0" v-bind:src="logo2" alt="away team logo">
    </div>
  </div>
</template>


<script>
export default {
  created() {
    this.fetchTeams();
  },
  data() {
    return {
      game: {
        home_team: null,
        away_team: null,
        home_score: "",
        away_score: "",
        game_date: "",
        attendance: ""
      },
      teams: [],
      logo1: "",
      logo2: ""
    };
  },
  methods: {
    fetchTeams() {
      fetch("/api/teams")
        .then(res => res.json())
        .then(res => {
          res.data.forEach(team => {
            this.teams.push({
              value: team.name,
              text: team.name,
              logo: team.logo_url
            });
          });
        });
    },
    getLogo() {
      this.teams.forEach(team => {
        if (team.value === this.game.home_team) {
          this.logo1 = team.logo;
        }
        if (team.value === this.game.away_team) {
          this.logo2 = team.logo;
        }
      });
    },
    addGame() {
      if (this.validate() === true) {
        fetch("api/game", {
          method: "post",
          body: JSON.stringify(this.game),
          headers: {
            "content-type": "application/json"
          }
        })
          .then(res => res.json())
          .then(data => {
            this.game.home_team = "";
            this.game.away_team = "";
            this.game.home_score = "";
            this.game.away_score = "";
            this.game.game_date = "";
            this.game.attendance = "";
            this.logo1 = "";
            this.logo2 = "";
            this.fetchTeams();
            alert("Game Added");
          })
          .catch(err => console.log(err));
      }
      //   else alert error
    },
    validate() {
      let game = this.game;
      return (
        game.home_team.length > 0 &&
        game.away_team.length > 0 &&
        game.home_score.length > 0 &&
        game.away_score.length > 0 &&
        game.game_date.length > 0 &&
        game.attendance.length > 0 &&
        game.home_team !== game.away_team &&
        game.home_score !== game.away_score
      );
    }
  }
};
</script>

<style scoped>
img {
  max-height: 10rem;
  max-width: 10rem;
}

.logo {
  margin: 0 auto;
  min-width: 50%;
}
</style>
