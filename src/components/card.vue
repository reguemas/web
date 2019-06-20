<template>
  <div class="cardBody">
    <a href="#" class="cardImg">     
      <div class="cardTitle">
          <h3 class="titol">Pico Coronas. Pirineu Aragonès.</h3>
          <div class="tipusActivitat">SAM - Alpinisme</div>
          <div class="data">03/07/2019</div>
          <div class="cardInfo mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
          </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'card',

  data(){
    return {
      hover:false
    };
  }
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
  }

  .cardImg {
    background-image: url(../assets/bg-card.jpg);
    width: 100%;
    height: 100%;
    text-decoration:none !important;
    display:flex;
  }

  .cardImg :hover {
    /* background: rgba(84,104,110,0.8); */
    background: rgba(0,0,0,0.8);
    text-decoration:none !important;
    opacity:1;
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
    transition: background .3s cubic-brezier (.33,.66,.66,1);
  }

  .cardTitle :hover {
    background:transparent;
  }

  .titol {
    font-family: Quicksand;
    color:cyan;
    font-size:1.5rem;
  }

  .tipusActivitat{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.1rem;
    border-top: 3px solid yellow;
  }

  .data{
    font-family: Quicksand;
    color:#d0bb57;
    font-size:1.1rem;
  }

  .cardInfo{
    opacity:0;
    color:cyan;
    font-size:1.1rem;
  }

</style>
