<template>
  <b-container fluid class="m-0 p-0">
    <b-row class="m-0 p-0">
      <b-col cols="12" md="6" lg="5" xl="4" xxl="3" class="p-4 agendaFiltres">
        <b-button 
          block 
          :pressed.sync="myToggle"
          size="lg"
          variant="info"
          class="justify-content-center d-md-none agendaFiltresButton"
        >
        Filtres i Agenda
        </b-button>
        <filtersCalendar class="visualitzacioDesktopAgenda"/>
        <filtersCalendar v-if="myToggle==true" class="mt-4"/>
      </b-col>

      <b-col cols="12" md="6" lg="7" xl="8" xxl="9" class="p-0 carrussel">

        <b-row class="m-0 ml-4 overflow-hidden">
          <gallery v-if=visibilitatGaleriaEsportiva :activitatsCarousel="activitatsCarousel.Esportives" :titolGaleria="keys[0]" class="pt-3"/>
          <gallery v-if=visibilitatGaleriaCultural :activitatsCarousel="activitatsCarousel.Culturals" :titolGaleria="keys[1]" class="pt-3"/>
          <gallery v-if=visibilitatGaleriaSocial :activitatsCarousel="activitatsCarousel.Socials" :titolGaleria="keys[2]" class="pt-3"/>
        </b-row>

        <b-row class="m-0 py-4 justify-content-center carrussel">
          <b-button
            size="lg" 
            href="http://ce-terrassa.cat/activitats-del-cet/" 
            class="btnTipusActivitats tipusActivitats mr-xl-5">
              <img src="../assets/botonsActivitats/tipusActivitats.png" class="mr-3 botonsActivitatsImg">
              Totes les Activitats
            </b-button>
          <b-button
            size="lg"
            href="http://ce-terrassa.cat/infantilijuvenil/"
            class="btnTipusActivitats familiaActivitats">
              <img src="../assets/botonsActivitats/familiaActivitats.png" class="mr-3 botonsActivitatsImg">
              Activitats pels Teus Fills i en Família
          </b-button>
          <b-button
            size="lg"
            href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" 
            class="btnTipusActivitats wikilocActivitats ml-xxl-5 mx-lg-4">
              <img src="../assets/botonsActivitats/Wikiloc.png" class="mr-3 botonsActivitatsImg">
              Canal CET a Wikiloc
          </b-button>
        </b-row>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import gallery from './gallery.vue'
import filtersCalendar from './filtersCalendar.vue'
import totesActivitats from './json/activitatsCarousels.json'


export default {
  name: 'activitats',

  components: {
    gallery,
    filtersCalendar
  },

  data() {
    return {
      myToggle: false,
      activitatsCarousel: totesActivitats,
      keys: Object.keys(totesActivitats),
      visibilitatGaleriaEsportiva:true,
      visibilitatGaleriaCultural:true,
      visibilitatGaleriaSocial:true,
    }
  },

  mounted() {
    if (this.activitatsCarousel.Esportives==undefined) {
      this.visibilitatGaleriaEsportiva=false;
    } else if (this.activitatsCarousel.Culturals==undefined) {
      this.visibilitatGaleriaCultural=false;
    } else if (this.activitatsCarousel.Socials==undefined) {
      this.visibilitatGaleriaSocial=false;
    }
  },
}

</script>

<style>
  .botonsActivitatsImg{
    width: 40px;
    height: 40px;
  }
</style>

<style scoped>

  @media (max-width: 767px) {
    .visualitzacioDesktopAgenda{
      display:none !important;
    }
  }

  .agendaFiltres{
    background:#3d4855;
  }

  .carrussel{
    background:#afc8ad;
  }

  .botons{
    background:#3d4855;
  }

  /* Botons totes activitats */

  .btnTipusActivitats {
    border:none !important;
    font-size: 1.2rem !important;
    display:inline-flex !important;
    text-align: left !important;
    align-items: center !important;
    justify-content:center !important;
    color:cyan;
  }

  .btnTipusActivitats:hover {
    border:none !important;
    color:#103440;
    font-weight:700;
  }

  .btnTipusActivitats:active {
    border:none !important;
    color:#103440;
    font-weight:700;
  }

  .tipusActivitats{
    background-color:#e08d4b;
  }

  .tipusActivitats:hover{
    background-color:#ad7140;
  }

  .tipusActivitats:active{
    background-color:#ad7140;
  }

  @media (max-width: 1199px) {
    .tipusActivitats {
      margin-bottom:1.5rem;
      margin-right:3rem;
      margin-left:3rem;
    }
  }

  .familiaActivitats{
    background-color:#a6bf4e;
  }

  .familiaActivitats:hover{
    background-color:#768639;
  }

  .familiaActivitats:active{
    background-color:#768639;
  }

  @media (max-width: 1199px) {
    .familiaActivitats {
      margin-right:3rem;
      margin-left:3rem;
    }
  }

  .wikilocActivitats{
    background-color:#82c1f4;
  }

  .wikilocActivitats:hover{
    background-color:#6898c0;
  }

  .wikilocActivitats:active{
    background-color:#6898c0;
  }

  @media (max-width: 1428px) {
    .wikilocActivitats {
      display: none !important;
    }
  }

</style>
