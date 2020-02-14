<template>
  <div
    class="cardBody"
    @mouseover = "hover=true"
    @mouseleave = "hover=false"
    :style="{background:'url(' + this.activitat.imatge + ') no-repeat', backgroundSize:'300px 300px'}"
  >
    <a 
      :href="this.activitat.url"
    >
      <div class="cardTitle" :class="{ titleBackgroundHover:hover }">
        <h3 :class="[{titolHover:hover}, {titol:!hover}]">{{ activitat.title }}</h3>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
        <div :class="[{activitatInfoHover:hover}, {activitatInfo:!hover}]" v-if="activitat.dificultat!=0" v-show=!hover>Dificultat: {{ activitat.dificultat }}</div>
        <div v-if=hover class="cardInfo">{{ activitat.descripcio }}</div>
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

<style>

  .titleBackgroundHover{
    background:rgba(0,0,0,0.3);
  }

  .cardBody{
    width: 250px;
    height: 250px;
    position:relative;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 7px 7px 5px rgba(0,0,0,0.2);
    transition-delay: 1s;
    transition: all 0.3s ease;
    text-align: center;
    overflow:hidden;
  }

  .cardBody:hover{
    margin:0px 20px;
    transform: scale(1.2);
  }

  .cardBody a:hover{
    text-decoration:none !important;
  }

  .cardTitle{
    height:100%;
    width:100%;
    padding:15px;
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

    .titolHover {
    font-family: Quicksand;
    color:cyan;
    font-size:1.2rem;
    padding-bottom:10px;
    border-bottom: 3px solid yellow;
  }

  .activitatInfo{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1rem;
  }

  .activitatInfoHover{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1rem;
  }

  .cardInfo{
    color:cyan;
    font-size:0.85rem;
    margin-top:0.5rem;
  }

</style>

