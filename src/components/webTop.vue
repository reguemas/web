<template>
    <div>
      <b-row id="homeSlider" class="m-0">
        <b-col cols="2" class="p-0">
          <b-navbar-brand href="#" fluid-grow id="logoBrand" class="ml-5 d-flex">
            <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa"></b-img>
            <h2 class="ml-5 mt-3 textCyan">Al</h2>
          </b-navbar-brand>
          
          <div class="transperencia"></div>
<!--           <div class="verd"></div>
          <div class="vermell"></div>
          <div class="blau"></div> -->
          <h3 class="ml-5 textCyan bottom-row">Aquí Trobaràs</h3>
          <!-- <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa" href="#" class="mt-0 ml-5"></b-img> -->
        </b-col>
        <b-col cols="10" class="p-0 position-relative">
          <!-- <div class="p-2 bg-success text-white">2 de 3</div> -->
          <homeSlider/>
          <b-jumbotron header="CENTRE EXCURSIONISTA TERRASSA" lead="Vine a Coneixer-ho!" fluid class="textCyan w-50">
            <b-button id="jumbotronButton" variant="success" size="lg" href="#" class="my-2">Mira els Avantatges!</b-button>
          </b-jumbotron>
        </b-col>
      </b-row>
    </div>
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

  .jumbotron{
    background-color: transparent !important;
    position:absolute;
    top:-10%;
    left:-11%;
    padding-top:0;
    color: rgb(13,189,151);
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
    height:62%;
    width:275%;
    margin-top:21%;
    border-radius:0% 200px 200px 0%;
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

  .verd{
    background-color: rgb(65, 145, 45);
    height:10%;
    width:150%;
    margin-top:20%;
    margin-left:45%;
  }

  .vermell{
    background-color: rgb(252, 73, 73);
    height:10%;
    width:275%;
    margin-top:15%;
    margin-left:45%;
  }

  .blau{
    background-color: rgb(12, 169, 241);
    height:10%;
    width:185%;
    margin-top:15%;
    margin-left:45%;
  }

</style>