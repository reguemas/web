<template>
  <b-container fluid class="mx-0 p-0">
    <b-row class="m-0 p-0">
      <b-col cols="12" md="6" lg="5" xl="4" xxl="3" class="carrussel calendariFiltresMarges">
        <div class="d-flex justify-content-center">
          <b-button
            :pressed.sync="myToggle"
            size="lg"
            variant="info"
            class="justify-content-center d-md-none agendaFiltresButton"
          >Filtres i Agenda</b-button>
        </div>
        <filtersCalendar class="visualitzacioDesktopAgenda" />
        <filtersCalendar v-if="myToggle==true" class="mt-4" />
      </b-col>

      <b-col cols="12" md="6" lg="7" xl="8" xxl="9" class="p-0 carrussel">
        <b-row
          ref="mascaraGaleria"
          class="position-relative overflow-hidden galeriaActivitats"
          v-if="isMobile==false"
        >
          <h3 class="mx-0 mt-2 mb-3 pt-4">Activitats {{keys[0]}}</h3>
          <gallery
            v-if="visibilitatGaleriaEsportiva"
            :activitatsCarousel="activitatsCarousel.Esportives"
            :titolGaleria="keys[0]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3"
          />
          <h3 class="mx-0 my-3 pt-4">Activitats {{keys[1]}}</h3>
          <gallery
            v-if="visibilitatGaleriaCultural"
            :activitatsCarousel="activitatsCarousel.Culturals"
            :titolGaleria="keys[1]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3"
          />
          <h3 class="mx-0 my-3 pt-4">Activitats {{keys[2]}}</h3>
          <gallery
            v-if="visibilitatGaleriaSocial"
            :activitatsCarousel="activitatsCarousel.Socials"
            :titolGaleria="keys[2]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 pb-5"
          />
        </b-row>

        <b-row v-if="isMobile==true" class="position-relative galeriaActivitats">
          <h3 class="m-0 pt-4">Activitats {{keys[0]}}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaEsportiva"
            :activitatsCarousel="activitatsCarousel.Esportives"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
          <h3 class="m-0 pt-4">Activitats {{keys[1]}}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaCultural"
            :activitatsCarousel="activitatsCarousel.Culturals"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
          <h3 class="m-0 pt-4">Activitats {{keys[2]}}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaSocial"
            :activitatsCarousel="activitatsCarousel.Socials"
            :titolGaleria="keys[2]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
        </b-row>

        <b-row class="m-0 pt-1 pb-5 justify-content-center carrussel">
          <b-button
            size="lg"
            href="http://ce-terrassa.cat/activitats-del-cet/"
            class="btnTipusActivitats tipusActivitats mr-xl-5"
          >
            <img
              src="../assets/botonsActivitats/tipusActivitats.png"
              class="mr-3 botonsActivitatsImg"
            />
            Totes les Activitats
          </b-button>
          <b-button
            size="lg"
            href="http://ce-terrassa.cat/infantilijuvenil/"
            class="btnTipusActivitats familiaActivitats"
          >
            <img
              src="../assets/botonsActivitats/familiaActivitats.png"
              class="mr-3 botonsActivitatsImg"
            />
            Activitats pels Teus Fills i en Família
          </b-button>
          <b-button
            size="lg"
            href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467"
            class="btnTipusActivitats wikilocActivitats ml-xxl-5 mx-lg-4"
          >
            <img src="../assets/botonsActivitats/Wikiloc.png" class="mr-3 botonsActivitatsImg" />
            Canal CET a Wikiloc
          </b-button>
        </b-row>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import gallery from "./gallery.vue";
import galleryMobile from "./galleryMobile.vue";
import filtersCalendar from "./filtersCalendar.vue";
import totesActivitats from "./json/activitatsCarousels.json";

export default {
  name: "activitats",

  components: {
    gallery,
    galleryMobile,
    filtersCalendar
  },

  data() {
    return {
      myToggle: false,
      activitatsCarousel: totesActivitats,
      keys: Object.keys(totesActivitats),
      visibilitatGaleriaEsportiva: true,
      visibilitatGaleriaCultural: true,
      visibilitatGaleriaSocial: true,
      isMobile: false,
      amplada: 0
    };
  },
  computed: {
    ampladaPantalla: function() {
      if (this.$refs.mascaraGaleria) {
        return this.$refs.mascaraGaleria.offsetWidth;
      } else {
        return this.amplada;
      }
    }
  },
  watch:{
    ampladaPantalla: function (){
      return this.$refs.mascaraGaleria.offsetWidth;
    }
  },
  mounted() {
    if (
      navigator.userAgent.match(/Android/i) ||
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) ||
      navigator.userAgent.match(/iPad/i) ||
      navigator.userAgent.match(/iPod/i) ||
      navigator.userAgent.match(/BlackBerry/i) ||
      navigator.userAgent.match(/Windows Phone/i)
    ) {
      this.isMobile = true;
    }
    if (this.activitatsCarousel.Esportives == undefined) {
      this.visibilitatGaleriaEsportiva = false;
    } else if (this.activitatsCarousel.Culturals == undefined) {
      this.visibilitatGaleriaCultural = false;
    } else if (this.activitatsCarousel.Socials == undefined) {
      this.visibilitatGaleriaSocial = false;
    }
    this.amplada = this.$refs.mascaraGaleria.offsetWidth;
  }
};
</script>

<style>

  .botonsActivitatsImg {
    width: 40px;
    height: 40px;
  }
</style>

<style scoped>
  @media (max-width: 767px) {
    .visualitzacioDesktopAgenda {
      display: none !important;
    }
  }

  .agendaFiltres {
    background: #3d4855;
  }

  .carrussel {
    background: #afc8ad;
  }

  .botons {
    background: #3d4855;
  }

  /* Marges i tamany dels carrusels d'activtats i del calendari i fltres */

  .galeriaActivitats{
    margin: 0 0 0 6.5rem;
  }

  .calendariFiltresMarges{
    padding: 2rem 0 3rem 6.5rem;
  }

  @media (max-width: 1500px) {
    .calendariFiltresMarges{
      padding: 1.5rem 0 3rem 3rem;
    }
    .galeriaActivitats {
      margin: 0 0 3rem 3rem;
    }
  }


  @media (max-width: 768px) {
    .calendariFiltresMarges{
      padding: 2rem 3rem 1rem 3rem;
    }
    .galeriaActivitats {
      margin: 0 3rem;
    }
  }

  /* Botons totes activitats en galeries */

  .btnTipusActivitats {
    border: none !important;
    font-size: 1.2rem !important;
    display: inline-flex !important;
    text-align: left !important;
    align-items: center !important;
    justify-content: center !important;
    color: cyan;
  }

  .btnTipusActivitats:hover {
    border: none !important;
    color: #103440;
    font-weight: 700;
  }

  .btnTipusActivitats:active {
    border: none !important;
    color: #103440;
    font-weight: 700;
  }

  .tipusActivitats {
    background-color: #e08d4b;
  }

  .tipusActivitats:hover {
    background-color: #ad7140;
  }

  .tipusActivitats:active {
    background-color: #ad7140;
  }

  @media (max-width: 1199px) {
    .tipusActivitats {
      margin-bottom: 1.5rem;
      margin-right: 3rem;
      margin-left: 3rem;
    }
  }

  .familiaActivitats {
    background-color: #a6bf4e;
  }

  .familiaActivitats:hover {
    background-color: #768639;
  }

  .familiaActivitats:active {
    background-color: #768639;
  }

  @media (max-width: 1199px) {
    .familiaActivitats {
      margin-right: 3rem;
      margin-left: 3rem;
    }
  }

  .wikilocActivitats {
    background-color: #82c1f4;
  }

  .wikilocActivitats:hover {
    background-color: #6898c0;
  }

  .wikilocActivitats:active {
    background-color: #6898c0;
  }

  @media (max-width: 1428px) {
    .wikilocActivitats {
      display: none !important;
    }
  }

  /* Botons que amaga els filtres i agenda en movil */

  .agendaFiltresButton {
    width: 100%;
    max-width: 350px;
  }

</style>
