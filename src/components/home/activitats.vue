<template>
  <b-container fluid class="mx-0 p-0">
    <b-row class="m-0 p-0">
      <b-col cols="12" md="6" lg="5" xl="4" xxl="3" class="agendaFiltresFons calendariFiltresMarges">
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

      <b-col cols="12" md="6" lg="7" xl="8" xxl="9" class="p-0 activitatsFons">
        <b-row
          ref="mascaraGaleria"
          class="position-relative overflow-hidden galeriaActivitatsMarges"
          v-if="isMobile==false"
        >
          <h3 class="mx-0 mt-2 mb-3 pt-4 w-100">Activitats {{ keys[0] }}</h3>
          <gallery
            v-if="visibilitatGaleriaEsportiva"
            :activitatsCarousel="activitatsCarousel.esportives"
            :titolGaleria="keys[0]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3"
          />
          <h3 class="mx-0 my-3 pt-4 w-100">Activitats {{ keys[1] }}</h3>
          <gallery
            v-if="visibilitatGaleriaCultural"
            :activitatsCarousel="activitatsCarousel.culturals"
            :titolGaleria="keys[1]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3"
          />
          <h3 class="mx-0 my-3 pt-4 w-100" style="text-transform: capitalize;">Activitats {{ keys[2] }}</h3>
          <gallery
            v-if="visibilitatGaleriaSocial"
            :activitatsCarousel="activitatsCarousel.socials"
            :titolGaleria="keys[2]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 pb-5"
          />
        </b-row>

        <b-row v-if="isMobile==true" class="position-relative galeriaActivitatsMarges">
          <h3 class="m-0 pt-4 w-100">Activitats {{ keys[0] }}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaEsportiva"
            :activitatsCarousel="activitatsCarousel.esportives"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
          <h3 class="m-0 pt-4 w-100">Activitats {{ keys[1] }}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaCultural"
            :activitatsCarousel="activitatsCarousel.culturals"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
          <h3 class="m-0 pt-4 w-100">Activitats {{ keys[2] }}</h3>
          <galleryMobile
            v-if="visibilitatGaleriaSocial"
            :activitatsCarousel="activitatsCarousel.socials"
            :titolGaleria="keys[2]"
            :ampladaPantallaActivitat="ampladaPantalla"
            class="pt-3 overflow-auto"
          />
        </b-row>

        <b-row class="m-0 pt-1 justify-content-start botonsActivitatsMarges">
          <b-button
            size="lg"
            href="http://ce-terrassa.cat/activitats-del-cet/"
            class="btnTipusActivitats tipusActivitats mr-xl-5"
          >
            <img
              src="../../assets/botonsActivitats/tipusActivitats.png"
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
              src="../../assets/botonsActivitats/familiaActivitats.png"
              class="mr-3 botonsActivitatsImg"
            />
            Activitats pels Teus Fills i en Família
          </b-button>
        </b-row>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>

  import gallery from "@/components/home/gallery.vue";
  import galleryMobile from "@/components/home/galleryMobile.vue";
  import filtersCalendar from "@/components/home/filtersCalendar.vue";
  import totesActivitats from "@/static/carousels/activitatsCarousels.json";

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
    if (this.activitatsCarousel.esportives == undefined) {
      this.visibilitatGaleriaEsportiva = false;
    } else if (this.activitatsCarousel.culturals == undefined) {
      this.visibilitatGaleriaCultural = false;
    } else if (this.activitatsCarousel.socials == undefined) {
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

  .agendaFiltresFons {
    background: #737373;
  }

  .activitatsFons {
    background: #f7f7f7;
    background-size:cover;
    position:relative;
  }

  .activitatsFons::after{
    content: "";
    width:100%;
    height: 100%;
    background-image:url('~@/assets/cotesNivellMolaWeb.png');
    background-size:cover;
    opacity: 0.25;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0; 
  }

  .botons {
    background: #3d4855;
  }

  /* Marges i tamany dels carrusels d'activtats i del calendari i fltres */

  .galeriaActivitatsMarges{
    margin: 0 0 0 3.25rem;
    color:#737373;
    z-index: 1;
  }

  .calendariFiltresMarges{
    padding: 2rem 3.25rem 5.5rem 6.5rem;
  }

  @media (max-width: 1500px) {
    .calendariFiltresMarges{
      padding: 1.5rem 3.25rem 5.5rem 3rem;
    }
    .galeriaActivitats {
      margin: 0 0 3rem 3rem;
    }
  }

  @media (max-width: 768px) {
    .calendariFiltresMarges{
      padding: 2rem 3rem 2rem 3rem;
    }
    .galeriaActivitats {
      margin: 0 3rem;
    }
  }

  .botonsActivitatsMarges{
    padding-bottom:5.5rem;
  }

  /* Botons totes activitats en galeries */

  .btnTipusActivitats {
    border: none !important;
    font-size: 1.2rem !important;
    display: inline-flex !important;
    text-align: left !important;
    align-items: center !important;
    justify-content: center !important;
    color:#f7f7f7;
    margin-bottom: 3.5rem;
    z-index: 1;
  }

  .btnTipusActivitats:hover {
    border: none !important;
    font-weight: 700;
    color:#303030;
  }

  .btnTipusActivitats:active {
    border: none !important;
    font-weight: 700;
    color:#303030;
  }

  .tipusActivitats {
    background-color: #e08d4b;
    margin-left: 3.25rem;
  }

  .tipusActivitats:hover {
    background-color: #ad7140;
    color:#303030;
  }

  .tipusActivitats:active {
    background-color: #ad7140;
    color:#303030;
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
    color:#303030;
  }

  .familiaActivitats:active {
    background-color: #768639;
    color:#303030;
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
    color:#303030;
  }

  .wikilocActivitats:active {
    background-color: #6898c0;
    color:#303030;
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

  h3 {
    text-transform: capitalize;
  }

</style>
