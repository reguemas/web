<template>
  <div>
    <b-row class="m-0 justify-content-center">
      <div class="d-inline-flex">
        <img
          slot="img"
          class="imatgePromocionada"
          :src="activitatPromocionada.imatge"
          alt="Vols fer de monitor al CET"
        >
        <div class="promocio mx-3">
          <div class="d-block">
            <h1 class="titolPromocio mb-3 mt-0 pb-0 pt-2">{{activitatPromocionada.titol}}</h1>
              <p class="mb-2 p-0">{{activitatPromocionada.frase1}}</p>
              <p class="ml-3 mb-1 p-0">{{activitatPromocionada.llista1}}</p>
              <p class="ml-3 mb-1 p-0">{{activitatPromocionada.llista2}}</p>
              <p class="ml-3 m-0 p-0">{{activitatPromocionada.llista3}}</p>
              <p class="mt-2 p-0">{{activitatPromocionada.frase2}}</p>
            <a :href="activitatPromocionada.url" class="promocionadaEnllaç">{{activitatPromocionada.enllaç}} -></a>
          </div>
        </div>
      </div>
    </b-row>
  </div>
</template>

<script>

  export default {
    name: 'activitatPromocionada',
    
    props:["activitatPromocionada"],
  }



</script>

<style>

  .promocio{
    font-family: "Quicksand";
    font-weight:700;
    color: #545454;
    display:flex;
    align-items:flex-end;
  }

  .titolPromocio{
    font-family: "Quicksand";
    font-size: 1.5rem;
    font-weight:bold;
    text-transform: uppercase;
    border-top: 3px solid #008cba;
  }

  .promocionadaEnllaç {
    text-transform: capitalize;
    font-weight:bold;
    color:black;
    border-left: 3px solid #008cba;
    padding: 5px 10px;
  }

  .promocionadaEnllaç:hover {
    text-transform: capitalize;
    font-weight:bold;
    color:cyan;
    transition: .4s ease;
    background-color:#008cba;
  }

</style>