<template>

    <b-container fluid class="p-0 m-0">

      <webTop />

      <activitats />

      <quiSom />

      <promocions />

      <noticies/>

<!--       <serveis
        :serveiEsquerra="serveisCET.feec"
        :serveiDreta="serveisCET.participa"
      />

      <promocions /> -->

      <colaboradorsWebAmigues />

    </b-container>

</template>

<script>

import webTop from "@/components/home/webTop.vue";
import activitats from "@/components/home/activitats.vue";
import quiSom from "@/components/home/quiSom.vue";
//import activitatPromocionada from "@/components/generalWeb/activitatPromocionada.vue";
import noticies from "@/components/home/noticies.vue";
import promocions from "@/components/home/promocions.vue";
//import serveis from "@/components/home/serveis.vue";
import colaboradorsWebAmigues from "@/components/home/colaboradorsWebAmigues.vue";
import servei from '@/static/espaisPromocionals/promocions.json';

export default {
  name: "home",

  components: {
    webTop,
    activitats,
    promocions,
    //activitatPromocionada,
    quiSom,
    noticies,
    //serveis,
    colaboradorsWebAmigues,
  },

  data() {
    return {
      serveisCET:servei,
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
