<template>
  <div class="block activitatsDestacades">
    <b-row no-gutters align-v="center" class="m-0 pb-5 justify-content-center">
      <h2 class="py-4 text-center w-100">Activitats {{titolGaleria}}</h2>
      <div class="p-0 mt-0 mx-4" v-for="(activitat) in activitatsDestacades" :key="activitat.index">
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
  background: #3f628d;
}

h2 {
  color:#f2f5f7;
}

</style>