<template>
  <div>
    <b-card
      overlay
      img-src="https://picsum.photos/400/400/?image=41"
      img-alt="Image"
    >
      <div class="descripcio">
        <h4 class="titol">Pico Coronas. Pirineu Aragonès.</h4>
        <b-card-text class="tipusActivitat">Alpinisme</b-card-text>
        <b-list-group horizontal>
          <b-list-group-item class="textDades">
            <b-card-text class="seccio">SAM</b-card-text>
          </b-list-group-item>
          <b-list-group-item class="textDades ml-auto">
            <b-card-text class="data">03/07/2019</b-card-text>
          </b-list-group-item>
        </b-list-group>
      </div>
    </b-card>
  </div>
</template>

<script>
export default {
  name: 'card',
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  .card{
    border:none !important;
  }

  .card img{
    background-color:azure;
    padding:10px 10px 75px 10px;
    border-radius:none;
    border:1px solid #BFBFBF;
    height: 22rem;
    width: 20rem;
  }

  .card :hover{
    background-color: rgba(0, 0, 0, 0.3);
    color: cyan !important;
    text-decoration:none;
    cursor: pointer;
  }

  .titol{
    font-family:"QuickSand";
    color:black;
    position:absolute;
    bottom:0px;
  }

  .descripcio{
    display:flex;
    flex-flow: column;
    margin-top:65%;
  }

  .descripcio :hover{
    background-color:transparent !important;
    color:cyan !important;
  }

/*   .data,.seccio{
    display:inline-flex;
    color:cyan;
  } */

  .textDades,.tipusActivitat{
    background: none !important;
    border:none !important;
    padding:0 !important;
    color:cyan;
  }

  .tipusActivitat :hover{
    background-color:transparent !important;
    color:cyan !important;
  }

  .tipusActivitat{
    margin:0;
  }

</style>
