<template>
  <b-container fluid class="p-0 m-0 fonsBlauCel">
    <div class="ferseSoci mx-auto pb-5">
      <h2 class="pt-5 text-center">Secció d'Excursionisme</h2>
      <p class="info py-3">En aquesta secció podreu explorar nous Horitzons, recorre Senders a peu i en Bicicleta, fent Marxa... Nòrdica i petites Travessades. I és clar, Passejades pel Parc de Sant Llorenç.</p>
        <div class="enllaçFerseSoci p-0">
          <h-3 class="modalitatSoci fonsBlauGris casella py-2 m-0">{{ activitatsCET.Activitats.Esportiva.Seccions[0].text }}</h-3>
          <div 
            href="#"
            class="modalitatSoci fonsBlauGrisClar animacioSoci casella my-1 py-2"
            v-for="(vocalia,indexActivitatsSeccions) in activitatsCET.Activitats.Esportiva.Seccions[0].vocalia"
            :key="indexActivitatsSeccions"
          >
          {{ vocalia.key_Vocalia }}
          </div>
        </div>
    </div>
  </b-container>

</template>

<script>

import activitats from '@/static/menuNavegacio/menuNavegacio.json'

export default {
  name: 'activitatSeccions',

  data() {
    return {
      activitatsCET: activitats,
      hover:false,
      display:[]
    }
  },

  methods:{
    vocaliaVisibilitat(index,length){
        this.display.length = 0;
        let array = new Array(length).fill(false);
        this.display = array;
        this.display.splice(index, 1, true);
    },
    vocaliaVisibilitatNone(length){
      this.display.length = 0;
      let array = new Array(length).fill(false);
      this.display = array;
    }
  },

}


</script>

<style scooped>

  .ferseSoci{
    max-width:900px;
  }

  @media (max-width: 1000px) {
    .ferseSoci {
      max-width:768px;
      padding: 0 3.5rem;
    }
  }

  @media (max-width: 576px) {
    .ferseSoci {
      padding: 0 1.5rem;
    }
  }

  .info{
    font-family: Quicksand;
    font-size:1.2rem;
  }

  .alturaCasella{
    height:300px;
  }

  .casella{
    border-radius:3px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.15);
  }

  .fonsVerd{
    background-color: #c7cade;
  }

  .fonsBlau{
    background-color: #c7cade;
  }

  .fonsVermell{
    background-color: #ea5c5a;
  }

  .fonsTaronja{
    background-color: #ecab7b;
  }

  .fonsGroc{
    background-color: #f8e28f;
  }

  .fonsMarro{
    background-color: #c8c8ae;
  }

  .fonsBlauGris{
    background-color: #99b4c7;
  }

  .fonsBlauGrisClar{
    background-color: #c7cade;
  }

  .fonsBlauCel{
    background-color: #f8f9ff;
  }

  .animacioSoci{
    transition-delay: 1s;
    transition: all 0.3s ease;
  }

  .animacioSoci:hover{
    transform: scale(1.1);
    z-index:5 !important;
  }

  .enllaçFerseSoci{
    text-decoration: none;
    font-family: Quicksand;
    color: #404140!important;
    text-align:center;
    height:100%;
    display:flex;
    flex-wrap: wrap;
  }

  .modalitatSoci{
    font-family: "AveriaSerif";
    font-weight:600;
    font-size:1.5rem;
    width:100%;
    margin-top:2rem;
    margin-bottom:0px;
  }

  .descripcioSoci{
    font-size:1.2rem;
    width:100%;
    margin:0px;
  }

</style>
