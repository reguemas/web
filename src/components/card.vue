<template>
  <div class="cardBody" @mouseover = "hover=true" @mouseleave = "hover=false">
    <a href="#" class="cardImg">     
      <div class="cardTitle" ref="cardBackgroundMobile">
          <h3 class="titol">Pico Coronas. Pirineu Aragonès.</h3>
          <div class="activitatInfo">SAM - Alpinisme</div>
          <div class="activitatInfo">03/07/2019</div>
          <div class="activitatInfo">Dificultat: Alta</div>
          <div v-if=hover class="cardInfo mt-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'card',

  data() {
    return {
      hover:false
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
    background-image: url(../assets/bg-card.jpg);
    width: 100%;
    height: 100%;
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

/*   .color-overlay{
    width: 100%;
    height: 100%;
    background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.0) 0%,
      rgba(0, 0, 0, 0.45) 25%,
      rgba(0, 0, 0, 0.45) 75%,
      rgba(0, 0, 0, 0.0) 100%
    );
    transition: background .3s cubic-brezier (.33,.66,.66,1);
  } */

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
    font-size:1.5rem;
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
    font-size:1.1rem;
    height:100%;
  }

</style>
