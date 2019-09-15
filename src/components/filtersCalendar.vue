<template>
  <div>
    <!-- Visualitzacio nomes en mobil -->
    <b-button :pressed.sync="myToggle" size="lg" variant="info" class="my-4 d-md-none justify-content-center">Filtres i Agenda</b-button>
    <div v-if=myToggle class="d-md-none">
      <b-form v-if=myToggle class="mb-4 w-50 mx-auto">
        <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
        <b-form-select
          class="mt-3"
          :value="null"
          :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
          id="filtreActivitat"
        >
          <option slot="first" :value="null">Busca Activitats</option>
        </b-form-select>
      </b-form>
            
      <v-calendar is-dark is-expanded :attributes="attrs"></v-calendar>
      
      <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4>
      <card class= "my-4 mx-auto"/>
    </div>

          <!-- Visualitzacio en dues columnes -->

    <div class="d-none d-md-flex flex-column">
      <b-form class="my-4 w-75 mx-auto">
        <b-form-select
          class="mt-3"
          :value="null"
          :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
          id="filtreActivitat"
        >
          <option slot="first" :value="null">Busca Activitats</option>
        </b-form-select>
      </b-form>

      <v-calendar is-dark is-expanded class="" :attributes="attrs"></v-calendar>
      
      <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4>

      <div>1 {{this.attrs}}</div>
      <div>2 {{this.datesAgendaEsportives}}</div>

    </div>
  </div>
</template>

<script>
import card from './card.vue'
import datesCalendari from './json/calendari.json'

export default {
  name: 'filtersCalendar',

  components: {
    card,
  },

  data() {
/*   const elementsAgenda =[
    {
      colorEsportives:"red",
      colorCulturals:"green",
      colorSocials:"blue",
      colorAvui:"teal",
      visibility:"hover",
      isInteractive:true,
    },
  ]; */
  return {
      myToggle: false,
      calendari:datesCalendari,
      datesAgendaEsportives:[],
      datesAgendaCulturals:[],
      datesAgendaSocials:[],
      labelPopover:"avui",
/*       elementsAgenda, */
    };
  },
/*  
  computed:{
     attrs(){
      return[
        this.datesAgendaEsportives.forEach(datesAgendaEsportives=>({
          dates: this.datesAgendaEsportives,
          bar: {
            color:"red",
          },
          popover:{
            visibility:this.elementsAgenda.visibility,
            isInteractive:this.elementsAgenda.isInteractive,
            label:this.elementsAgenda.colorAvui,
          },
          customData:this.elementsAgenda,
        })),
      ];
    },
  }, */

  created(){
    for (var i=0; i<this.calendari.Esportives.length; i++){
      this.datesAgendaEsportives.push({
          dates: {start: new Date(this.calendari.Esportives[i].dataInici), span:1},
          bar: {
            color:"red",
          },
          popover:{
            visibility:"hover",
            isInteractive:true,
            label:"hola",
          },
      })
    }
/*     for (var i=0; i<this.calendari.Culturals.length; i++){
      this.datesAgendaCulturals.push({start: new Date(this.calendari.Culturals[i].dataInici), span:1})
      this.attrs[1].popover.label=this.calendari.Culturals[i].title;
    }
    for (var i=0; i<this.calendari.Socials.length; i++){
      this.datesAgendaSocials.push({start: new Date(this.calendari.Socials[i].dataInici), span:1})
      this.attrs[2].popover.label=this.calendari.Socials[i].title;
    } */
    this.avui=new Date();
    console.log("1",this.elementsAgenda);
  }
}

</script>

<style>

  #filtreActivitat,#filtreMes {
    font-family: Quicksand; 
    font-size:1.2rem;
    font-weight:900;
    width:200px;
    height:50px;
  }

  option {
    font-family: Quicksand;
    font-size:1rem;
  }

  #cardsBackground{
    background-color:rgb(13,189,151);
  }

  .calendar{
    background-color: #94b6aa;
    text-align: center;
  }

  #buttonFilters{
    margin-top:-5rem;
    z-index:5000 !important;
  }
  
  .activitats{
    background-color:#b1c1d0;
    overflow:hidden;
  }

</style>
