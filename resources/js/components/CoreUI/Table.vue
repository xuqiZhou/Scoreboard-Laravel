<template>
  <div class="animated fadeIn">
    <b-col>
      <b-card header="Team Stats">
        <br>
        <b-table
          class="mb-0 table-outline"
          responsive="md"
          hover
          :items="tableItems"
          :fields="this.getTableFields()"
          head-variant="light"
        >
          <div slot="avatar" class="avatar" slot-scope="item">
            <router-link class="nav-link" :to="item.value.id">
              <img :src="item.value.url" class="img-avatar" alt>
            </router-link>
          </div>
          <div slot="team" slot-scope="item">
            <div>{{item.value.name}}</div>
            <div class="small text-muted">
              <span>
                <template>Short Name</template>
                <!-- <template v-else>Recurring</template> -->
              </span>
              | {{item.value.code}}
            </div>
          </div>
          <div slot="stats" slot-scope="item">
            <div class="clearfix">
              <div class="float-left">
                <strong>{{item.value.winRate}}%</strong>
              </div>
              <div class="float-right">
                <small class="text-muted">{{item.value.wnl}}</small>
              </div>
            </div>
            <b-progress
              height="{}"
              class="progress-xs"
              v-model="item.value.winRate"
              :variant="variant(item.value.winRate)"
            ></b-progress>
          </div>
        </b-table>
      </b-card>
    </b-col>
  </div>
</template>

<script>
export default {
  created() {
    this.ggetTableItem();
  },
  name: "dashboard",
  data() {
    return { tableItems: [] };
  },
  methods: {
    variant(value) {
      let $variant;
      if (value <= 25) {
        $variant = "info";
      } else if (value > 25 && value <= 50) {
        $variant = "success";
      } else if (value > 50 && value <= 75) {
        $variant = "warning";
      } else if (value > 75 && value <= 100) {
        $variant = "danger";
      }
      return $variant;
    },
    flag(value) {
      return "flag-icon flag-icon-" + value;
    },
    getTableItem() {
      return this.tableItems;
    },
    getTableFields() {
      return {
        avatar: {
          label: '<i class="icon-people"></i>',
          class: "text-center avatarCol"
        },
        team: { class: "teamCol", label: "Team" },
        stats: { label: "Stats" }
      };
    },
    async ggetTableItem() {
      try {
        const teamsRes = await fetch("/api/teams");
        const json = await teamsRes.json();
        await this.getTeamProfile(json.data);
      } catch (e) {
        console.error(e);
      }
    },
    getTeamProfile(teams) {
      let tableItems = [];
      teams.forEach(team => {
        tableItems.push({
          avatar: { url: team.logo_url, id: "team/" + team.id },
          team: { name: team.name, new: true, code: team.code },
          stats: {
            winRate: Math.round((team.win / (team.win + team.lose)) * 100),
            wnl: `W ${team.win} - ${team.lose} L`
          }
        });
      });
      this.tableItems = tableItems;
      [
        {
          avatar: {
            url:
              "https://ca.global.nba.com/media/img/teams/00/logos/IND_logo.svg",
            id: 2
          },
          team: {
            name: "IND",
            new: true,
            registered: "Jan 1, 2015"
          },
          stats: { winRate: 50, wnl: "Jun 11, 2015 - Jul 10, 2015" }
        }
      ];
    }
  }
};
</script>

<style>
/* IE fix */
#card-chart-01,
#card-chart-02 {
  width: 100% !important;
}
.img-avatar {
  height: 65px;
}
.teamCol {
  width: 30%;
}
.avatarCol {
  width: 20%;
}
</style>