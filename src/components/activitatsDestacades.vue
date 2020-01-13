<template>
  <div class="activitatsDestacades">
    <b-row no-gutters align-v="center" class="m-0 justify-content-center">
      <h2 class="pb-3 text-center w-100">Activitats {{titolGaleria}}</h2>
      <div class="py-4 mt-0 mx-4" v-for="(activitat) in activitatsDestacades" :key="activitat.index">
        <cardDestacades :activitat="activitat"/>
      </div>
    </b-row>
  </div>
</template>

<script>
import cardDestacades from './cardDestacades.vue'
import totesActivitats from './json/activitatsDestacades.json'

export default {
  name: 'activitatDestacades',

  components: {
    cardDestacades,
  },

  data() {
    return {
      myToggle: false,
      activitatsDestacades: totesActivitats.Destacades,
      titolGaleria: Object.keys(totesActivitats)[0],
    }
  }
}

</script>

<style scoped>
.activitatsDestacades{
  background: #d0d8d0;
  padding-top:3rem;
  padding-bottom:3rem;
}

h2 {
  color:#545454;
}

</style>