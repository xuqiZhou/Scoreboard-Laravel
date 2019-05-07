<template>
  <div v-if="loaded" class="animated fadeI">
    <b-card header="Line Chart">
      <div class="chart-wrapper">
        <line-example
          :chartData="chartdata"
          :options="options"
          class="chart"
          chartId="chart-line-01"
        />
      </div>
    </b-card>
    <div class="row">
      <div class="col-8 my-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id>Choose a date range:</span>
          </div>
          <input type="date" v-model="selectDates.from" class="form-control">
          <input type="date" v-model="selectDates.to" class="form-control">
        </div>
      </div>
      <div class="col-1">
        <button @click="changeDays(1)" class="btn btn-primary my-3">Check</button>
      </div>
      <div class="col-3">
        <button
          @click="changeDays(2)"
          class="btn btn-dark my-3"
        >{{this.daysSeven? 'Check Pass 30 Days' : 'Check Pass Week'}}</button>
      </div>
    </div>
  </div>
</template>

<script>
import LineExample from "./LineExample";
import { hexToRgba } from "@coreui/coreui/dist/js/coreui-utilities";

export default {
  name: "charts",
  components: { LineExample },
  data: () => ({
    daysSeven: true,
    customDates: false,
    games: [],
    selectDates: { from: null, to: null },
    chartdata: {},
    options: {
      responsive: true,
      maintainAspectRatio: false,
      tooltips: {
        enabled: true,
        intersect: false,
        mode: "index",
        position: "nearest",
        callbacks: {
          labelColor: function(tooltipItem, chart) {
            return {
              backgroundColor:
                chart.data.datasets[tooltipItem.datasetIndex].backgroundColor
            };
          }
        }
      },
      legend: { display: false },
      scales: {
        yAxes: [
          {
            id: "gamePlay",
            type: "linear",
            position: "left"
            // ticks: {}
          },
          {
            id: "attend",
            type: "linear",
            position: "right"
          }
        ]
      }
    },
    loaded: false
  }),
  async mounted() {
    this.fillData();
  },
  methods: {
    changeDays(index) {
      if (index === 1) this.customDates = true;
      else this.daysSeven = !this.daysSeven;
      this.fillData();
    },
    getGames(gamesList) {
      let games = [];
      gamesList.forEach(game => {
        let exist = false;
        games.forEach(sortedGame => {
          if (game.game_date === sortedGame.date) {
            exist = true;
          }
        });
        if (exist === false) {
          games.push({
            date: game.game_date,
            games: [game],
            attend: game.attendance
          });
        } else {
          games.forEach((sortedGame, index) => {
            if (sortedGame.date === game.game_date) {
              games[index].games.push(game);
              games[index].attend += game.attendance;
            }
          });
        }
      });
      this.games = games;
    },
    getGameCounts(days) {
      for (let i = 0; i < days; i++) {
        let d = new Date();
        d.setDate(d.getDate() - i);
        let dateString = d.toISOString().substr(0, 10);
        this.games.forEach(day => {
          if (dateString === day.date) {
            this.chartdata.datasets[0].data[days - 1 - i] = day.games.length;
            this.chartdata.datasets[1].data[days - 1 - i] = day.attend;
          }
        });
        this.chartdata.labels.unshift(d.toISOString().substr(5, 5));
      }
    },
    selectDays() {
      let from = new Date(this.selectDates.from);
      let to;
      if (this.selectDates.to) {
        from.setDate(from.getDate() - 1);
        to = new Date(this.selectDates.to);
      } else to = new Date();
      const daysDiff = this.dayDiff(from, to);
      for (let i = 0; i < daysDiff; i++) {
        let d = new Date(to);
        d.setDate(d.getDate() - i);
        let dateString = d.toISOString().substr(0, 10);
        this.games.forEach(day => {
          if (dateString === day.date) {
            this.chartdata.datasets[0].data[daysDiff - 1 - i] =
              day.games.length;
            this.chartdata.datasets[1].data[daysDiff - 1 - i] = day.attend;
          }
        });
        this.chartdata.labels.unshift(d.toISOString().substr(5, 5));
      }
    },
    dayDiff(from, to) {
      return Math.ceil(
        Math.abs(to.getTime() - from.getTime()) / (1000 * 3600 * 24)
      );
    },
    async fillData() {
      this.loaded = false;
      let label = "Weekly";
      let days = 7;
      if (this.daysSeven === false) {
        label = "Monthly";
        days = 30;
      }
      this.chartdata = {
        labels: [],
        datasets: [
          {
            yAxisID: "gamePlay",
            label: label + " Games Played",
            backgroundColor: hexToRgba("#E46651", 90),
            data: []
          },
          {
            yAxisID: "attend",
            label: label + " Attendance",
            backgroundColor: hexToRgba("#00D8FF", 90),
            data: []
          }
        ]
      };
      try {
        const response = await fetch("/api/allgames");
        const json = await response.json();
        await this.getGames(json.data);
        if (this.customDates === true) {
          await this.selectDays();
        } else {
          await this.getGameCounts(days);
        }
        this.customDates = false;

        this.loaded = true;
      } catch (e) {
        console.error(e);
      }
    }
  }
};
</script>

<style scoped>
.chart {
  height: 300px;
  position: "relative";
}
</style>