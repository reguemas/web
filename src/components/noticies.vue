<template>
    <div>
      <b-row no-gutters align-v="center" class="m-0 pb-4 filters justify-content-center">
          <galleryNoticies :noticiesCarousel="noticiesCarousel.Noticies" :titolGaleria="keys[0]"/>
      </b-row>
    </div>
</template>

<script>
import galleryNoticies from './galleryNoticies.vue'
import noticies from './json/noticies.json'

export default {
  name: 'noticies',

  components: {
    galleryNoticies
  },

  data() {
    return {
      noticiesCarousel: noticies,
    }
  }
}

</script>

<style>


</style>