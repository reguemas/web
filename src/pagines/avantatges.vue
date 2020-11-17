<template>

  <b-container fluid class="p-0 m-0">
		<b-row class="capçalera m-0 py-5 px-0 justify-content-center">
      <b-row class="avantatges p-0 justify-content-around">
        <b-img src="logosCET/CENT10_esquerra_centre.png" alt="Logo Centre Excursionista Terrassa" class="logo"></b-img>
        <h1 class="titolAvantatges mt-4">Centre Excursionista de Terrassa</h1>
      </b-row>
      <b-row class="justify-content-center mt-3">
        <p class="subtitol w-50">
          Descobreix la muntanya i el nostre entorn amb una de les entitats esportives, culturals, 
          socials i concienciada amb el medi ambient més rellevants de la ciutat de Terrassa.
        </p>
      </b-row>
    </b-row>
<!--     <div class="triangleCapçalera"></div>
    <div class="triangleSupValors"></div> -->
    <b-row class="valors m-0 px-0 py-5 justify-content-center">
      <b-row class="avantatges p-0 justify-content-center">
        <h1 class="w-100 text-center mb-5">Els Nostres Valors</h1>
        <div v-for="(valor) in valorsCET" :key="valor.index">
          <div class="cardValor justify-content-center m-3">{{ valor }}</div>
        </div>
      </b-row>
    </b-row>
    <b-row class="queFem m-0 py-5 px-0 justify-content-center">
      <b-row class="avantatges p-0 justify-content-center">
        <h1 class="w-100 text-center mb-5">Que Hi Fem?</h1>
        <div v-for="(tipus) in tipusActivitats" :key="tipus.index">
          <div class="cardFem m-4">{{ tipus }}</div>
        </div>
      </b-row>
    </b-row>
    <b-row class="formacio m-0 py-5 px-0 justify-content-center">
      <div class="seccioFormacioAmics">Et Formaràs a la muntanya</div>
    </b-row>
    <b-row class="seccioAmics m-0 py-5 px-0 justify-content-center">
      <div class="seccioFormacioAmics">Hi Faràs Amics per Tota la Vida</div>
    </b-row>
    <b-row class="queFem m-0 py-5 px-0 justify-content-center">
      <b-row class="avantatges p-0 justify-content-center">
        <h1 class="w-100 text-center mb-5">Obtindràs Descomptes</h1>
        <div v-for="(descompte) in descomptes" :key="descompte.index">
          <div class="cardDescompte m-3">{{ descompte }}</div>
        </div>
      </b-row>
    </b-row>
  </b-container>

</template>

<script>

export default {
  name: "avantatges",

  data() {
    return {
      valorsCET: ["Esforç i Superació","Tots els Socis Tenen Veu","Seu Social amb Bar i Rocodrom","Integració Social","Compromís Social"],
      tipusActivitats: ["Activitats Esportives","Activitats Socials","Activitats Culturals"],
      descomptes:["Sial Terrassa","Camarasa Muntanya","Gravetat Zero","Malarec","La Nau Outdoor Store","Bruc Espai Salut","Look and Remember"],
    }
  }
};

</script>

<style scooped>

  .avantatges{
    max-width:1024px;
  }

  .capçalera{
    background-color:#aaaacc;
    height: 100%;
  }

  .valors{
    background-color:#59d0c3;
    height: 100%;
  }

  .queFem{
    background-color:#a9dbd4;
    height: 100%;
  }

  .formacio{
    background-color:#3a90ba;
    height: 100%;
  }

  .seccioAmics{
    background-color:#13b3d8;
    height: 100%;
  }

  .logo {
    width:auto !important;
    height:140px !important;
  }

  .titolAvantatges{
    text-transform: uppercase;
    color:black;
    width:60%;
  }

  .subtitol{
    font-family:Marker;
    font-size:1.3rem;
    text-align:center;
    color:cyan;
  }

  .triangleCapçalera{
    width: 0;
    height: 0;
    background: transparent;
    border-left: 0vw solid transparent;
    border-right: 99vw solid transparent;
    border-top: 100px solid  #aaaacc;
  }

  .triangleSupValors{
    width: 0;
    height: 0;
    background: transparent;
    border-left: 99.1vw solid transparent;
    border-right: 0vw solid transparent;
    border-bottom: 100px solid  #59d0c3;
  }

  .cardValor{
    width: 175px;
    height: 175px;
    border-radius:10px;
    box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
    background-color:cadetblue;
    font-family: Marker;
    font-size:1.2rem;
    color:cyan;
    text-align:center;
    padding:20px;
    display:flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
  }

  .cardFem{
    width:250px;
    height:250px;
    border-radius:10px;
    box-shadow: 20px 20px 20px rgba(0,0,0,0.5);
    background-color:cadetblue;
    font-family: Marker;
    font-size:2rem;
    color:cyan;
    text-align:center;
    padding:20px;
    display:flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
  }

  .cardDescompte{
    width:200px;
    height:200px;
    border-radius:10px;
    box-shadow: 10px 10px 10px rgba(0,0,0,0.3);
    background-color:cadetblue;
    font-family: Marker;
    font-size:2rem;
    color:cyan;
    text-align:center;
    padding:20px;
    display:flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
  }

  .seccioFormacioAmics{
    font-family: Marker;
    font-size:3rem;
    color:cyan;
    text-align:center;
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


</style>
