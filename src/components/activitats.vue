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

</style>
