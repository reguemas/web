<template>
  <div>
    
    <b-container fluid class="p-0">

      <navMenu/>

      <webTop/>

      <activitats/>

      <!-- <activitatPromocionada/>

      <activitatsDestacades/>

      <activitatPromocionada/>

      <noticies/>

      <activitatPromocionada/>

      <serveis/>

      <colaboradorsWebAmigues/>

      <peuWeb/> -->

    </b-container>
  </div>
</template>

<script>
import navMenu from './components/menu.vue'
import webTop from './components/webTop.vue'
import activitats from './components/activitats.vue'
import activitatPromocionada from './components/activitatPromocionada.vue'
import activitatsDestacades from './components/activitatsDestacades.vue'
import noticies from './components/noticies.vue'
import serveis from './components/serveis.vue'
import colaboradorsWebAmigues from './components/colaboradorsWebAmigues.vue'
import peuWeb from './components/footer.vue'

export default {
  name: 'app',

  components: {
    navMenu,
    webTop,
    activitats,
    activitatPromocionada,
    activitatsDestacades,
    noticies,
    serveis,
    colaboradorsWebAmigues,
    peuWeb,
  }
}

</script>

<style>

  .textCyan{
    color:cyan;
  }

/*   #filters{
    background-color: #2bcbbaff;
    line-height: 12rem;
    font-size:1.5rem !important;
    font-weight:900 !important;
    margin-top:-2.5rem;
  } */

</style>
