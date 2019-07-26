<template>
  <div>
    <h3 class="ml-5 my-4">Activitats Esportives</h3>
    
    <button id="botoEsquerra" @click="esquerra">Left</button>
    <button id="botoDreta" @click="dreta">Right</button>

    <div id="contenidor">
      <div id="esMou">
        This div element is moved 50 pixels to the right, and 100 pixels down from its current position.
      </div>
    </div>

    <!-- <div class="content-wrapper">
      <b-list-group horizontal class="ml-5 content">
        <card/>
        <card class="ml-3"/>
        <card class="ml-3"/>
        <card class="ml-3"/>
        <card class="ml-3"/>
        <card class="ml-3"/>
      </b-list-group>
    </div> -->
  </div>
</template>

<script>

export default {

  name: 'gallery',

  methods:{

    count:0,
    posicioActual: 0,
    posicioFinal: 0,

    dreta: function (count,posicioActual,posicioFinal) {
      count++;
      let element = document.getElementById("esMou");
      posicioActual =+50;
      posicioFinal = 50*count;
      console.log("console element",element);
      console.log("console actual",posicioActual);
      /* this.element.style.transform = "translateX("+this.posicioActual+"px)"; */
      console.log("console final",count);
    }

  }

}



/* import card from './card.vue'

export default {
  name: 'gallery',

  components: {
    card,
  } 

}*/

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

  div#contenidor{
    position:relative;
    background-color:red;
    width:100%;
    height:300px;
    margin-top:30px;
  }
  
  div#esMou {
    width: 300px;
    height: 100px;
    background-color: yellow;
    border: 1px solid black;
    position:absolute;
    top:100px;
  }

/*   .content{
    position:absolute !important;
    height:200px !important;
    
  }
 */
</style>
