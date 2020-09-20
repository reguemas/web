<template>
  <div 
    class="cardBody cardDestacadaTamany" 
    @mouseover = "hover=true" 
    @mouseleave = "hover=false"
    :class="'cardOutline'+this.tipusActivitats[this.activitat.tipus]"
    :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'320px 320px'}"
  >
    <a 
      class="cardImg cardDestacadaImgTamany"
      :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'320px 320px'}"
      :href="this.activitat.url"
    >    
      <div 
        class="cardTitle cardDestacadaTitle"
        :class="{ mobileBackground:hover }"
      >
        <h3 class="titol">{{ activitat.title }}</h3>
        <div class="activitatInfo">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div class="activitatInfo" v-if="activitat.dificultat!=0">Dificultat: {{ activitat.dificultat }}</div>
        <div class="cardDestacadaInfo mt-3">{{ activitat.descripcio }}</div>
      </div>
    </a>
  </div>
</template>

<script>

export default {
  name: 'cardDestacades',

  props:["activitat"],

  data() {
    return {
      hover:false,
      tipusActivitats:["Esportives","Culturals","Socials"],
    };
  },
  computed: {
    ampladaPantalla: function() {
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
    if (this.activitatsCarousel.Esportives == undefined) {
      this.visibilitatGaleriaEsportiva = false;} 
    this.amplada = this.$refs.mascaraGaleria.offsetWidth;
  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

  .cardOutlineEsportives{
    outline:10px solid #f56565;
  }

  .cardOutlineEsportives:hover{
    outline:10px solid red;
  }

  .cardOutlineCulturals{
    outline:10px solid #48bb78;
  }

  .cardOutlineCulturals:hover{
    outline:10px solid green;
  }
  
  .cardOutlineSocials{
    outline:10px solid #4299e1;
  }

  .cardOutlineSocials:hover{
    outline:10px solid blue;
  }

  .cardDestacadaTamany{
    width: 300px;
    height: 300px;
  }

  .cardDestacadaImgTamany {
    width: 320px;
    height: 320px;
  }

  .cardDestacadaTitle{
    padding-top:20px !important;
  }

  .cardDestacadaInfo{
    color:cyan;
    font-size:1rem;
  }

</style>
