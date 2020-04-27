<template>

  <b-container fluid class="p-0 m-0">
		<b-row class="capçalera m-0 pb-5 p-0 justify-content-center">
      <b-row class="avantatges p-0 mt-5 justify-content-around">
        <b-img src="logosCET/CENT10_esquerra_centre.png" alt="Logo Centre Excursionista Terrassa" class="logo"></b-img>
        <h1 class="titolAvantatges mt-4">Centre Excursionista de Terrassa</h1>
      </b-row>
      <b-row class="justify-content-center mt-4">
        <p class="subtitol w-50">
          Descobreix la muntanya i el nostre entorn amb una de les entitats esportives, culturals, 
          socials i concienciada amb el medi ambient més rellevants de la ciutat de Terrassa.
        </p>
      </b-row>	
    </b-row>
<!--       <b-row>
        <h1 class="w-100">Els Nostres Valors</h1>
        <div v-for="(valor) in valorsCET" :key="valorsCET.index">
          <div class="cardValor">{{ valor }}</div>
        </div>
      </b-row>
      <b-row>
        <h1 class="w-100">Que Hi Fem?</h1>
        <div v-for="(tipus) in tipusActivitats" :key="tipusActivitats.index">
          <div>{{ tipus }}</div>
        </div>
      </b-row>
      <b-row>
        <div>Et Formaràs a la muntanya</div>
        <div>Hi Faràs Amics per Tota la Vida</div>
      </b-row>
      <b-row>
        <h1 class="w-100">Obtindràs Descomptes</h1>
        <div v-for="(descompte) in descomptes" :key="descomptes.index">
          <div>{{ descompte }}</div>
        </div>
      </b-row> -->
    
  </b-container>

</template>

<script>

export default {
  name: "avantatges",

  data() {
    return {
      valorsCET: ["Esforç i Superació","Tots els Socis Tenen Veu","Seu Social amb Bar i Rocodrom","Integració Social","Compromís Social"],
      tipusActivitats: ["Esportives","Socials","Culturals"],
      descomptes:["Sial Terrassa","Camarasa Muntanya","Gravetat Zero","Malarec","La Nau Outdoor Store","Bruc Espai Salut","Look and Remember"],
    }
  }
};

</script>

<style scooped>

  .capçalera{
    background-color:#aaaacc;
    height: 100%;
  }

  .avantatges{
    max-width:1024px;
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
  }

  .cardValor{
    width:150px;
    height:150px;
    border-radius:10px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
    background-color:cadetblue;
    padding:20px;
    color:cyan;
    text-align: center;
    font-family: Marker;
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
