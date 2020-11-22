<template>
  <div class="block noticies">
    <b-row no-gutters align-v="center" class="m-0 justify-content-center">
      <h2 class="pb-4 text-center w-100">Noticies</h2>
      <div class="py-3 mt-0 mx-4" v-for="(noticia) in noticiesGaleria" :key="noticia.index">
        <cardNoticies :noticia="noticia"/>
      </div>
    </b-row>
  </div>
</template>

<script>
import cardNoticies from '@/components/home/cardNoticies.vue'
import noticies from '@/static/noticies/noticies.json'

export default {
  name: 'noticies',

  components: {
    cardNoticies
  },

  data() {
    return {
      noticiesGaleria: noticies.Noticies,
    }
  }
}

</script>

<style>
  .noticies{
    background: #d0d8d0;
    padding-top:3.5rem;
    padding-bottom:3.5rem;
  }

  h2 {
    color:#545454;
  }
</style>