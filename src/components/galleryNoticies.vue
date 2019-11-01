<template>
  <div>
    <h2 class="ml-3 my-4">Noticies</h2>
    <b-row ref="mascaraGaleria" class="m-0" @mouseover="visualitzacioBotons" @mouseleave="controlsVisibilitat=false">
      <b-list-group horizontal ref="esMou" class="esMou">
        <b-list-group-item class="p-0 ml-3" :key="index" v-for="(activitat,index) in activitatsCarousel"><cardNoticies :activitat="activitat"/></b-list-group-item>
      </b-list-group>
      <div v-if="controlsVisibilitat">
        <button class="botoAnterior" v-if=botoAnteriorVisibilitat @click="movimentCarousel" ref="anterior">&lsaquo;</button>
        <button class="botoSeguent" v-if=botoSeguentVisibilitat @click="movimentCarousel" ref="seguent">&rsaquo;</button>
      </div>
    </b-row>
  </div>
</template>

<script>

import cardNoticies from './cardNoticies.vue'

export default {

  name: 'galleryNoticies',

  props:["activitatsCarousel"],

  components: {
    cardNoticies,
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

  methods:{
    visualitzacioBotons: function() {
      let element = this.$refs.esMou;
      let ampladaPantalla = this.$refs.mascaraGaleria.offsetWidth;
      let numCardsVisibles = Math.round((ampladaPantalla - 48)/316);
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = Math.round(longitudGaleria/numCardsVisibles);
      if (numClickFinalGaleria == 1) {
        this.controlsVisibilitat=false;
      } else {
        this.controlsVisibilitat=true;
      }
    },

    movimentCarousel: function() {
      let element = this.$refs.esMou;
      let ampladaPantalla = this.$refs.mascaraGaleria.offsetWidth;
      let numCardsVisibles = Math.round((ampladaPantalla - 48)/316);
      let distanciaMoure = (Math.round(numCardsVisibles)-1)*300;
      if (distanciaMoure == 0) {
        distanciaMoure = 316;
      }
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = Math.round(longitudGaleria/numCardsVisibles);
      if (longitudGaleria % numCardsVisibles==0 && numClickFinalGaleria==numCardsVisibles){
        numClickFinalGaleria = numClickFinalGaleria-1;
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
<style>

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

  #primer{
    width:300px;
    height:300px;
    background-color:coral;
  }

  #segon{
    width:300px;
    height:300px;
    background-color:green;
  }

  #tercer{
    width:300px;
    height:300px;
    background-color:blue;
  }

  #quart{
    width:300px;
    height:300px;
    background-color:red;
  }

  #cinque{
    width:300px;
    height:300px;
    background-color:yellowgreen;
  }

  #sise{
    width:300px;
    height:300px;
    background-color:rgb(89, 94, 80);
  }

  #sete{
    width:300px;
    height:300px;
    background-color:rgb(234, 248, 205);
  }

  #vuite{
    width:300px;
    height:300px;
    background-color:rgb(146, 138, 146);
  }
/*   .content{
    position:absolute !important;
    height:200px !important;
    
  }
 */
</style>
