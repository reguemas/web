<template>
  <div class="cardDestacadesBody" @mouseover = "hover=true" @mouseleave = "hover=false">
    <a class="cardDestacadesImg" :href="this.noticia.url">     
      <div class="cardDestacadesTitle" ref="cardDestacadesBackgroundMobile">
          <h3 class="titolDestacades">{{ noticia.Titular }}</h3>
          <div class="cardDestacadesInfo">
            {{ activitat.noticia }}
          </div>
      </div>
    </a>
  </div>

</template>

<script>

export default {
  name: 'cardNoticies',

  props:["noticia"],

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
  },

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .cardDestacadesBody{
    width: 400px;
    height: 400px;
    overflow:hidden;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    text-align:center;
    display: block; 
  }

  .cardDestacadesImg {
    width: 400px;
    height: 400px;
    text-decoration:none !important;
    display:block;
  }

  .cardDestacadesImg :hover {
    background: rgba(0,0,0,0.8);
    text-decoration:none !important;
  }

  a :hover {
    text-decoration:none !important;
  }

  .cardDestacadesTitle{
    padding:20px;
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
    padding-bottom:25px;
    border-bottom: 3px solid yellow;
  }

  .activitatDestacadesInfo{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.3rem;
  }

  .cardDestacadesInfo{
    position:absolute;
    color:cyan;
    font-size:1.1rem;
    height:100%;
    top:225px;
  }

</style>
