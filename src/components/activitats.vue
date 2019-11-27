<template>
  <div>
    <b-row class="m-0">
      <b-col cols="12" md="5" xl="3" class="calendar d-flex flex-column">
        <filtersCalendar/>
      </b-col>

      <b-col cols="12" md="7" xl="9" class="p-0 position-relative activitats pb-4">
        <gallery v-if=visibilitatGaleriaEsportiva :activitatsCarousel="activitatsCarousel.Esportives" :titolGaleria="keys[0]"/>
        <gallery v-if=visibilitatGaleriaCultural :activitatsCarousel="activitatsCarousel.Culturals" :titolGaleria="keys[1]"/>
        <gallery v-if=visibilitatGaleriaSocial :activitatsCarousel="activitatsCarousel.Socials" :titolGaleria="keys[2]"/>

        <b-row class="p-0 mx-3 my-5 justify-content-around botonsActivitats">
          <b-button size="lg" href="http://ce-terrassa.cat/activitats-del-cet/" class="tipusActivitats mb-4"><img src="../assets/assetsBotonsActivitats/tipusActivitats.png" class="mr-3 botonsActivitatsImg">Totes les Activitats</b-button>
          <b-button size="lg" href="http://ce-terrassa.cat/infantilijuvenil/" class="familiaActivitats mb-4"><img src="../assets/assetsBotonsActivitats/familiaActivitats.png" class="mr-3 botonsActivitatsImg">Activitats pels Teus Fills i en Família</b-button>
          <b-button size="lg" href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" class="wikilocActivitats mb-4 d-none d-xl-block"><img src="../assets/assetsBotonsActivitats/Wikiloc.png" class="mr-3 botonsActivitatsImg">Canal CET a Wikiloc</b-button>
        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import gallery from './gallery.vue'
import filtersCalendar from './filtersCalendar.vue'
import totesActivitats from './json/carousel.json'


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

  /* Botons totes activitats */

  .botonsActivitats a{
    text-transform: capitalize;
    border:none !important;
    font-size: 18px !important;
  }

  .tipusActivitats{
    background-color:#e08d4b !important;
  }

  .familiaActivitats{
    background-color:#a6bf4e !important;
  }

  @media (max-width: 440px) {
  .familiaActivitats {
    display:inline-flex !important;
    text-align:left !important;
  }
}

  .wikilocActivitats{
    background-color:#82c1f4 !important;
  }

  .botonsActivitatsImg{
    width: 40px;
    height: 40px;
  }

</style>
