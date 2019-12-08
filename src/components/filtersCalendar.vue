<template>
  <div>
    <!-- Visualitzacio amb el boto filtres i agenda per a visualitzacio en mobil -->
<!--     <b-button :pressed.sync="myToggle" size="lg" variant="info" class="my-4 d-md-none justify-content-center">Filtres i Agenda</b-button>
    <div v-if=myToggle class="d-md-none">
      <b-form class="mb-4 w-50 mx-auto">
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
    </div> -->

          <!-- Visualitzacio en dues columnes quan no es mobil-->

    <!-- <div class="d-none d-md-flex flex-column"> -->
    <b-col class="m-0 px-3">
      <b-row>
        <b-form class="my-4">
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
          @dayclick="crearColumnaActivitats"
          class="mb-3"
        >
        </v-calendar>
      </b-row>

      <b-row class="activitatsDiaSeleccionat text-center">
        <template v-if="diaSeleccionatBuit==true">
          <div v-if="diaActualBuit==true" class="activitatDiaTipus activitatDiaSenseActivitats py-2">Avui no hi ha Activitats</div>
        </template>
        <template v-else>
          <div 
            v-for="(diaSeleccionat,index) in diaSeleccionat"
            :key="index"
            class="w-100"
          >
            <div 
              v-if="diaSeleccionat.tipus!='mateixTipus'"
              class="mb-2 mt-3 py-2 activitatDiaTipus"
              :class="'activitatDiaTipus'+ diaSeleccionat.tipus"
              >
              Activitats {{ diaSeleccionat.tipus }}
            </div>
            <a :href="diaSeleccionat.url"> 
              <div class="py-3 mt-2 activitatDia" :class="'activitatDia'+ diaSeleccionat.class">           
                <p class="mb-1 px-3 activitatDiaModalitatSeccio">{{ diaSeleccionat.seccio }} - {{ diaSeleccionat.modalitat }}</p>
                <p class="m-0 px-3 activitatDiaTitol">{{ diaSeleccionat.title }}</p>
              </div>
            </a>
          </div>
        </template>
      </b-row>

      <b-row class="p-0 my-5">
        <b-button
          size="lg"
          href="http://ce-terrassa.cat/agenda/"
          class="botoAgenda w-100">
            <img src="../assets/botoAgenda/agenda.png" class="mr-3 botonsActivitatsImg">
              Agenda Completa
        </b-button>
      </b-row>

    </b-col>
   </div>
</template>

<script>
import card from './card.vue'

import datesCalendari from './json/calendari.json'
import activitatsAvui from './json/activitatsAvui.json'

export default {
  name: 'filtersCalendar',

  components: {
    card,
  },

  data() {
  return {
    myToggle: false,
    diaSeleccionatBuit:true,
    diaActualBuit:true,
    calendari:datesCalendari,
    activitatsDiaActual:activitatsAvui,
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
          color:"green",
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
          color:"blue",
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

    if (this.activitatsDiaActual.length!=0) {
      this.diaActualBuit = false;
      this.diaSeleccionatBuit = false;
      let activitatsDia = [];
      for(let i=0; i<this.activitatsDiaActual.length; i++){
        if (i==0){
          activitatsDia.push({
            "tipus": this.tipusActivitats[this.activitatsDiaActual[i].tipus],
            "title": this.activitatsDiaActual[i].title,
            "modalitat": this.activitatsDiaActual[i].modalitat,
            "seccio": this.activitatsDiaActual[i].seccio,
            "url": this.activitatsDiaActual[i].url,
            "class": this.tipusActivitats[this.activitatsDiaActual[i].tipus],
          });
        } else if (this.activitatsDiaActual[i].tipus!==this.activitatsDiaActual[i-1].tipus){ 
          activitatsDia.push({
            "tipus": this.tipusActivitats[this.activitatsDiaActual[i].tipus],
            "title": this.activitatsDiaActual[i].title,
            "modalitat": this.activitatsDiaActual[i].modalitat,
            "seccio": this.activitatsDiaActual[i].seccio,
            "url": this.activitatsDiaActual[i].url,
            "class": this.tipusActivitats[this.activitatsDiaActual[i].tipus],
          });
        } else {          
          activitatsDia.push({
            "tipus": "mateixTipus",
            "title": this.activitatsDiaActual[i].title,
            "modalitat": this.activitatsDiaActual[i].modalitat,
            "seccio": this.activitatsDiaActual[i].seccio,
            "url": this.activitatsDiaActual[i].url,
            "class": this.tipusActivitats[this.activitatsDiaActual[i].tipus],
          });
        }
      }
      this.diaSeleccionat = activitatsDia;
    }
  },

  methods:{
    crearColumnaActivitats (day){
      let activitatsDia = [];
      for(let i=0; i<day.attributes.length; i++){
        if (i==0){
          activitatsDia.push({
            "tipus": this.tipusActivitats[day.attributes[i].customData.tipus],
            "title": day.attributes[i].customData.title,
            "modalitat": day.attributes[i].customData.modalitat,
            "seccio": day.attributes[i].customData.seccio,
            "url": day.attributes[i].customData.url,
            "class": this.tipusActivitats[day.attributes[i].customData.tipus],
          });
        } else if (day.attributes[i].customData.tipus!==day.attributes[i-1].customData.tipus){ 
          activitatsDia.push({
            "tipus": this.tipusActivitats[day.attributes[i].customData.tipus],
            "title": day.attributes[i].customData.title,
            "modalitat": day.attributes[i].customData.modalitat,
            "seccio": day.attributes[i].customData.seccio,
            "url": day.attributes[i].customData.url,
            "class": this.tipusActivitats[day.attributes[i].customData.tipus],
          });
        } else {          
          activitatsDia.push({
            "tipus": "mateixTipus",
            "title": day.attributes[i].customData.title,
            "modalitat": day.attributes[i].customData.modalitat,
            "seccio": day.attributes[i].customData.seccio,
            "url": day.attributes[i].customData.url,
            "class": this.tipusActivitats[day.attributes[i].customData.tipus],
          });
        }
      }
      this.diaSeleccionat = activitatsDia;
      if (this.diaSeleccionat.lenght!=0){
        this.diaSeleccionatBuit=false;
      }
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

  /* Llistat Activitats del dia */

  /* Tipus d'Activitats del dia*/

  .activitatsDiaSeleccionat{
    max-height:740px;
    overflow:auto;
  }

  .activitatDiaTipus{
    color:cyan;
    font-size:1.3rem;
    border-radius: 5px;
  }

  .activitatDiaSenseActivitats{
    background: #b47676;
  }

  .activitatDiaTipusEsportives{
    background: #f56565;
  }

  .activitatDiaTipusCulturals{
    background: #48bb78;
  }
  
  .activitatDiaTipusSocials{
    background: #4299e1;
  }

  /* Caixa de l'activitat del dia*/

  .activitatDia{
    font-family: Quicksand !important;
    color:#545454 !important;
    border-radius: 5px;
  }

  a :hover {
    text-decoration:none !important;
    color:black !important;
  }

  .activitatDiaEsportives{
    background: #fbd7d7 !important;
  }

  .activitatDiaCulturals{
    background: #affccf;
  }

  .activitatDiaSocials{
    background: #c9e5fc;
  }

  .activitatDiaModalitatSeccio{
    font-size:1.1rem;
    font-weight:bold;
    text-transform: uppercase;
  }

  .activitatDiaTitol{
    font-size:0.9rem;
    font-weight:600;
    text-transform: capitalize;
    border-radius: 5px;
  }

  .botoAgenda {
    border:none !important;
    font-size: 18px !important;
    display:inline-flex !important;
    justify-content:center !important;
    align-items: center !important;
    background-color:#9e9f9f;
  }

  .botoAgenda:hover{
    background-color:#6b6b6b;
    color:#103440;
    font-weight:700;
  }

</style>
