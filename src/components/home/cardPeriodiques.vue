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
  name: 'cardPeriodiques',

  props:["activitat"],

  data() {
    return {
      hover:false,
      tipusActivitats:["Esportives","Culturals","Socials"],
    };
  },

  computed:{
    getBorderClass: function () {
      if ( this.activitat.destacada ) {
        let tipusActivitatClasse = "border" + this.tipusActivitat[this.activitat.tipus].charAt(0).toUpperCase() + this.tipusActivitat[this.activitat.tipus].slice(1);
        return tipusActivitatClasse;
      }
    },
    
    getBackgroundModalitatClass: function () {
      let modalitatBackground = "background-image:url('/assets/activitats/card/modalitat/" + this.tipusActivitat[this.activitat.tipus] + ".png') !important";
      return modalitatBackground;
    },

    getDificultat: function () {
      let quantaDificultat = this.activitat.dificultat * 30 + 10;
      let dificultat = {
        "background-image":"url('/assets/activitats/card/dificultat/" + this.activitat.modalitat + ".png') !important",
        "width" : quantaDificultat + "px !important",
      };
      return dificultat;
    },
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
    }
  }

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
