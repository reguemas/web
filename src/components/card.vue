<template>
  <div
    class="cardBody"
    @mouseover = "hover=true"
    @mouseleave = "hover=false"
    :class   ="getBorderClass"
    :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'300px 300px'}"
  >
    <a 
      :href="this.activitat.url"
    >
      <div class="cardTitle" :class="[{ titleBackgroundHover:hover },{ cardTitleHover:hover }]">
        <h2 class="modalitatActivitat backgroundModalitat" :style = "getBackgroundModalitatClass">{{activitat.modalitat}}</h2>
        <h3 :class="[{titolHover:hover}, {titol:!hover}]">{{ activitat.title }}</h3>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.vocalia===activitat.seccio">{{ activitat.seccio }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-else>{{ activitat.seccio }} - {{ activitat.vocalia }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div class="dificultat" :style="getDificultat" :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dificultat!=0"></div>
        <div v-if=hover class="cardInfo">{{ activitat.descripcio }}</div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'card',

  props: ["activitat"],

  data() {
    return {
      hover: false,
      tipusActivitat: ["esportives","culturals","socials"],
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
  },
}

</script>

<style>

  .cardBody{
    width: 270px;
    height: 270px;
    position: relative;
    border-radius: 0 !important;
    box-shadow: 7px 7px 5px rgba(0,0,0,0.4);
    transition-delay: 1s;
    transition: all 0.3s ease;
    text-align: center;
    overflow: hidden;
    box-sizing: border-box;
  }

  .cardBody:hover{
    margin: 0px 40px;
    transform: scale(1.3);
  }

  .cardBody a:hover{
    text-decoration: none !important;
  }

  .titleBackgroundHover{
    background: rgba(0,0,0,0.3);
  }

  .borderEsportives{
    border: 7px solid red !important; 
  }

  .borderCulturals{
    border: 7px solid green !important; 
  }

  .borderSocials{
    border: 7px solid rgb(141, 141, 240) !important; 
  }

  .cardTitle{
    width: 100%;
    height: 100%;
    padding: 75px 15px 15px 15px;
    background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.6) 0%,
      rgba(0, 0, 0, 0.6) 45%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

  .cardTitleHover{
    padding: 50px 15px 15px 15px!important;
  }

  .cardTitle :hover {
    background: transparent;
  }

  .titol {
    width: 100%;
    font-family: Quicksand;
    color: cyan;
    font-size: 1.2rem;
    padding-bottom: 10px;
    border-bottom: 3px solid yellow;
  }

  .titolHover {
    font-family: Quicksand;
    color: cyan;
    font-size: 0.9rem;
    padding-bottom: 10px;
    border-bottom: 3px solid yellow;
  }

  .modalitatActivitat{
    color: cyan;
    font-size: 1.3rem;
    font-family: Marker;
    padding: 10px 25px;
    position: absolute;
    top: 0;
    right: 0;
  }

  .backgroundModalitat{
    background-repeat:no-repeat !important;
    background-position: right !important;
    background-size: contain !important;
  }

  .dificultat{
    height:30px!important;
    width:160px!important;
    background-repeat: space!important;
    background-size: 30px 30px !important;
    margin:auto;
  }

  .activitatInfo{
    width: 100%;
    font-family: Quicksand;
    color: #d0bb57;
    font-size: 1rem;
  }

  .activitatInfoHover{
    font-family: Quicksand;
    color: #d0bb57;
    font-size: 0.8rem;
  }

  .cardInfo{
    Width: 100%;
    color: cyan;
    font-size: 0.9rem;
    margin-top: 0.75rem;
  }

</style>

