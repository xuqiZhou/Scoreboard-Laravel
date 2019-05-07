import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./components/Home.vue";
import Admin from "./components/Admin.vue";
import DashBoard from "./components/DashBoard.vue";
import TeamStat from "./components/TeamStat.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: "/", component: Home },
        { path: "/admin", component: Admin },
        { path: "/dashboard", component: DashBoard },
        { path: "/team/:id", component: TeamStat }
    ],
    linkExactActiveClass: "active"
});

export default router;
