<template>
  <div
    class="cardBody"
    @mouseover = "hover=true"
    @mouseleave = "hover=false"
    :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'250px 250px'}"
  >
    <a
      class="cardImg" 
      :href="this.activitat.url"
    >     
      <div class="cardTitle" :class="{ mobileBackground:hover }">
        <h3 class="titol">{{ activitat.title }}</h3>
        <div class="activitatInfo">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div class="activitatInfo" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div class="activitatInfo" v-if="activitat.dificultat!=0">Dificultat: {{ activitat.dificultat }}</div>
        <div v-if=hover class="cardInfo mt-3">{{ activitat.descripcio }}</div>
      </div>
    </a>
  </div>
</template>

<script>

export default {
  name: 'card',

  props:["activitat"],

  data() {
    return {
      hover:false,
    };
  },

  mounted() {
    if( navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
      this.hover=true;
    }
  },

}

</script>

<style scoped>

/*   .cardActivitatTamany{
    width: 250px;
    height: 250px;
    
  }

  .cardActivitatImgTamany {
    width: 250px;
    height: 250px;
  }

  .cardActivitatImgTamany:hover {
    width: 300px;
    height: 300px;
  }

  .cardActivitatTamany:hover{
    width: 300px;
    height: 300px;
  } */

</style>

<style>

  .mobileBackground{
    background:rgba(0,0,0,0.3);
  }

  .cardBody{
    width: 250px;
    height: 250px;
    overflow:hidden;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
    text-align:center;
  }

  .cardBody:hover{
    width: 300px;
    height: 300px;
  }

  .cardImg {
    text-decoration:none !important;
    display:block;
    width: 250px;
    height: 250px;
  }

    .cardBody:hover{
    width: 300px;
    height: 300px;
  }

  .cardImg :hover {
    background: rgba(0,0,0,0.8);
    text-decoration:none !important;
  }

  a:hover {
    text-decoration:none !important;
  }

  .cardTitle{
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

  .cardTitle :hover {
    background:transparent;
  }

  .titol {
    font-family: Quicksand;
    color:cyan;
    font-size:1.3rem;
    padding-bottom:10px;
    border-bottom: 3px solid yellow;
  }

  .activitatInfo{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.1rem;
  }

  .cardInfo{
    color:cyan;
    font-size:1rem;
  }

</style>

