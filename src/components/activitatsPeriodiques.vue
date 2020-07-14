<template>
  <div class="activitatsPeriodiques">
    <b-row no-gutters align-v="center" class="m-0 justify-content-center">
      <h2 class="pb-5 text-center w-100">Activitats {{titolGaleria}}</h2>
      <div class="py-4 mt-0 mx-4" v-for="(activitat) in activitatsPeriodiques" :key="activitat.index">
        <cardDestacades :activitat="activitat"/>
      </div>
    </b-row>
  </div>
</template>

<script>
import cardDestacades from './cardPeriodiques.vue'
import totesActivitats from './json/activitatsPeriodiques.json'

export default {
  name: 'activitatPeriodiques',

  components: {
    cardDestacades,
  },

  data() {
    return {
      myToggle: false,
      activitatsPeriodiques: totesActivitats.Periòdiques,
      titolGaleria: Object.keys(totesActivitats)[0],
    }
  }
}

</script>

<style scoped>

  h2 {
    color:#b2dbd4;
  }

  .activitatsPeriodiques{
    background: #315c7f;
    padding-top:3.5rem;
    padding-bottom:3.5rem;
    position: relative;
  }

  .activitatsPeriodiques::before {
    width: 100%;
    height:150px;
    content: "";
    background-image:url('~@/assets/perfilMolaMontserrat.png');
    background-size:cover;
    position: absolute;
    top:-150px;
  }

</style>