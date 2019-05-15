<template>
  <div>
    <navMenu/>

    <b-container fluid class="p-0">
      <b-row class="m-0">
        <b-col cols="2" class="p-0">
          <h3 class="ml-5 textCyan">Això faràs al:</h3>
          <div class="transperencia"></div>
          <h3 class="ml-5 textCyan bottom-row">Aquí Trobaràs</h3>
          <!-- <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa" href="#" class="mt-0 ml-5"></b-img> -->
        </b-col>
        <b-col cols="10" class="p-0 position-relative">
          <!-- <div class="p-2 bg-success text-white">2 de 3</div> -->
          <homeSlider/>
          <b-jumbotron header="CENTRE EXCURSIONISTA DE TERRASSA" lead="Vine a Coneixer-ho" fluid class="d-none d-lg-flex w-50">
            <b-button variant="success" size="lg" href="#" class="p-3 my-4">Mira els Avantatges!</b-button>
          </b-jumbotron>
        </b-col>
      </b-row>
      <b-row class="m-0 filters">
        <b-col cols="3" class="p-0 calendar">
          <b-form inline class="mt-4 justify-content-center">
            <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
            <b-form-select
              class="mb-2 mr-sm-3 mb-sm-0"
              :value="null"
              :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
              id="Inline-Filters"
            >
              <option slot="first" :value="null">Busca Activitats</option>
            </b-form-select>

            <b-form-select
              class="mb-2 mr-sm-2 mb-sm-0 form-control-lg"
              :value="null"
              :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
              id="inline-form-custom-select-pref"
            >
              <option slot="first" :value="null">Quin Mes</option>
            </b-form-select>
<!--             <b-button type="submit" variant="success" class="px-5">Cerca</b-button> -->
          </b-form>
          <v-calendar is-dark class="mt-5 d-flex mx-auto"></v-calendar>
        </b-col>
        <b-col cols="9" class="p-0 position-relative">
          <h2 class="m-3">Activitats</h2>
            <b-link href="#">
              <b-card
              overlay
              img-src="https://picsum.photos/400/400/?image=41"
              img-alt="Image"
              style="max-width: 20rem;"
              ></b-card>
            </b-link>
          
          
        </b-col>
      </b-row>

      <b-row class="m-0">
        <b-col cols="2" class="p-0">
        </b-col>

      </b-row>
      
    </b-container>
    <HelloWorld/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import navMenu from './components/menu.vue'
import homeSlider from './components/carousel.vue'

export default {
  name: 'app',

  components: {
    HelloWorld,
    navMenu,
    homeSlider,
  }
}

</script>

<style>

  .jumbotron{
    background-color: transparent !important;
    position:absolute;
    top:6%;
    left:-11%;
    padding-top:0;
    color: rgb(13,189,151);
  }

  .transperencia{
    background-color: rgba(54,54,54,0.3);
    height:70%;
    width:275%;
    margin-top:15%;
    border-radius:0% 50% 50% 0%;
  }

  .bottom-row{
    position: absolute;
    bottom:0;
    line-height: 0;
    z-index:5;
  }

  .lead{
    font-size:1.5rem !important;
    font-weight:500 !important;
    color:cyan;
    letter-spacing: 2px;
  }
  
  .jumbotron a:hover{
    color:#103440;
    font-weight:700;
  }

  .textCyan{
    color:cyan;
  }

  #cards{
    background-color:rgb(13,189,151);
  }

  .calendar{
    background-color: rgba(54,54,54,0.3);
  }

  .filters{
    background-color: #b1c1d0;
    font-size:1.5rem !important;
    font-weight:900 !important;
  }

  #buttonFilters{
    margin-top:-5rem;
    z-index:5000 !important;
  }

/*   #filters{
    background-color: #2bcbbaff;
    line-height: 12rem;
    font-size:1.5rem !important;
    font-weight:900 !important;
    margin-top:-2.5rem;
  } */

</style>
