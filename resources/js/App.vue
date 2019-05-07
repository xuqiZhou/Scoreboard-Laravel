<template>
  <div>
    <Navbar></Navbar>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";

export default {
  name: "app",
  components: { Navbar }
};
</script>


<style scoped>
body {
  padding-top: 70px;
}
</style>


