<template>
  <div
    class="cardBodyMobile"
  >
    <a
      class="cardImgMobile" 
      :href="this.activitat.url"
      :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'300px 300px'}"
    >     
      <div class="cardTitleMobile mobileBackground">
        <h3 class="titolMobile">{{ activitat.title }}</h3>
        <div class="activitatInfoMobile">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
        <div class="activitatInfoMobile" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div class="activitatInfoMobile" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div class="activitatInfoMobile" v-if="activitat.dificultat!=0">Dificultat: {{ activitat.dificultat }}</div>
        <div class="cardInfoMobile mt-3">{{ activitat.descripcio }}</div>
      </div>
    </a>
  </div>
</template>

<script>

export default {
  name: 'cardMobile',

  props:["activitat"],

}

</script>

<style>

  .mobileBackground{
    background:rgba(0,0,0,0.1);
  }

  .cardBodyMobile{
    width: 300px;
    height: 300px;
    position:relative;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease-in-out;
    text-align: center;
  }

  .cardImgMobile {
    text-decoration:none !important;
    display:block;
    width: 300px;
    height: 300px;
    overflow:hidden;
  }

  a:hover {
    text-decoration:none !important;
  }

  .cardTitleMobile{
    padding:15px;
    height:100%;
    width:100%;
    background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.6) 0%,
      rgba(0, 0, 0, 0.6) 45%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

  .cardTitleMobile :hover {
    background:transparent;
  }

  .titolMobile {
    font-family: Quicksand;
    color:cyan;
    font-size:1.3rem;
    padding-bottom:10px;
    border-bottom: 3px solid yellow;
  }

  .activitatInfoMobile {
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.1rem;
  }

  .cardInfoMobile {
    color:cyan;
    font-size:1rem;
  }

</style>

