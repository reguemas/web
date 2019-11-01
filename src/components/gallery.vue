<template>
  <div>
    <h3 class="ml-3 mb-0 py-4">Activitats {{titolGaleria}}</h3>
    <b-row ref="mascaraGaleria" class="m-0" @mouseover="visualitzacioBotons" @mouseleave="controlsVisibilitat=false">
      <b-list-group horizontal ref="esMou" class="esMou">
        <b-list-group-item class="p-0 ml-3" :key="index" v-for="(activitat,index) in activitatsCarousel"><card :activitat="activitat"/></b-list-group-item>
      </b-list-group>
      <div v-if="controlsVisibilitat">
        <button class="botoAnterior" v-if=botoAnteriorVisibilitat @click="movimentCarousel" ref="anterior">&lsaquo;</button>
        <button class="botoSeguent" v-if=botoSeguentVisibilitat @click="movimentCarousel" ref="seguent">&rsaquo;</button>
      </div>
    </b-row>
  </div>
</template>

<script>

import card from './card.vue'

export default {

  name: 'gallery',

  props:["activitatsCarousel","titolGaleria"],

  components: {
    card,
  },

  data() {
    return {
      count:0,
      botoAnteriorVisibilitat:false,
      botoSeguentVisibilitat:true,
      controlsVisibilitat:false,
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
      this.controlsVisibilitat=true;
    }
  },

  credted(){
    if (this.titolGaleria=="Esportives"){
      style.backgroundSize = "400px 400px";
    }
  },

  methods:{
    visualitzacioBotons: function() {
      let element = this.$refs.esMou;
      let ampladaPantalla = this.$refs.mascaraGaleria.offsetWidth;
      let numCardsVisibles = Math.floor((ampladaPantalla - 48)/316);
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = Math.ceil(longitudGaleria/numCardsVisibles);
      if (numClickFinalGaleria == 0) {
        this.controlsVisibilitat=false;
      } else {
        this.controlsVisibilitat=true;
      }
    },

    movimentCarousel: function() {
      let element = this.$refs.esMou;
      let ampladaPantalla = this.$refs.mascaraGaleria.offsetWidth;
      let numCardsVisibles = Math.floor((ampladaPantalla - 48)/316);
      if (numCardsVisibles==0){
        numCardsVisibles++;
      }
      let distanciaMoure = (numCardsVisibles-1)*300;
      if (distanciaMoure == 0) {
        distanciaMoure = 316;
      }
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = Math.round(longitudGaleria/numCardsVisibles);
      if (numCardsVisibles==1) {
        numClickFinalGaleria--;
      }
      if (event.target.className==="botoAnterior") {
        this.count++;
        element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
        this.botoSeguentVisibilitat=true;
        if (this.count==0) {
          this.botoAnteriorVisibilitat=false;
        }
      }
      if (event.target.className==="botoSeguent") {
        this.count--;
        element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
        this.botoAnteriorVisibilitat=true;
        if (this.count == -numClickFinalGaleria) {
          this.botoSeguentVisibilitat=false;
        }
      }
    },
  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .fons{
    background-color:red;
  }


  .esMou{
    transition: transform 1s ease-in-out;
  }

  .list-group-item{
    border:none !important;
  }

  .botoAnterior{
    position: absolute;
    left:0;
    margin-top:-300px;
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 300px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    background: linear-gradient(
      to right,
      rgba(0, 0, 0, 0.8) 0%,
      rgba(0, 0, 0, 0.6) 50%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

  .botoSeguent{
    position: absolute;
    right:0;
    margin-top:-300px;
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 300px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    background: linear-gradient(
      to left,
      rgba(0, 0, 0, 0.8) 0%,
      rgba(0, 0, 0, 0.6) 50%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

</style>
