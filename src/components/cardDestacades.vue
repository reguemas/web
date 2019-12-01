<template>
  <div class="cardBody cardDestacadaTamany" @mouseover = "hover=true" @mouseleave = "hover=false" ref="cardDestacada">
    <a class="cardImg cardDestacadaImgTamany" ref="urlActivitatDestacada" :href="this.activitat.url">     
      <div class="cardTitle cardDestacadaTitle" ref="cardDestacadaBackgroundMobile">
        <h3 class="titol">{{ activitat.title }}</h3>
        <div class="activitatInfo">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div class="activitatInfo" v-if="activitat.dificultat!=0">Dificultat: {{ activitat.dificultat }}</div>
        <div v-if=hover class="cardInfo mt-3">{{ activitat.descripcio }}</div>
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
    };
  },

  mounted() {
    if( navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
      this.hover=true;
      this.$refs.cardDestacadaBackgroundMobile.style.background="rgba(0,0,0,0.6)"
    }

    switch (this.activitat.tipus) {
      case "1":
        this.$refs.cardDestacada.style.outline = "10px solid #f56565";
        break;
      
      case "2":
        this.$refs.cardDestacada.style.outline = "10px solid #48bb78";
        break;
      
      case "3":
        this.$refs.cardDestacada.style.outline = "10px solid #4299e1";
        break;
    }
    this.$refs.urlActivitatDestacada.style.background = "url(" + this.activitat.imatge + ") no-repeat";
    this.$refs.urlActivitatDestacada.style.backgroundSize = "320px 320px";
  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

  .cardDestacadaTamany{
    width: 320px;
    height: 320px;
  }

  .cardDestacadaImgTamany {
    width: 320px;
    height: 320px;
  }

  .cardDestacadaTitle{
    padding-top:25px !important;
  }

</style>
