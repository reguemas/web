<template>
  <b-container fluid class="p-0 m-0 fonsBlauCel">
    <div class="ferseSoci mx-auto">
      <h2 class="pt-5 px-1">Alta Soci 2020</h2>
      <p class="info pt-2 px-1">Gràcies pel teu interès a fer-te soci del Centre Excursionista de Terrassa</p> 
      <b-row cols="1" cols-lg="2" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsBlauGris alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=8" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Adult</p>
              <p class="descripcioSoci">Major de 31 anys</p>
              <p class="preuSoci">89 €/any</p>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsVermell alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=10" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Beneficiari/a</p>
              <p class="descripcioSoci">Cònjuge o Fill Menor de 18 anys de Soci Nominal</p>
              <p class="preuSoci">47 €/any</p>
            </a>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="3" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsGroc alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=11" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Jove</p>
              <p class="descripcioSoci">Nominal d'entre 14 i 30 anys</p>
              <p class="preuSoci">65 €/any</p>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsBlau alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=12" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Carnet Jove</p>
              <p class="descripcioSoci">Nominal d'entre 14 i 30 anys amb Carnet Jove</p>
              <p class="preuSoci">40 €/any</p>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsVerd alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=13" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Infantil</p>
              <p class="descripcioSoci">Fins als 13 anys</p>
              <p class="preuSoci">30 €/any</p>
            </a>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters class="pb-5">
        <b-col class="animacioSoci">
          <div class="fonsMarro alturaCasella m-1">
            <a href="http://ce-terrassa.cat/alta-soci-2020-%c2%b7-formulari/?Modalitat=Soci%20Provador&Preu=10.00&Quantitat=1" class="enllaçFerseSoci">
              <p class="modalitatSoci">Soci Provador</p>
              <p class="descripcioSoci">Dret a una activitat</p>
              <p class="descripcioSoci">Es pot repetir un màxim de tres cops</p>
              <p class="descripcioSoci">Es descomptarà de la quota en fer-se soci</p>
              <p class="preuSoci">10 €</p>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsTaronja alturaCasella m-1">
            <a href="http://ce-terrassa.cat/alta-soci-2020/#Avantatges" class="enllaçFerseSoci">
              <p class="modalitatSoci my-auto">Avantatges per als Socis</p>
            </a>
          </div>
        </b-col>
      </b-row>
    </div>
  </b-container>

</template>

<script>

//import webTop from "@/components/webTop.vue";

export default {
  name: "ferseSoci",
};

</script>

<style scooped>

  .ferseSoci{
    max-width:900px;
  }

  @media (max-width: 1000px) {
    .ferseSoci {
      max-width:768px;
      padding: 0 3.5rem;
    }
  }

  @media (max-width: 576px) {
    .ferseSoci {
      padding: 0 1.5rem;
    }
  }

  .info{
    font-family: Quicksand;
    font-size:1.2rem;
  }

  .alturaCasella{
    height:300px;
    border-radius:3px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.15);
  }

  .fonsVerd{
    background-color: #2af9d4;
  }

  .fonsBlau{
    background-color: #b1bbf8;
  }

  .fonsVermell{
    background-color: #ea5c5a;
  }

  .fonsTaronja{
    background-color: #ecab7b;
  }

  .fonsGroc{
    background-color: #f8e28f;
  }

  .fonsMarro{
    background-color: #c8c8ae;
  }

  .fonsBlauGris{
    background-color: #99b4c7;
  }

  .fonsBlauCel{
    background-color: #f8f9ff;
  }

  .animacioSoci{
    transition-delay: 1s;
    transition: all 0.3s ease;
  }

  .animacioSoci:hover{
    transform: scale(1.1);
    z-index:5 !important;
  }

  .enllaçFerseSoci{
    text-decoration: none;
    font-family: Quicksand;
    color: #404140!important;
    text-align:center;
    height:100%;
    display:flex;
    flex-wrap: wrap;
    padding: 0 1rem;
  }

  .modalitatSoci{
    font-family: "AveriaSerif";
    font-weight:600;
    font-size:1.5rem;
    width:100%;
    margin-top:2rem;
    margin-bottom:0px;
  }

  .descripcioSoci{
    font-size:1.2rem;
    width:100%;
    margin:0px;
  }

  .preuSoci{
    font-family: "AveriaSerif";
    font-size:2.5rem;
    color:black;
    align-self:flex-end;
    width:100%;
    padding-top:1rem;
    margin-bottom:1.7rem;
    border-top: 3px solid rgb(78, 78, 74);
  }

</style>
