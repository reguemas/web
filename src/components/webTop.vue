<template>
    <b-container fluid class="p-0">
      <b-row no-gutters>
        <b-col no-gutters cols="12" md="3" xl="2">
          <div id="logoBrand" class="displayNoneMobile">
            <b-navbar-brand href="#" fluid-grow id="logoBrand" class="ml-5 d-inline">
              <b-img src="CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa"></b-img>
            </b-navbar-brand>
            <h2 class="ml-4 mt-3 textCyan d-inline escripturaGran">Al</h2>
          </div>

          <div class="transperencia"></div>
          <h4 class="ml-4 textCyan bottom-row displayNoneMobile escripturaPetita">Trobaràs</h4>
        </b-col>

        <b-col no-gutters cols="0" md="9" xl="10" class="position-relative">
          <homeSlider/>
          <b-jumbotron header="CENTRE EXCURSIONISTA TERRASSA" lead="Vine a Coneixer-ho!" fluid class="textCyan">
            <b-button id="jumbotronButton" variant="success" size="lg" href="#" class="my-2">Mira els Avantatges!</b-button>
          </b-jumbotron>
        </b-col>

      </b-row>
    </b-container>
</template>

<script>
import homeSlider from './webTopSlider.vue'

export default {
  name: 'webTop',

  components: {
    homeSlider,
  },


}

</script>

<style>

  /* Logo de marca */

  #logoBrand{
    margin-top:-80px !important;
  }

  /* Jumbotron */

  .jumbotron{
    background-color: transparent !important;
    position:absolute;
    top:-5%;
    left:-11%;
    padding-top:0;
    color: rgb(13,189,151);
  }

  @media (min-width:768px) and (max-width: 1199px) {
    .jumbotron {
      left:-20%;
    }
  }

  @media (max-width:767px) {
    .jumbotron {
      text-align:center;
      left:0%;
      top:5% !important;
      width:100% !important;
    }
  }

  .jumbotron h1{
    font-size: 2rem;
  }

  @media (min-width: 768px) {
    .jumbotron h1 {
      font-size: 4.5rem !important;
      width:50% !important;
    }
  }

  #jumbotronButton {
    font-family:"QuickSand";
    font-weight:bold !important;
    letter-spacing: 1px;
  }

  @media (max-width: 1200px) {
    #jumbotronButton {
      font-size: 1.1rem !important;
    }
  }

  .bottom-row{
    position: absolute;
    bottom:0;
    line-height: 0;
    z-index:5;
  }

  .lead{
    font-family:"Escriptura";
    letter-spacing: 2px;
    font-size:2.5rem !important;
    font-weight:500 !important;
    color:#cfc8b5;
    margin-bottom:0 !important;
  }

  .jumbotron a:hover{
    color:#103440;
    font-weight:700;
  }

  /* Background del Jumbotron*/

  .transperencia{
    background-color: rgba(54,54,54,0.5);
    height:330px;
    width:825px;
    margin-top:96px;
    border-radius:0% 200px 200px 0%;
    overflow:hidden;
    display:none;
  }

  @media (max-width: 992px) {
    .transperencia {
      width:750px;
      margin-top:106px;
    }
  }

  @media (min-width: 768px) {
    .transperencia {
      display: flex;
    }
  }

  @media (max-width: 992px) {
    .displayNoneMobile {
      display: none !important;
    }
  }

  .escripturaGran{
    font-family:"Escriptura";
    letter-spacing: 2px;
    font-size:4rem;
  }

  .escripturaPetita{
    font-family:"Escriptura";
    letter-spacing: 2px;
    font-size:3rem;
  }

</style>