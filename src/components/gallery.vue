<template>
  <b-row ref="mascaraGaleria" class="m-0" @mouseover = "controlsVisibilitat=true" @mouseleave = "controlsVisibilitat=false">
    <h3 class="ml-3 my-4">Activitats Esportives</h3>
      <b-list-group horizontal ref="esMou" class="ml-3 esMou">
        <card/> 
        <card class="ml-3"/>
        <div id="primer" class="ml-3"></div>
        <div id="segon" class="ml-3"></div>
        <div id="tercer" class="ml-3"></div>
        <div id="quart" class="ml-3"></div>
        <div id="cinque" class="ml-3"></div>
        <div id="sise" class="ml-3"></div>
        <div id="sete" class="ml-3"></div>
        <div id="vuite" class="ml-3"></div>
        <card class="ml-3"/>
      </b-list-group>
      <div v-if="controlsVisibilitat">
        <button class="botoAnterior" v-if=botoAnteriorVisibilitat @click="movimentCarousel" ref="anterior">&lsaquo;</button>
        <button class="botoSeguent" v-if=botoSeguentVisibilitat @click="movimentCarousel" ref="seguent">&rsaquo;</button>
      </div>
  </b-row>
</template>

<script>

import card from './card.vue'

export default {

  name: 'gallery',

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

  methods:{

    movimentCarousel: function() {
      let element = this.$refs.esMou;
      let ampladaPantalla = this.$refs.mascaraGaleria.offsetWidth;
      let numCardsVisibles = (ampladaPantalla - 48)/316;
      let distanciaMoure = (numCardsVisibles.toFixed()-1)*300;
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = longitudGaleria/numCardsVisibles.toFixed();
      if (distanciaMoure == 0) {
        distanciaMoure = 316;
      }
      if (event.target.className==="botoAnterior") {
        this.count++;
        element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
        this.botoSeguentVisibilitat=true;
        if (this.count==0) {
          this.botoAnteriorVisibilitat=false;
        }
      } else if (event.target.className==="botoSeguent") {
        this.count--;
        element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
        this.botoAnteriorVisibilitat=true;
        if (this.count == -numClickFinalGaleria.toFixed()) {
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
      rgba(0, 0, 0, 0.6) 0%,
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
      rgba(0, 0, 0, 0.6) 0%,
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
