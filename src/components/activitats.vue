<template>
  <div>
    <b-row class="m-0">
      <b-col cols="12" md="5" xl="3" class="calendar d-flex flex-column">
        <filtersCalendar/>
      </b-col>

      <b-col cols="12" md="7" xl="9" class="p-0 position-relative activitats">
        <gallery :activitatsCarousel="activitatsCarousel.Esportives" :titolGaleria="keys[0]"/>
        <gallery :activitatsCarousel="activitatsCarousel.Culturals" :titolGaleria="keys[1]"/>
        <gallery :activitatsCarousel="activitatsCarousel.Socials" :titolGaleria="keys[2]"/>
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
    }
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
