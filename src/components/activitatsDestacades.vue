<template>
    <div>
      <b-row no-gutters align-v="center" class="m-0 pb-4 filters destacades">
          <galleryDestacades :activitatsCarousel="activitatsCarousel.Destacades" :titolGaleria="keys[0]"/>
      </b-row>
    </div>
</template>

<script>
import galleryDestacades from './galleryDestacades.vue'
import totesActivitats from './json/activitatsDestacades.json'

export default {
  name: 'activitatDestacades',

  components: {
    galleryDestacades
  },

  data() {
    return {
      myToggle: false,
      activitatsCarousel: totesActivitats,
      keys: Object.keys(totesActivitats),
    }
  }
}

</script>

<style>

  .destacades{
    overflow:hidden;
  }

</style>