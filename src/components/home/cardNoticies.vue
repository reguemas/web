<template>
  <div class="cardNoticiaBody" 
    @mouseover = "hover=true"
    @mouseleave = "hover=false"
  >
    <a 
      class="cardNoticiaImg cardNoticiaImgTamany"
      :style="{background:'url(' + noticia.imatge + ') no-repeat', backgroundSize:'auto 350px'}"
      :href="noticia.url"
    >    
      <div 
        class="cardNoticiaTitle"
      >
        <h3 :class="[{noticiaTitolHover:hover}, {noticiaTitol:!hover}]">{{ noticia.titular }}</h3>
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

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .cardNoticiaBody{
    overflow:hidden;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
    text-align:center;
    display: block; 
    width: 320px;
    height: 350px;
    transition-delay: 1s;
    transition: all 0.3s ease;
  }

  .cardNoticiaBody:hover{
    margin:0px 20px;
    transform: scale(1.05);
  }

  .noticiaTitol{
    font-family: Quicksand;
    color:#545454;
    font-size:1.3rem;
    background-color: aqua;
    padding:10px;
    margin:15px;
    font-weight:bold;
  }

  .noticiaTitolHover{
    font-family: Quicksand;
    font-size:1.3rem;
    padding:10px;
    margin:15px;
    font-weight:bold;
    color:black;
    background-color: rgb(217, 217, 255);
  }

  .noticiaTitol:active{
    color:black;
    background-color: rgb(217, 217, 255);
  }

  .cardNoticiaImg {
    text-decoration:none !important;
    display:block;
  }

  .cardNoticiaImgTamany {
    width: auto;
    height: 350px;
  }

  .cardNoticiaTitle{
    padding-top:250px !important;
  }

</style>
