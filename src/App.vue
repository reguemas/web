<template>
  <div>
    <navMenu/>

    <b-container fluid class="p-0">
      <b-row class="m-0">
        <b-col cols="2" class="p-0">
          <h3 class="ml-5 text-white">Això faràs al:</h3>
          <div class="transperencia"></div>
          <!-- <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa" href="#" class="mt-0 ml-5"></b-img> -->
        </b-col>
        <b-col cols="10" class="p-0 position-relative">
          <!-- <div class="p-2 bg-success text-white">2 de 3</div> -->
          <homeSlider/>
          <b-jumbotron header="CENTRE EXCURSIONISTA DE TERRASSA" lead="Vine a Coneixer-ho" fluid class="d-none d-lg-flex w-50">
            <b-button variant="primary" size="lg" href="#" class="p-3 my-4">Mira els Avantatges!</b-button>
          </b-jumbotron>
          
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
    background-color: rgba(54,54,54,0.6);
    height:70%;
    width:275%;
    margin-top:15%;
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

</style>
