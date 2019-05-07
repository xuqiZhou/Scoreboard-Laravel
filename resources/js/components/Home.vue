<template>
  <div class="container">
    <div v-for="gameList in result" v-bind:key="gameList.date">
      <h2 class="mt-5">{{gameList.date}}</h2>
      <div v-for="game in gameList.games" v-bind:key="game.id" class="card card-body mb-3">
        <div class="d-flex justify-content-between">
          <div class="col">
            <img class="mx-5" v-bind:src="game.homelogo" alt="home logo">
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
            <img class="mx-5" v-bind:src="game.awaylogo" alt="away logo">
            <h3 class="text-center code">{{game.awaycode}}</h3>
          </div>
        </div>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
          <button class="page-link" @click="fetchGames(pagination.first_page_url)">First Page</button>
        </li>
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
          <button class="page-link" @click="fetchGames(pagination.prev_page_url)">Previous</button>
        </li>
        <li class="page-item disabled">
          <button
            class="page-link text-dark"
          >Page {{pagination.current_page}} of {{pagination.last_page}}</button>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
          <button class="page-link" @click="fetchGames(pagination.next_page_url)">Next</button>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
          <button class="page-link" @click="fetchGames(pagination.last_page_url)">Last Page</button>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      result: [],
      pagination: {}
    };
  },
  created() {
    this.fetchGames();
  },

  methods: {
    fetchGames(page_url) {
      let vm = this;
      page_url = page_url || "/api/games";
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          vm.makePagination(res);
          let result = [];
          let data = res.data;
          data.forEach(game => {
            let exist = false;
            result.forEach(sortedGame => {
              if (game.game_date === sortedGame.date) {
                exist = true;
              }
            });
            if (exist === false) {
              result.push({ date: game.game_date, games: [game] });
            } else {
              result.forEach((sortedGame, index) => {
                if (sortedGame.date === game.game_date) {
                  result[index].games.push(game);
                }
              });
            }
          });
          this.result = result;
        })
        .catch(err => console.log(err));
    },
    makePagination(res) {
      let pagination = {
        current_page: res.current_page,
        last_page: res.last_page,
        first_page_url: res.first_page_url,
        last_page_url: res.last_page_url,
        next_page_url: res.next_page_url,
        prev_page_url: res.prev_page_url
      };
      this.pagination = pagination;
    }
  }
};
</script>

<style scoped>
img {
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

a {
  text-decoration: none;
}
</style>