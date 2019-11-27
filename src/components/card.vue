<template>
  <div class="cardBody" @mouseover = "hover=true" @mouseleave = "hover=false">
    <a class="cardImg" ref="urlActivitat" :href="this.activitat.url">     
      <div class="cardTitle" ref="cardBackgroundMobile">
          <h3 class="titol">{{ activitat.title }}</h3>
          <div class="activitatInfo">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
          <div class="activitatInfo" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
          <div class="activitatInfo" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
          <div class="activitatInfo" v-if="activitat.dificultat!=0">Dificultat: {{ activitat.dificultat }}</div>
          <div v-if=hover class="cardInfo mt-3">
            {{ activitat.descripcio }}
          </div>
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
      this.$refs.cardBackgroundMobile.style.background="rgba(0,0,0,0.6)"
    }

    this.$refs.urlActivitat.style.background = "url(" + this.activitat.imatge + ") no-repeat";
    this.$refs.urlActivitat.style.backgroundSize = "400px 400px";
  },

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

  .cardBody{
    width: 300px;
    height: 300px;
    overflow:hidden;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    text-align:center;
    display: block; 
  }

  .cardImg {
    width: 300px;
    height: 300px;
    text-decoration:none !important;
    display:block;
  }

  .cardImg :hover {
    background: rgba(0,0,0,0.8);
    text-decoration:none !important;
  }

  a :hover {
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
    height:100%;
  }

</style>
