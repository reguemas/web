<template>
    <b-container fluid class="p-0 m-0">
      
      <navMenu/>

      <router-view></router-view>

      <peuWeb/>

    </b-container>
</template>

<script>

import axios from "axios";
import navMenu from "./components/menu.vue";
import peuWeb from "./components/footer.vue";

export default {
  name: "app",

  components: {
    navMenu,
    peuWeb
  },

  mounted() {
    axios
      .all([
        axios.get("http://localhost/apiCET/apiActivitatsCarousels.php"),
        axios.get("http://localhost/apiCET/apiCalendari.php"),
        axios.get("http://localhost/apiCET/apiActivitatsDestacades.php")
      ])
      .then(
        axios.spread((activitatsCarouselsResposta, calendariResposta, activitatsDestacadesResposta) => {
          this.infoActivitatsCarousels = activitatsCarouselsResposta.data.response;
          this.infoCalendari = calendariResposta.data.response;
          this.infoActivitatsDestacades = activitatsDestacadesResposta.data.response;
        })
      );
  }
};
</script>

<style>

  body {
    font-family: "AveriaSerif";
  }

  .textCyan {
    color: cyan;
  }

  a {
    text-decoration: none !important;
  }

</style>
