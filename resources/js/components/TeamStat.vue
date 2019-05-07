<template>
  <div class="container">
    <div class="row">
      <div class="col-2 offset-2">
        <img class="bigLogo" v-bind:src="this.teamInfo[0].logo_url" alt>
      </div>
      <div class="text-center col-5 offset-1">
        <div class="my-5">
          <h1>
            <strong>{{this.teamInfo[0].name}}</strong>
          </h1>
          <h5>Win {{this.teamInfo[0].win}} - {{this.teamInfo[0].lose}} L</h5>
        </div>
      </div>
    </div>
    <div v-for="game in games" v-bind:key="game.game_date">
      <h2 class="mt-5">{{game.game_date}}</h2>
      <div class="card card-body mb-3">
        <div class="d-flex justify-content-between">
          <div class="col">
            <img class="mx-5 logo" v-bind:src="game.homelogo" alt="home logo">
            <h3 class="text-center code">{{game.homecode}}</h3>
          </div>
          <div class="col">
            <h1
              class="text-center my-5 score"
              v-bind:class="{'winner':game.home_score > game.away_score}"
            >{{game.home_score}}</h1>
          </div>
          <div class="col">
            <h1
              class="text-center my-5 score"
              v-bind:class="{'winner':game.away_score > game.home_score}"
            >{{game.away_score}}</h1>
          </div>
          <div class="col">
            <img class="mx-5 logo" v-bind:src="game.awaylogo" alt="away logo">
            <h3 class="text-center code">{{game.awaycode}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return { id: null, games: {}, teamInfo: null };
  },
  created() {
    this.id = this.$route.params.id;
    fetch("/api/team/" + this.id)
      .then(res => res.json())
      .then(res => {
        this.games = res.data;
      })
      .catch(err => console.log(err));
    fetch("/api/teaminfo/" + this.id)
      .then(res => res.json())
      .then(res => {
        this.teamInfo = res.data;
      })
      .catch(err => console.log(err));
  }
};
</script>


<style scoped>
.logo {
  height: 150px;
  width: 150px;
}

.code {
  color: rgb(44, 44, 44);
  text-decoration: none;
}

.score {
  color: rgb(44, 44, 44);
}

a:hover {
  color: blue;
}

.winner {
  color: red;
}
.bigLogo {
  height: 200px;
}
h5 {
  margin: 0 auto;
}

a {
  text-decoration: none;
}
</style>
