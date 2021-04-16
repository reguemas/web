<template>
  <b-container fluid class="p-0 m-0 fonsBlauCel">
    <div class="ferseSoci mx-auto pb-5">
      <h2 class="pt-5 text-center">Activitats per Arees del Centre</h2>
      <p class="info py-3">Les activitats que es desenvolupen al CET s'organitzen amb aquestes Arees, Seccions i Vocalies. Aquí podràs trobar les activitats on participar.</p>
      <div 
        class="m-1"
        v-for="(value,key,index) in activitatsCET.Activitats"
        :key="index"
      >
        <div class="enllaçFerseSoci p-0">
          <h-3 class="modalitatSoci casella py-2 m-0" :class="'fons' + key">{{ value.text }}</h-3>
          <div 
            href="#"
            class="modalitatSoci fonsSeccio animacioSeccio casella my-1 py-2 punter"
            :class="'fonsSeccio' + key"
            v-for="(seccio,indexActivitatsSeccions) in value.Seccions"
            :key="indexActivitatsSeccions"
            @click.prevent="vocaliaVisibilitat(indexActivitatsSeccions,value.Seccions.length)"
            @mouseleave="vocaliaVisibilitatNone(value.Seccions.length)"
          >
          {{ seccio.text }}
            <div v-if="display[indexActivitatsSeccions]===true" class="pt-2">
              <div class="descripcioSoci" 
              v-for="(vocalia,indexActivitatsVocalia) in seccio.vocalia" 
              :key="indexActivitatsVocalia">
                {{ vocalia.key_Vocalia }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </b-container>

</template>

<script>

import activitats from '@/static/menuNavegacio/menuNavegacio.json'

export default {
  name: 'activitatsArees',

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

  .fonsEsportiva{
    background-color: #f56565;
  }

  .fonsSeccioEsportiva{
    background-color: #fcc1c1;
  }

  .fonsCientifica_Cultural{
    background-color: #48bb78;
  }

  .fonsSeccioCientifica_Cultural{
    background-color: #bbecd2;
  }  

  .fonsFormacio{
    background-color: #4299e1;
  }

  .fonsSeccioFormacio{
    background-color: #add8fc;
  }

  .fonsSocial{
    background-color: rgb(167, 167, 155);
  }

  .fonsSeccioSocial{
    background-color: rgb(207, 207, 195);
  }

  .animacioSeccio{
    transition-delay: 1s;
    transition: all 0.3s ease;
  }

  .animacioSeccio:hover{
    transform: translateX(15px);
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

  .punter{
    cursor:pointer;
  }

</style>
