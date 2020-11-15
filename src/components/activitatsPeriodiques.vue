<template>
  <div class="activitatsPeriodiques">
    <h2 class="pb-3 text-center w-100">Activitats {{ titolGaleria }}</h2>
    <row 
      ref="mascaraGaleria"
      class="overflow-hidden mx-0 justify-content-center"
      v-if="isMobile==false"
    >
      <gallery
        v-if="visibilitatGaleria"
        :activitatsCarousel="activitatsPeriodiques.Periodiques"
        :titolGaleria="Periodiques"
        :ampladaPantallaActivitat="ampladaPantalla"
        class="my-5"
      />
    </row>
  </div>
</template>

<script>

  import gallery from "./gallery.vue";
  //import galleryMobile from "./galleryMobile.vue";
  import totesActivitats from './json/activitatsPeriodiques.json'

export default {
  name: 'activitatPeriodiques',

  components: {
    gallery,
    //galleryMobile,
  },

  data() {
    return {
      myToggle: false,
      activitatsPeriodiques: totesActivitats,
      titolGaleria: Object.keys(totesActivitats)[0],
      visibilitatGaleria: true,
      isMobile: false,
      amplada: 0
    }
  },

  computed: {
    ampladaPantalla: function() {
      let amp = this.amplada;
      if (this.$refs.mascaraGaleria) {
        amp = this.$refs.mascaraGaleria
      }
      return amp;
    }
  },

  watch:{
    ampladaPantalla: function (){
      return this.$refs.mascaraGaleria.offsetWidth;
    }
  },

  mounted() {
    if (
      navigator.userAgent.match(/Android/i) ||
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) ||
      navigator.userAgent.match(/iPad/i) ||
      navigator.userAgent.match(/iPod/i) ||
      navigator.userAgent.match(/BlackBerry/i) ||
      navigator.userAgent.match(/Windows Phone/i)
    ) {
      this.isMobile = true;
    }
    if (this.activitatsPeriodiques.Periodiques == undefined) {
      this.visibilitatGaleria = false;
    }
    this.amplada = this.$refs.mascaraGaleria.offsetWidth;
  }
};

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