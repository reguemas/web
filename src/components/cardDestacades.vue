<template>
  <div class="cardDestacadesBody" @mouseover = "hover=true" @mouseleave = "hover=false">
    <a class="cardDestacadesImg" ref="urlActivitat">     
      <div class="cardDestacadesTitle" ref="cardDestacadesBackgroundMobile">
          <div class="activitatDestacadesInfo">{{ activitat.seccio }} - {{ activitat.modalitat }}</div>
          <div class="activitatDestacadesInfo" v-if="activitat.dataInici==activitat.dataFinal">{{ activitat.dataInici }}</div>
          <div class="activitatDestacadesInfo" v-if="activitat.dataInici!=activitat.dataFinal">{{ activitat.dataInici }} al {{ activitat.dataFinal }}</div>
          <h3 class="titolDestacades">{{ activitat.title }}</h3>
<!--           <div v-if=hover class="cardDestacadesInfo mt-4">
            {{ activitat.descripcio }}
          </div> -->
      </div>
    </a>
  </div>

</template>

<script>

export default {
  name: 'cardDestacades',

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
      this.$refs.cardDestacadesBackgroundMobile.style.background="rgba(0,0,0,0.6)"
    }

    this.$refs.urlActivitat.setAttribute("href",this.activitat.url);
    this.$refs.urlActivitat.style.background = "url(" + this.activitat.imatge + ") no-repeat";
    this.$refs.urlActivitat.style.backgroundSize = "350px 250px";
  },

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

  .cardDestacadesBody{
    width: 350px;
    height: 400px;
    overflow:hidden;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    text-align:center;
    display: block; 
  }

  .cardDestacadesImg {
    width: 350px;
    height: 250px;
    text-decoration:none !important;
    display:block;
    border-bottom: 7px solid rgb(66, 57, 38);
  }

  .cardDestacadesImg :hover {
    background: rgba(0,0,0,0.8);
    text-decoration:none !important;
  }

  a :hover {
    text-decoration:none !important;
  }

  .cardDestacadesTitle{
    padding-top:265px;
    height:100%;
    width:100%;
    background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.6) 0%,
      rgba(0, 0, 0, 0.6) 45%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

  .cardDestacadesTitle :hover {
    background:transparent;
  }

  .titolDestacades {
    font-family: Quicksand;
    color:cyan;
    font-size:1.5rem;
  }

  .activitatDestacadesInfo{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.3rem;
    
  }

  .cardDestacadesInfo{
    color:cyan;
    font-size:1.1rem;
    height:100%;
    margin-bottom:-150px;
  }

</style>
