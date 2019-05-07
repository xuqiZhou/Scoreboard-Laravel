<template>
  <div>
    <div class="container mt-5">
      <div class="row-12">
        <Charts></Charts>
      </div>
      <div class="row-12 mt-5">
        <Table></Table>
      </div>
    </div>
  </div>
</template>


<script>
import Charts from "./CoreUI/Charts.vue";
import Table from "./CoreUI/Table.vue";

export default {
  components: { Charts, Table },
  data() {
    return {
      teams: []
    };
  },
  created() {
    this.fetchArticles();
  },
  methods: {
    fetchArticles(page_url) {
      fetch("/api/teams")
        .then(res => res.json())
        .then(res => {
          this.teams = res.data;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>


<style scoped>
img {
  height: 80%;
  width: 80%;
  padding: 0;
}
</style>




    tableItems: [
        {
          avatar: {
            url:
              "https://ca.global.nba.com/media/img/teams/00/logos/IND_logo.svg"
          },
          team: {
            name: "IND",
            new: true,
            registered: "Jan 1, 2015"
          },
          usage: { value: 50, period: "Jun 11, 2015 - Jul 10, 2015" }
        },
        {
          avatar: {
            url:
              "https://ca.global.nba.com/media/img/teams/00/logos/DEN_logo.svg"
          },
          team: {
            name: "DEN",
            new: false,
            registered: "Jan 1, 2015"
          },
          usage: { value: 22, period: "Jun 11, 2015 - Jul 10, 2015" }
        },
        {
          avatar: {
            url:
              "https://ca.global.nba.com/media/img/teams/00/logos/HOU_logo.svg"
          },
          team: {
            name: "Quintin Ed",
            new: true,
            registered: "Jan 1, 2015"
          },
          usage: { value: 74, period: "Jun 11, 2015 - Jul 10, 2015" }
        },
        {
          avatar: { url: "img/avatars/4.jpg" },
          team: { name: "Enéas Kwadwo", new: true, registered: "Jan 1, 2015" },
          usage: { value: 98, period: "Jun 11, 2015 - Jul 10, 2015" }
        },
        {
          avatar: { url: "img/avatars/5.jpg" },
          team: {
            name: "Agapetus Tadeáš",
            new: true,
            registered: "Jan 1, 2015"
          },
          usage: { value: 22, period: "Jun 11, 2015 - Jul 10, 2015" }
        },
        {
          avatar: { url: "img/avatars/6.jpg" },
          team: {
            name: "Friderik Dávid",
            new: true,
            registered: "Jan 1, 2015"
          },
          usage: { value: 43, period: "Jun 11, 2015 - Jul 10, 2015" }
        }
      ],
      tableFields: {
        avatar: {
          label: '<i class="icon-people"></i>',
          class: "text-center"
        },
        team: {
          label: "Team"
        },
        usage: {
          label: "Usage"
        }
      }

