<template>
  <div>
    <!-- Visualitzacio amb el boto filtres i agenda per a visualitzacio en mobil -->
    <b-button :pressed.sync="myToggle" size="lg" variant="info" class="my-4 d-md-none justify-content-center">Filtres i Agenda</b-button>
    <div v-if=myToggle class="d-md-none">
      <b-form class="mb-4 w-50 mx-auto">
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
          class="mt-3"
          :value="null"
          :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
          id="filtreActivitat"
        >
          <option slot="first" :value="null">Busca Activitats</option>
        </b-form-select>
      </b-form>

      <v-calendar 
      ref="agenda"
      is-dark 
      is-expanded
      :attributes="datesAgenda"
      @dayclick="crearColumnaActivitats">
      </v-calendar>
      <div>{{ diaSeleccionat }}</div>
      <div>{{ this.diaSeleccionat }}</div>
      <div>{{ activitatsDia }}</div>

<!--       <div id="calendariTitolEsportives" class="mt-3">Activitats Esportives</div>
      <div v-for="(activitatsDia,index) in activitatDia" :key="index" class="mt-3 px-5 py-3 calendariActivitatEsportives">
        <p class="mb-1 calendariSeccio">{{ activitatsDia.seccio }} - {{ activitatsDia.modalitat }}</p>
        <p class="m-0">{{ activitatsDia.title }}</p>
      </div> -->
      <!-- <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4> -->
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
  return {
    myToggle: false,
    calendari:datesCalendari,
    datesAgenda:[{
      dates: new Date(),
      highlight: {
        color:"teal",
      },
    }],
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
      var activitatsDia = [];
      for(let i=0; i<day.attributes.length; i++){
        activitatsDia.push({
          "title": day.attributes[i].customData.title,
          "modalitat": day.attributes[i].customData.modalitat,
          "seccio": day.attributes[i].customData.seccio,
        });
      }
      this.diaSeleccionat = activitatsDia;
      console.log(activitatsDia);
      console.log(this.diaSeleccionat);
      return this.diaSeleccionat;
    },
  },
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

  .option {
    font-family: Quicksand;
    font-size:1rem;
  }

  #cardsBackground{
    background-color:rgb(13,189,151);
  }

  .calendar{
    /* background-color: #94b6aa; */
    text-align: center;
  }

  #buttonFilters{
    margin-top:-5rem;
    z-index:5000 !important;
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

  .calendariTitle{
    text-transform: capitalize !important;
  }

  #calendariTitolEsportives{
    color:white;
    font-size:1.5rem;
    background-color:#f56565;
    border-radius: 5px;
    padding: 5px;
  }

</style>
