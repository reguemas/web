<template>
  <b-container fluid class="p-0 m-0 fonsBlauCel">
    <div class="ferseSoci mx-auto">
      <h2 class="pt-5 px-1">Activitats per Arees del Centre</h2>
      <p class="info py-3 px-1">Les activitats que es desenvolupen al CET s'organitzen amb aquestes Arees, Seccions i Vocalies. Aquí podràs trobar les activitats on participar.</p> 
      <b-row cols="1" cols-lg="2" no-gutters>
        <b-col class="animacioSoci">
          <div class="fonsBlauGris alturaCasella m-1">
            <div class="enllaçFerseSoci">
              <p class="modalitatSoci">Area Esportiva</p>
              <a href="#" class="descripcioSoci">Secció Excursionisme</a>
              <a href="#" class="descripcioSoci">Secció Alta Muntanya</a>
              <a href="#" class="descripcioSoci">Secció Infantil i Juvenil</a>
              <a href="#" class="descripcioSoci">Secció Espeleologia</a>
              <a href="#" class="descripcioSoci">Secció Esquí</a>
            </div>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsVermell alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=10" class="enllaçFerseSoci">
              <p class="modalitatSoci">Area Científica-Social</p>
              <p class="descripcioSoci">Cònjuge o Fill Menor de 18 anys de Soci Nominal</p>
              <p class="preuSoci">47 €/any</p>
            </a>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters class="pb-5">
        <b-col class="animacioSoci">
          <div class="fonsGroc alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=11" class="enllaçFerseSoci">
              <p class="modalitatSoci">Area Formació</p>
              <p class="descripcioSoci">Nominal d'entre 14 i 30 anys</p>
              <p class="preuSoci">65 €/any</p>
            </a>
          </div>
        </b-col>
        <b-col class="animacioSoci">
          <div class="fonsBlau alturaCasella m-1">
            <a href="https://ceterrassa.playoffinformatica.com/Preinscripcio.php?idConfiguracioFormulariColegi=12" class="enllaçFerseSoci">
              <p class="modalitatSoci">Area Social</p>
              <p class="descripcioSoci">Nominal d'entre 14 i 30 anys amb Carnet Jove</p>
              <p class="preuSoci">40 €/any</p>
            </a>
          </div>
        </b-col>
      </b-row>
    </div>
  </b-container>

</template>

<script>

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
