<template>
  <b-container fluid class="p-0 m-0 fonsBlauCel">
    <div class="ferseSoci mx-auto">
      <h2 class="pt-5 px-1 text-center">Projectes on Col·laborar al Centre</h2>
      <p class="info pt-2 px-1">Aquests són alguns dels projectes que estan en marxa en el Centre Excursionista de Terrassa.</p> 
      <b-row cols="1" cols-lg="2" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsBlauGris alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=8" class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Ampliació de la Seu Social</h3>
              <div class="descripcioSoci mx-auto">Amb la compra d'una part de l'Arxiu Tobella. Es busca crear nous espais a la Seu del Centre</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsVermell alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Publicació del Llibre sobre la Història del Club</h3>
              <div class="descripcioSoci mx-auto">Una entitat com la nostra, amb més de 110 anys d'història, ha de documentar i publicar la seva Història.</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </div>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsGroc alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Escola de Muntanya</h3>
              <div class="descripcioSoci mx-auto">Com a prioritat principal de la junta orientada a la formació. La creació d'una Escola de Muntanya per a l'ensenyament de totes les arees de la Natura. Homologada per la FEEC.</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </div>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsBlau alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Activitats Extraescolars</h3>
              <div class="descripcioSoci mx-auto">Tota entitat necessita sàvia nova i qué millor que crear una pedrera, i omplir el centre de joves i infants corrent, aprenent i divertint-se.</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </div>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsVerd alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Integració Social d'Infants, Joves i Adults</h3>
              <div class="descripcioSoci mx-auto">Una Entitat Social no pot viure aliena a la societat, per tant, s'ha creat aquest projecte perque no hi hagi cap barrera per accedir al món de la muntanya.</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </div>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsMarro alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <h3 class="modalitatSoci">Creació o Gestió del Refugi Cellers</h3>
              <div class="descripcioSoci mx-auto">Tota entitat necessita sàvia nova i qué millor que crear una pedrera, i omplir el centre de joves i infants corrent, aprenent i divertint-se.</div>
              <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Col·labora</b-button>
            </div>
          </div>
        </b-col>
      </b-row>
      <b-row class="pb-5" no-gutters>
        <div class="fonsVermellClar alturaCasella m-1 animacioSoci">
          <div class="enllaçFerseSoci">
            <h3 class="modalitatSoci">Proposa el teu proi Projecte</h3>
            <div class="descripcioSoci mx-auto">La Junta està oberta a escoltar, recolzar qualsevol projecte que qualsevol soci, secció, vocalia vulgui proposar.</div>
            <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="px-3 py-2 mx-auto">Proposa</b-button>
          </div>
        </div>
      </b-row>
    </div>
  </b-container>

</template>

<script>

export default {
  name: "projectes",
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

  .fonsVermellClar{
    background-color: #9e9393;
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
    align-items:center;
    height:100%;
    display:flex;
    flex-wrap: wrap;
    padding: 1rem 1.5rem;
  }

  .modalitatSoci{
    font-family: "AveriaSerif";
    font-weight:600;
    font-size:1.5rem;
    width:100%;
    margin:0px;
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
