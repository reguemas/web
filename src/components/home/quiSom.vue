<template>
    <b-row class="mx-0 quiSom">
      <h2 class="text-center w-100">Qui Som</h2>
      <b-row>
        <b-col>
          <div class="quiSomItemBorder">
            <div class="quiSomItem m-5">El Centre Excursionista de Terrassa és una entitat Esportiva, Social i Cultural amb més de 110 anys d'història vinculada a la Muntanya i el Muntanyisme.</div>
          </div>
        </b-col>
        <b-col>
          <div class="quiSomItemBorder">
            <div class="quiSomItem m-5">És una entitat amb els valors associats al Muntanyisme com l'Esforç i la Superació, el Companyerisme, Estimar la Natura i la Integració Social.</div>
          </div>
        </b-col>
      </b-row>
      <div class="quiSomItem">T'iniciaràs en la muntanya i perfeccionaràs la teva tècnica mentre fas esport i et diverteixes amb amics per a tota la vida.</div>
      <div class="quiSomItem">S'hi organitzen activitats durant tot l'any de totes les modalitats del muntanyisme per a tots els nivells i tota la familia.</div>
      <div class="quiSomItem">Disposa d'una seu social on reunir-se amb servei de bar, sala d'exposicions i on el soci tindrà la seva veu.</div>
      <div class="quiSomItem">La Veu del Soci és transcendental, per això posem a la seva disposició els canals de comunicació físics i virtuals per poder expressar-la.</div>
    </b-row>
</template>

<script>

  //import gallery from "@/components/home/gallery.vue";
  //import galleryMobile from "@/galleryMobile.vue";
  //import totesActivitatsPeriodiques from '@/static/carousels/activitatsPeriodiques.json'

export default {
  name: 'quiSom',

  components: {
    //gallery,
    //galleryMobile,
  },

  data() {
    return {
      visibilitatGaleria: true,
      isMobile: false,
      amplada: 0
    }
  },

  computed: {
    ampladaPantalla: function() {
      //let ampladaMascara;
      if (this.$refs.mascaraGaleria) {
        return this.$refs.mascaraGaleria.offsetWidth;
      } else {
        return this.amplada;
      }
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
    if (this.activitatsPeriodiques == undefined) {
      this.visibilitatGaleria = false;
    }
    this.amplada = this.$refs.mascaraGaleria.offsetWidth;
  }
};

</script>

<style scoped>

  h2 {
    color:#b2dbd4;
    text-transform: capitalize;
  }

  .quiSom{
    background: #315c7f;
    padding-top:2.5rem;
    padding-bottom:1rem;
    position: relative;
  }

  .quiSom::before {
    width: 100%;
    height:150px;
    content: "";
    background-image:url('~@/assets/perfilMolaMontserrat.png');
    background-size:cover;
    position: absolute;
    top:-150px;
  }

  .quiSomItemBorder{
    display:flex;
    align-items: center;
    align-content:center;
    height:80px;
    border: 3px solid #b2dbd4;
    border-radius: 40px;
  }

  .quiSomItem{
    font-family: Quicksand;
    font-size: 1.2rem;
    font-weight:bold;
    color:#b2dbd4;
  }

  .ampladaGaleriaPeriodiques{
    max-width:1427px;
  }



</style>