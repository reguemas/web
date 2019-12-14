<template>
    <b-container fluid class="p-0 m-0">
      
      <navMenu />

      <webTop />

      <activitats />

 <activitatPromocionada
        :activitatPromocionadaEsquerra="activitatsPromocionades.Participa"
        :activitatPromocionadaDreta="activitatsPromocionades.FEEC"
      />

      <!--<activitatsDestacades />

      <activitatPromocionada/>

      <noticies />

      <activitatPromocionada />

      <serveis />

      <activitatPromocionada />

      <colaboradorsWebAmigues />

      <peuWeb/> -->

    </b-container>
</template>

<script>
import axios from "axios";
import navMenu from "./components/menu.vue";
import webTop from "./components/webTop.vue";
import activitats from "./components/activitats.vue";
import activitatPromocionada from "./components/activitatPromocionada.vue";
import activitatsDestacades from "./components/activitatsDestacades.vue";
import noticies from "./components/noticies.vue";
import serveis from "./components/serveis.vue";
import colaboradorsWebAmigues from "./components/colaboradorsWebAmigues.vue";
import peuWeb from "./components/footer.vue";
import promocions from './components/json/promocions.json';
/* import 'custom.scss'; */

export default {
  name: "app",

  components: {
    navMenu,
    webTop,
    activitats,
    activitatPromocionada,
    activitatsDestacades,
    noticies,
    serveis,
    colaboradorsWebAmigues,
    peuWeb
  },

  data() {
    return {
      activitatsPromocionades:promocions,
    };
  },

  mounted() {
    axios
      .all([
        axios.get("http://localhost/api/apiActivitatsCarousels.php"),
        axios.get("http://localhost/api/apiCalendari.php"),
        axios.get("http://localhost/api/apiActivitatsDestacades.php")
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
.textCyan {
  color: cyan;
}

</style>
