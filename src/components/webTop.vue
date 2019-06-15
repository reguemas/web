<template>
    <b-container fluid class="p-0">
      <b-row no-gutters>
        <b-col no-gutters cols="12" sm="3" xl="2">
          <b-navbar-brand href="#" fluid-grow id="logoBrand" class="ml-5 d-flex">
            <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa"></b-img>
            <h2 class="ml-5 mt-3 textCyan d-none d-sm-block">Al</h2>
          </b-navbar-brand>
          <div class="transperencia"></div>
          <h3 class="ml-5 textCyan bottom-row d-none d-sm-block">Aquí Trobaràs</h3>
        </b-col>

        <b-col no-gutters cols="0" sm="9" xl="10" class="position-relative">
          <!-- <div class="p-2 bg-success text-white">2 de 3</div> -->
          <homeSlider/>
          <b-jumbotron header="CENTRE EXCURSIONISTA TERRASSA" lead="Vine a Coneixer-ho!" fluid class="textCyan w-50">
            <b-button id="jumbotronButton" variant="success" size="lg" href="#" class="my-2">Mira els Avantatges!</b-button>
          </b-jumbotron>
        </b-col>

      </b-row>
    </b-container>
</template>

<script>
import homeSlider from './carousel.vue'

export default {
  name: 'webTop',

  components: {
    homeSlider,
  }
}

</script>

<style>

  #logoBrand{
    margin-top:-90px;
  }

  @media (max-width: 1024px) {
    #logoBrand img {
      display: none !important;
    }
  }

  .jumbotron{
    background-color: transparent !important;
    position:absolute;
    top:-5%;
    left:-11%;
    padding-top:0;
    color: rgb(13,189,151);
  }

  @media (min-width:768px) and (max-width: 1024px) {
    .jumbotron {
    left:-22%;
    }
  }

    @media (max-width: 767px) {
    .jumbotron {
      display:none;
    }
  }

  .jumbotron h1{
    font-size: 4.5rem !important;
  }

  .btn{
    font-family:"QuickSand";
    font-size: 1.5rem;
    font-weight:bold !important;
    letter-spacing: 1px;
  }

  .transperencia{
    background-color: rgba(54,54,54,0.5);
    height:330px;
    width:810px;
    margin-top:93px;
    border-radius:0% 200px 200px 0%;
    overflow:hidden;
  }

  @media (max-width: 1024px) {
    .transperencia {
      margin-top: 122px;
    }
  }

  @media (max-width: 992px) {
    .transperencia {
      width:730px;
    }
  }

  @media (max-width: 640px) {
    .transperencia {
      display:none;
    }
  }

  .bottom-row{
    position: absolute;
    bottom:0;
    line-height: 0;
    z-index:5;
  }

  .lead{
    font-size:1.3rem !important;
    font-weight:500 !important;
    color:cyan;
    letter-spacing: 2px;
  }

  .jumbotron a:hover{
    color:#103440;
    font-weight:700;
  }

</style>