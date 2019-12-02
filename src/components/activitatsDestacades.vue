<template>
  <b-row no-gutters align-v="center" class="m-0 pb-4 filters justify-content-center">
    <div>
      <h3 class="my-4 ml-0">Activitats {{titolGaleria}}</h3>
      <b-row class="m-0">
          <div class="p-0 ml-5 mb-5 activitatsDestacades" v-for="(activitat) in activitatsDestacades" :key="activitat.index">
            <cardDestacades :activitat="activitat"/>
        </div>
      </b-row>
    </div>
  </b-row>
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

  .activitatsDestacades:first-child{
    margin-left: 0 !important;
  }

</style>