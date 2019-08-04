<template>
    <div>
            <h3 class="ml-5 my-4">Activitats Culturals</h3>
            <b-list-group horizontal class="ml-5">
              <card/>
              <card class="ml-3"/>
              <card class="ml-3"/>
              <card class="ml-3"/>
              <card class="ml-3"/>
              <card class="ml-3"/>
            </b-list-group>
  </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'activitats',

  components: {
    card,
    gallery,
  },

  data() {
    return {
      myToggle: false,
    }
  }
}

</script>

<style>

  #filtreActivitat,#filtreMes {
    font-family: Quicksand;
    font-size:1.2rem;
    font-weight:900;
    width:200px;
    height:50px;
  }

  option {
    font-family: Quicksand;
    font-size:1rem;
  }

  #cardsBackground{
    background-color:rgb(13,189,151);
  }

  .calendar{
    background-color: #94b6aa;
    text-align: center;
  }

  #buttonFilters{
    margin-top:-5rem;
    z-index:5000 !important;
  }
  
  .activitats{
    background-color:#b1c1d0;
    overflow:hidden;
  }

</style>
