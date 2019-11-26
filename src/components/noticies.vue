<template>
    <div>
      <b-row no-gutters align-v="center" class="m-0 pb-4 filters justify-content-center">
          <galleryNoticies :activitatsCarousel="activitatsCarousel.Noticies" :titolGaleria="keys[0]"/>
      </b-row>
    </div>
</template>

<script>
import galleryNoticies from './galleryNoticies.vue'
import totesActivitats from './json/noticies.json'

export default {
  name: 'noticies',

  components: {
    galleryNoticies
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


</style>