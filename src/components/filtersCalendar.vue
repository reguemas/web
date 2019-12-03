<template>
  <div>
    <!-- Visualitzacio amb el boto filtres i agenda per a visualitzacio en mobil -->
    <b-button :pressed.sync="myToggle" size="lg" variant="info" class="my-4 d-md-none justify-content-center">Filtres i Agenda</b-button>
    <div v-if=myToggle class="d-md-none">
      <b-form class="mb-4 w-50 mx-auto">
        <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
        <b-form-select
          class="mt-3 filtreActivitat"
          :value="null"
          :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
        >
          <option slot="first" :value="null">Busca Activitats</option>
        </b-form-select>
      </b-form>
      <v-calendar is-dark is-expanded :attributes="datesAgenda">
        <div slot="day-popover" slot-scope="{ attributes }">
          <v-popover-row v-for="attribute in attributes" :key="attribute.index" :attribute="attribute">
            <div class="popoverCalendari" @click="goToActivitat(attribute)">{{ attribute.popover.label }}</div>
          </v-popover-row>
        </div>
      </v-calendar>
      <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4>
      <card class= "my-4 mx-auto"/>
    </div>

          <!-- Visualitzacio en dues columnes quan no es mobil-->

    <div class="d-none d-md-flex flex-column">
      <b-form class="my-4 w-75 mx-auto">
        <b-form-select
          class="mt-3 filtreActivitat"
          :value="null"
          :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
        >
          <option slot="first" :value="null">Busca Activitats</option>
        </b-form-select>
      </b-form>

      <v-calendar
        is-dark 
        is-expanded
        :attributes="datesAgenda"
        @dayclick="crearColumnaActivitats">
      </v-calendar>
      <div v-if="diaSeleccionat!=undefined">{{diaSeleccionat}}</div>
      <div v-if="diaSeleccionatBuit" class="mt-3 calendariTitol" :class="'calendariTitol'+this.tipusActivitats[this.diaSeleccionat[this.keys].tipus-1]">Activitats {{ this.tipusActivitats[this.diaSeleccionat[this.keys].tipus-1] }}</div>
        <div v-for="(diaSeleccionat,index) in diaSeleccionat" :key="index" class="mt-3 px-5 py-3 calendariActivitatEsportives">
          <p class="mb-1 calendariSeccio">{{ diaSeleccionat.seccio }} - {{ diaSeleccionat.modalitat }}</p>
          <p class="m-0">{{diaSeleccionat.title }}</p>
      </div>
      <!-- <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4> -->
    </div>
    <b-button
      size="lg"
      href="http://ce-terrassa.cat/agenda/"
      class="botoAgenda my-4">
        <img src="../assets/botoAgenda/agenda.png" class="mr-3 botonsActivitatsImg">
          Agenda Completa
    </b-button>
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
  return {
    myToggle: false,
    diaSeleccionatBuit:false,
    calendari:datesCalendari,
    datesAgenda:[{
      dates: new Date(),
      highlight: {
        color:"teal",
      },
    }],
    diaSeleccionat:[],
    keys:[],
    tipusActivitats:["Esportives","Culturals","Socials"],
    };
  },

  created(){
    for (var i=0; i<this.calendari.Esportives.length; i++){
      this.datesAgenda.push({
        dates: {start: new Date(this.calendari.Esportives[i].dataInici), span:1},
        bar: {
          color:"red",
        },
        customData: {
          tipus: this.calendari.Esportives[i].tipus,
          title: this.calendari.Esportives[i].title,
          modalitat: this.calendari.Esportives[i].modalitat,
          seccio: this.calendari.Esportives[i].seccio,
          url: this.calendari.Esportives[i].url,
        },
      })
    }

    for (i=0; i<this.calendari.Culturals.length; i++){
      this.datesAgenda.push({
        dates: {start: new Date(this.calendari.Culturals[i].dataInici), span:1},
        bar: {
          color:"blue",
        },
        customData: {
          tipus: this.calendari.Culturals[i].tipus,
          title: this.calendari.Culturals[i].title,
          modalitat: this.calendari.Culturals[i].modalitat,
          seccio: this.calendari.Culturals[i].seccio,
          url: this.calendari.Culturals[i].url,
        },
      })
    }

    for (i=0; i<this.calendari.Socials.length; i++){
      this.datesAgenda.push({
        dates: {start: new Date(this.calendari.Socials[i].dataInici), span:1},
        bar: {
          color:"green",
        },
        customData: {
          tipus: this.calendari.Socials[i].tipus,
          title: this.calendari.Socials[i].title,
          modalitat: this.calendari.Socials[i].modalitat,
          seccio: this.calendari.Socials[i].seccio,
          url: this.calendari.Socials[i].url,
        },
      })
    }
  },

  methods:{
    crearColumnaActivitats (day){
      let activitatsDia = [];
      for(let i=0; i<day.attributes.length; i++){
        activitatsDia.push({
          "tipus": day.attributes[i].customData.tipus,
          "title": day.attributes[i].customData.title,
          "modalitat": day.attributes[i].customData.modalitat,
          "seccio": day.attributes[i].customData.seccio,
        });
      }
      this.diaSeleccionat = activitatsDia;
      this.keys = Object.keys(this.diaSeleccionat);
      if (this.diaSeleccionat.lenght!=0){
        this.diaSeleccionatBuit=true;
      }
      console.log("dia",this.diaSeleccionat);
      console.log("key",this.keys);
    },
  },
}

</script>

<style scoped>

  .filtreActivitat {
    font-family: Quicksand; 
    font-size:1.2rem;
    font-weight:900;
    width:200px;
    height:50px;
  }

  .option {
    font-family: Quicksand;
    font-size:1rem;
  }

  .calendar{
    /* background-color: #94b6aa; */
    text-align: center;
  }

  .activitats{
    /* background-color:#b1c1d0; */
    overflow:hidden;
  }

  .popoverCalendari{
    cursor: pointer;
  }

  .calendariTipusActivitatEsportives{
    font-family: Quicksand;
    background-color: #fbd7d7;
    border-radius: 5px;
  }

  .calendariActivitatEsportives{
    font-family: Quicksand;
    font-size:1rem;
    font-weight:700;
    text-transform: lowercase;
    background-color: #fbd7d7;
    border-radius: 5px;
  }

  .calendariSeccio{
    font-size:1.2rem;
    font-weight:bold;
    text-transform: uppercase;
  }

  .calendariTitol{
    color:white;
    font-size:1.5rem;
    border-radius: 5px;
    padding: 5px;
  }

  .calendariTitolEsportives{
    background: #f56565;
  }

  .calendariTitolCulturals{
    background: #48bb78;
  }
  
  .calendariTitolSocials{
    background: #4299e1;
  }



  .botoAgenda {
    border:none !important;
    font-size: 18px !important;
    display:inline-flex !important;
    justify-content:center !important;
    align-items: center !important;
    background-color:#9e9f9f;
    width: 100%;
  }

  .botoAgenda:hover{
    background-color:#6b6b6b;
    color:#103440;
    font-weight:700;
  }

</style>
