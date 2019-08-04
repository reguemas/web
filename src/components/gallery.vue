<template>
  <b-row id="mascaraGaleria" class="m-0" @mouseover = "controlsVisibilitat=true" @mouseleave = "controlsVisibilitat=false">
    <h3 class="ml-3 my-4">Activitats Esportives</h3>
      <b-list-group horizontal id="esMou" class="ml-3">
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
        <button id="botoAnterior" v-if=botoAnteriorVisibilitat @click="anterior">&lsaquo;</button>
        <button id="botoSeguent" v-if=botoSeguentVisibilitat @click="seguent">&rsaquo;</button>
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


  data: function () {
    return {
      count:0,
      botoAnteriorVisibilitat:false,
      botoSeguentVisibilitat:true,
      controlsVisibilitat:false,
    };

  },

  methods:{

    anterior: function () {
      let element = document.getElementById("esMou");
      let ampladaPantalla = document.getElementById("mascaraGaleria").offsetWidth;
      let numCardsVisibles = (ampladaPantalla - 48)/316;
      let distanciaMoure = (numCardsVisibles.toFixed()-1)*300;
      if (distanciaMoure == 0) {
          distanciaMoure = 316;
      }
      this.count++;
      element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
      this.botoSeguentVisibilitat=true;
      if (this.count==0) {
        this.botoAnteriorVisibilitat=false;
      }
    },

    seguent: function() {
      let element = document.getElementById("esMou");
      let ampladaPantalla = document.getElementById("mascaraGaleria").offsetWidth;
      let numCardsVisibles = (ampladaPantalla - 48)/316;
      let longitudGaleria = element.childNodes.length;
      let numClickFinalGaleria = longitudGaleria/numCardsVisibles.toFixed();
      let distanciaMoure = (numCardsVisibles.toFixed()-1)*300; 
      
      if (distanciaMoure == 0) {
          distanciaMoure = 316;
      }
      this.count--;
      element.style.transform = "translateX("+this.count*distanciaMoure+"px)";
      this.botoAnteriorVisibilitat=true;
      if (this.count == -numClickFinalGaleria.toFixed()) {
          this.botoSeguentVisibilitat=false;
      }
    }
  }

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

  #esMou{
    transition: transform 1s ease-in-out;
  }

  #botoAnterior{
    position: absolute;
    left:0;
    margin-top:-188px;
    background-color:rgb(51,51,51);
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 75px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    border-radius: 50%;
  }

  #botoSeguent{
    position: absolute;
    right:0;
    margin-top:-188px;
    background-color:rgb(51,51,51);
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 75px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    border-radius: 50%;
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
