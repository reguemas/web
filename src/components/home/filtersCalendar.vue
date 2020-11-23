<template>
  <b-container fluid class="p-0 m-0">

    <b-col class="m-0">
      <b-row>
        <b-form class="w-100">
          <b-form-select
            class="filtreActivitat"
            :value="null"
            :options="['One','Two','Three']"
          >
            <option slot="first" :value="null">Busca Activitats</option>
          </b-form-select>
        </b-form>

        <v-calendar
          is-dark 
          is-expanded
          :attributes="datesAgenda"
          @dayclick="crearColumnaActivitats"
          class="my-4"
        >
        </v-calendar>
      </b-row>

      <b-row class="activitatsDiaSeleccionat text-center">
        <template v-if="diaSeleccionatBuit==true">
          <div v-if="diaActualBuit==true"
            class="activitatDiaTipus activitatDiaSenseActivitats py-2"
          >Avui no hi ha Activitats</div>
        </template>
        <template v-else>
          <div 
            v-for="(diaSeleccionat,index) in diaSeleccionat"
            :key="index"
            class="w-100"
          >
            <div 
              v-if="diaSeleccionat.tipus!='mateixTipus'"
              class="py-2 activitatDiaTipus"
              :class="'activitatDiaTipus'+ diaSeleccionat.tipus"
              >
              Activitats {{ diaSeleccionat.tipus }}
            </div>
            <a :href="diaSeleccionat.url"> 
              <div class="py-3 activitatDia" :class="'activitatDia'+ diaSeleccionat.class">           
                <p class="mb-1 px-3 activitatDiaModalitatSeccio">{{ diaSeleccionat.seccio }} - {{ diaSeleccionat.modalitat }}</p>
                <p class="m-0 px-3 activitatDiaTitol">{{ diaSeleccionat.title }}</p>
              </div>
            </a>
          </div>
        </template>
      </b-row>

      <b-row class="pt-5 justify-content-center">
        <b-button
          size="lg"
          href="http://ce-terrassa.cat/agenda/"
          class="botoAgenda w-100">
            <img src="../../assets/botoAgenda/agenda.png" class="mr-3 botonsActivitatsImg">
              Agenda Completa
        </b-button>
      </b-row>

    </b-col>
   </b-container>
</template>

<script>

import datesCalendari from '@/static/calendari/calendari.json'
import activitatsAvui from '@/static/calendari/activitatsAvui.json'

export default {
  name: 'filtersCalendar',

  data() {
    return {
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

  .filtreAgendaBoto{
    margin-top: 1.5rem;
    display:flex;
  }

  .filtreActivitat {
    font-family: Quicksand; 
    font-size:1.2rem;
    font-weight:900;
    width:100%;
    height:49px;
  }

  .option {
    font-family: Quicksand;
    font-size: 1rem;
  }

  .calendar{
    text-align: center;
  }

  .vc-rounded-lg{
    border-radius: 4px !important;
  }

  .activitats{
    /* background-color:#b1c1d0; */
    overflow: hidden;
  }

  /* Llistat Activitats del dia */

  /* Tipus d'Activitats del dia*/

  .activitatsDiaSeleccionat{
    max-height: 655px;
    overflow: auto;
  }

  @media (min-width: 768px) and (max-width: 991px) {
    .activitatsDiaSeleccionat {
      max-height: 820px;
    }
  }

  @media (min-width: 992px) and (max-width: 1199px) {
    .activitatsDiaSeleccionat {
      max-height: 800px;
    }
  }

  .activitatDiaTipus{
    color:#f2f5f7;
    font-size: 1.3rem;
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
    font-family: Quicksand;
    color: #545454;
  }

  .activitatDia:hover{
    text-decoration:none;
    color:black;
  }

  .activitatDia:active{
    text-decoration:none;
    color:black;
  }

  .activitatDiaEsportives{
    background: #ffd7d7;
  }

  .activitatDiaEsportives:hover {
    border-left: 5px solid #fd8080;
    background: #fcc1c1;
    transition: .1s ease;
  }

  .activitatDiaEsportives:active {
    border-left: 5px solid #fd8080;
    background: #fcc1c1;
    transition: .1s ease;
  }

  .activitatDiaCulturals{
    background: #d6f8e4;
  }

  .activitatDiaCulturals:hover {
    border-left: 5px solid #48bb78;
    background: #bbecd2;
    transition: .1s ease;
  }

  .activitatDiaCulturals:active {
    border-left: 5px solid #48bb78;
    background: #bbecd2;
    transition: .1s ease;
  }

  .activitatDiaSocials{
    background: #c9e5fc;
  }

  .activitatDiaSocials:hover {
    border-left: 5px solid #4299e1;
    background: #add8fc;
    transition: .1s ease;
  }

  .activitatDiaSocials:active {
    border-left: 5px solid #4299e1;
    background: #add8fc;
    transition: .1s ease;
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
    max-width:350px;
  }

  .botoAgenda:hover{
    background-color:#808080;
    color:#303030;
    font-weight:bold;
  }

  .botoAgenda:active{
    background-color:#808080;
    color:#303030;
    font-weight:bold;
  }

</style>
