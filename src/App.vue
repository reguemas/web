<template>
  <div>
    <navMenu/>

    <b-container fluid class="p-0">

      <webTop/>

      <activitats/>

      <activitatPromocionada/>

      <activitatsDestacades/>

      <activitatPromocionada/>

      <noticies/>

      <activitatPromocionada/>

      <serveis/>

      <colaboradorsWebAmigues/>

      <peuWeb/>

    </b-container>
  </div>
</template>

<script>
import navMenu from './components/menu.vue'
import webTop from './components/webTop.vue'
import card from './components/card.vue'
import activitats from './components/activitats.vue'
import activitatPromocionada from './components/activitatPromocionada.vue'
import activitatsDestacades from './components/activitatsDestacades.vue'
import noticies from './components/noticies.vue'
import serveis from './components/serveis.vue'
import colaboradorsWebAmigues from './components/colaboradorsWebAmigues.vue'
import peuWeb from './components/footer.vue'

export default {
  name: 'app',

  components: {
    navMenu,
    webTop,
    card,
    activitats,
    activitatPromocionada,
    activitatsDestacades,
    noticies,
    serveis,
    colaboradorsWebAmigues,
    peuWeb,
  }
}

</script>

<style>

  .jumbotron{
    background-color: transparent !important;
    position:absolute;
    top:-3%;
    left:-11%;
    padding-top:0;
    color: rgb(13,189,151);
  }

  .jumbotron h1{
    font-size: 6rem !important;
  }

  .transperencia{
    background-color: rgba(54,54,54,0.5);
    height:65%;
    width:320%;
    margin-top:32%;
    border-radius:0% 200px 200px 0%;
  }

  .verd{
    background-color: rgb(65, 145, 45);
    height:10%;
    width:150%;
    margin-top:20%;
    margin-left:45%;
  }

  .vermell{
    background-color: rgb(252, 73, 73);
    height:10%;
    width:275%;
    margin-top:15%;
    margin-left:45%;
  }

    .blau{
    background-color: rgb(12, 169, 241);
    height:10%;
    width:185%;
    margin-top:15%;
    margin-left:45%;
  }

  .bottom-row{
    position: absolute;
    bottom:0;
    line-height: 0;
    z-index:5;
  }

  .lead{
    font-size:1.5rem !important;
    font-weight:500 !important;
    color:cyan;
    letter-spacing: 2px;
  }

  .carousel-caption{
    margin-bottom:-2% !important;
  }
  
  .jumbotron a:hover{
    color:#103440;
    font-weight:700;
  }

  .textCyan{
    color:cyan;
  }

/*   #filters{
    background-color: #2bcbbaff;
    line-height: 12rem;
    font-size:1.5rem !important;
    font-weight:900 !important;
    margin-top:-2.5rem;
  } */

</style>
