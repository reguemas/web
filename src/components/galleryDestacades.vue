<template>
  <div>
    <h3 class="ml-3 my-4">Activitats {{titolGaleria}}</h3>
    <b-row class="m-0">
      <b-list-group horizontal class="mx-5">
        <b-list-group-item class="p-0 ml-3" :key="index" v-for="(activitat,index) in activitatsCarousel"><cardDestacades :activitat="activitat"/></b-list-group-item>
      </b-list-group>
    </b-row>
  </div>
</template>

<script>

import cardDestacades from './cardDestacades.vue'

export default {

  name: 'galleryDestacades',

  props:["activitatsCarousel","titolGaleria"],

  components: {
    cardDestacades,
  },

/*   data() {
    return {

    }; */

  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .esMou{
    transition: transform 1s ease-in-out;
  }

  .list-group-item{
    border:none !important;
  }

  .botoAnterior{
    position: absolute;
    left:0;
    margin-top:-300px;
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 300px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    background: linear-gradient(
      to right,
      rgba(0, 0, 0, 0.8) 0%,
      rgba(0, 0, 0, 0.6) 50%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

  .botoSeguent{
    position: absolute;
    right:0;
    margin-top:-300px;
    border:none !important;
    color:white;
    font-size: 50px;
    line-height: 300px;
    text-align:center;
    width:75px;
    padding: 0 !important;
    background: linear-gradient(
      to left,
      rgba(0, 0, 0, 0.8) 0%,
      rgba(0, 0, 0, 0.6) 50%,
      rgba(0, 0, 0, 0.0) 100%
    );
  }

</style>
