<template>
    <div>
      <b-row class="m-0">
        <b-col cols="12" md="5" xl="3" class="calendar d-flex flex-column">

          <!-- Visualitzacio nomes en mobil -->
          
          <b-button :pressed.sync="myToggle" size="lg" variant="info" class="my-4 d-md-none justify-content-center">Filtres i Agenda</b-button>
          <div v-if=myToggle class="d-md-none">
            <b-form v-if=myToggle class="mb-4 w-50 mx-auto">
              <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
              <b-form-select
                class="mt-3"
                :value="null"
                :options="['One','Two','Three']"
                id="filtreActivitat"
              >
                <option slot="first" :value="null">Busca Activitats</option>
              </b-form-select>

              <b-form-select
                class="mt-3"
                :value="null"
                :options="['Gener','Febrer','Març','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre']"
                id="filtreMes"
              >
                <option slot="first" :value="null">Quin Mes</option>
              </b-form-select>
            </b-form>
            <v-calendar is-dark is-expanded></v-calendar>
            <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4>
            <card class= "my-4 mx-auto"/>
          </div>

          <!-- Visualitzacio en dues columnes -->

          <div class="d-none d-md-flex flex-column">
          <b-form class="my-4 w-75 mx-auto">
            <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
            <b-form-select
              class="mt-3"
              :value="null"
              :options="['One','Two','Three']"
              id="filtreActivitat"
            >
              <option slot="first" :value="null">Busca Activitats</option>
            </b-form-select>
            <b-form-select
              class="mt-3"
              :value="null"
              :options="['Gener','Febrer','Març','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre']"
              id="filtreMes"
            >
              <option slot="first" :value="null">Quin Mes</option>
            </b-form-select>
          </b-form>
          <v-calendar is-dark is-expanded class=""></v-calendar>
          <h4 class="mt-4 mx-auto textCyan">Activitat Seleccionada</h4>
          <card class= "mt-4 mx-auto"/>
          </div>
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
import card from './components/home/card.vue'
import gallery from './components/home/gallery.vue'
import totesActivitats from './static/carousels/carousel.json'

export default {
  name: 'activitats',

  components: {
    card,
    gallery,
  },

  data() {
    return {
      myToggle: false,
      activitatsCarousel: totesActivitats,
      keys: Object.keys(totesActivitats)
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
