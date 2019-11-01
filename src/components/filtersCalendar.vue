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

      <v-calendar 
      is-dark 
      is-expanded 
      :attributes="datesAgenda">
        <div slot="day-popover" slot-scope="{ attributes }">
          <v-popover-row v-for="attribute in attributes" :key="attribute.index" :attribute="attribute">
            <div class="popoverCalendari" @click="goToActivitat(attribute)">{{ attribute.popover.label }}</div>
          </v-popover-row>
        </div>
      </v-calendar>
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
        popover:{
          visibility:"hover",
          isInteractive:true,
          label:this.calendari.Esportives[i].title,
        },
        url: this.calendari.Esportives[i].url,
      })
    }

    for (i=0; i<this.calendari.Culturals.length; i++){
      this.datesAgenda.push({
        dates: {start: new Date(this.calendari.Culturals[i].dataInici), span:1},
        bar: {
          color:"blue",
        },
        popover:{
          visibility:"hover",
          isInteractive:true,
          label:this.calendari.Culturals[i].title,
        },
        url: this.calendari.Culturals[i].url,
      })
    }

    for (i=0; i<this.calendari.Socials.length; i++){
      this.datesAgenda.push({
        dates: {start: new Date(this.calendari.Socials[i].dataInici), span:1},
        bar: {
          color:"green",
        },
        popover:{
          visibility:"hover",
          isInteractive:true,
          label:this.calendari.Socials[i].title,
        },
        url: this.calendari.Socials[i].url,
      })
    }
  },

  methods:{
    goToActivitat(attribute){
      let i = attribute.key;
      location.href=this.datesAgenda[i].url;
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

</style>
