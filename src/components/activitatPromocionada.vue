<template>
    <div>
      <b-row class="m-0 justify-content-center align-items-center">
        <img
          slot="img"
          class="d-block w-100 promocio"
          src="activitatPromocionada_1.jpg"
          alt="Vols fer de monitor al CET"
        >
        <h1 class="titolPromocio">Vols fer de monitor al CET?</h1>
      </b-row>
  </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'activitatPromocionada',
}

</script>

<style>

  .promocio{
    background-color: rgb(252, 73, 73);
    height:200px;
  }

  .titolPromocio{
    font-family: "Escriptura";
    color: #d0bb57;
    font-size: 50px;
    margin-top: -150px;
  }

</style>