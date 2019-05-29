<template>
  <div>
    <b-card
      overlay
      img-src="https://picsum.photos/400/400/?image=41"
      img-alt="Image"
    >
      <div class="descripcio">
        <h3 class="titol mb-4">Pico Coronas. Pirineu Aragonès.</h3>
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
    border-radius:none;
    border:1px solid #BFBFBF;
    height: 25rem;
    width: 25rem;
  }

  .card :hover{
    background-color: rgba(0, 0, 0, 0.5);
    color: cyan !important;
    text-decoration:none;
    cursor: pointer;
  }

  .titol{
    color:cyan;
    font-size:2rem;
    text-align: center;
  }
 
  .descripcio{
    display:flex;
    flex-flow: column;
    justify-content:center;
    padding: 30px 30px;
    margin-top:55px;
    background-color: rgba(0, 0, 0, 0.4) !important;
  }

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
