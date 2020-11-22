<template>

    <b-container fluid class="p-0 m-0">

      <webTop />

      <activitats />

      <activitatsPeriodiques/>

      <activitatPromocionada
        :activitatPromocionadaEsquerra="activitatsPromocionades.feec"
        :activitatPromocionadaDreta="activitatsPromocionades.participa"
      />

      <noticies/>

      <serveis />

      <activitatPromocionada
        :activitatPromocionadaEsquerra="activitatsPromocionades.participa"
        :activitatPromocionadaDreta="activitatsPromocionades.feec"
      />

      <colaboradorsWebAmigues />

    </b-container>

</template>

<script>

import webTop from "@/components/home/webTop.vue";
import activitats from "@/components/home/activitats.vue";
import activitatsPeriodiques from "@/components/home/activitatsPeriodiques.vue";
import activitatPromocionada from "@/components/home/activitatPromocionada.vue";
import noticies from "@/components/home/noticies.vue";
import serveis from "@/components/home/serveis.vue";
import colaboradorsWebAmigues from "@/components/home/colaboradorsWebAmigues.vue";
import promocions from '@/static/espaisPromocionals/promocions.json';

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
