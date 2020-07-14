<template>

    <b-container fluid class="p-0 m-0">

      <webTop />

      <activitats />

      <activitatsPeriodiques/>

      <activitatPromocionada
        :activitatPromocionadaEsquerra="activitatsPromocionades.FEEC"
        :activitatPromocionadaDreta="activitatsPromocionades.Participa"
      />

      <noticies/>

      <serveis />

      <activitatPromocionada
        :activitatPromocionadaEsquerra="activitatsPromocionades.Participa"
        :activitatPromocionadaDreta="activitatsPromocionades.FEEC"
      />

      <colaboradorsWebAmigues />

    </b-container>

</template>

<script>

import webTop from "@/components/webTop.vue";
import activitats from "@/components/activitats.vue";
import activitatsPeriodiques from "@/components/activitatsPeriodiques.vue";
import activitatPromocionada from "@/components/activitatPromocionada.vue";
import noticies from "@/components/noticies.vue";
import serveis from "@/components/serveis.vue";
import colaboradorsWebAmigues from "@/components/colaboradorsWebAmigues.vue";
import promocions from '@/components/json/promocions.json';

export default {
  name: "home",

  components: {
    webTop,
    activitats,
    activitatPromocionada,
    activitatsPeriodiques,
    noticies,
    serveis,
    colaboradorsWebAmigues,
  },

  data() {
    return {
      activitatsPromocionades:promocions,
    };
  },

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
