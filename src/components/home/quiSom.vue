<template>
  <b-row class="mx-0 quiSom pb-5">
    <h3 class="mx-auto mt-md-4 mb-md-5 mb-4 w-50 text-center">El Centre Excursionista de Terrassa és:</h3>
    <b-row cols="1" cols-lg="2" no-gutters class="pb-4 pt-2">
      <b-col class="px-3 px-md-5 px-lg-3 pb-4 pb-lg-0 pl-xl-5">
        <div class="quiSomItemBorder">
          <b-avatar text="CET" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">Entitat Esportiva, Social i Cultural vinculada a la Muntanya i el Muntanyisme.</div>
        </div>
      </b-col>
      <b-col class="px-3 px-md-5 px-lg-3 pr-xl-5">
        <div class="quiSomItemBorder">
          <b-avatar text="MON" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">T'iniciaràs en la muntanya, perfeccionaràs la teva tècnica mentre fas esport i et diverteixes amb amics per a tota la vida.</div>
        </div>
      </b-col>
    </b-row>
    <b-row cols="1" cols-lg="2" no-gutters class="pb-0 pb-lg-4">
      <b-col class="px-3 px-md-5 px-lg-3 pl-xl-5">
        <div class="quiSomItemBorder">
          <b-avatar text="VAL" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">Els nostres valors: l'Esforç i Superació, el Companyerisme, Estimar la Natura i la Integració Social.</div>
        </div>
      </b-col>
      <b-col v-if="mesInfo" class="px-3 px-md-5 px-lg-3 pr-xl-5 pt-4">
        <div class="quiSomItemBorder">
          <b-avatar text="ACT" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">S'hi organitzen activitats durant tot l'any de totes les modalitats del muntanyisme per a tots els nivells i tota la familia.</div>
        </div>
      </b-col>
    </b-row>
    <b-row cols="1" cols-lg="2" no-gutters v-if="mesInfo">
      <b-col class="px-3 px-md-5 px-lg-3 pl-xl-5 pt-4">
        <div class="quiSomItemBorder">
          <b-avatar text="SEU" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">Disposa d'una seu social on reunir-se amb servei de bar, sala d'exposicions i on el soci tindrà la seva veu.</div>
        </div>
      </b-col>
      <b-col class="px-3 px-md-5 px-lg-3 pr-xl-5 pt-4">
        <div class="quiSomItemBorder">
          <b-avatar text="VEU" class="avatarEstils"></b-avatar>
          <div class="quiSomItem mx-2 mx-md-3 mx-xl-4">La Veu del Soci és transcendental, per això posem a la seva disposició els canals de comunicació físics i virtuals per poder expressar-la.</div>
        </div>
      </b-col>
    </b-row>
    <button v-if="mesInfo === false" @click="mesInfoControl" class="mesInfo mt-3">Més Info -&rsaquo;</button>
    <button v-if="mesInfo" @click="mesInfoControl" class="mesInfo mt-3">Menys Info -&rsaquo;</button>
  </b-row>
</template>

<script>

export default {
  name: 'quiSom',

  data() {
    return {
      mesInfo: true,
    };
  },

  mounted() {
    if (window.outerWidth <= 992) {
      this.mesInfo = false;
    }
  },

  methods: {
    mesInfoControl: function() {
/*       let mesInfoMarges=""; */
      if (this.mesInfo === false) {
        this.mesInfo = true;
      } else {
        this.mesInfo = false;
      }
    },
  },
};

</script>

<style scoped>

  h3 {
    color:#b2dbd4;
  }

  .quiSom{
    background: #1b4c5c;
    padding-top:2.5rem;
    padding-bottom:1rem;
    position: relative;
  }

  .quiSom::before {
    width: 100%;
    height:150px;
    content: "";
    background-image:url('~@/assets/perfilMolaMontserrat.png');
    background-size:cover;
    position: absolute;
    top:-150px;
  }

  .quiSomItemBorder{
    display:flex;
    align-items: center;
    align-content:center;
    border: 3px solid #b2dbd4;
    border-radius: 40px;
  }

  .quiSomItem{
    font-family: Quicksand;
    font-size: 1.2rem;
    font-weight:bold;
    color:#b2dbd4;
  }

  .avatarEstils{
    font-family: Quicksand;
    font-size: 1.3rem;
    font-weight:bold;
    color:  #b2dbd4;
    height:60px;
    width:60px;
    margin:8px;
    background-color: rgb(155, 62, 62);
    border: 2px solid #dbb2b2;
  }

  @media (max-width: 576px) {
    .quiSom{
      padding-top:0rem;
      padding-bottom:0rem;
    }
    .quiSomItem{
      font-size: 1rem;
      font-weight:700;
      margin: 5px 0px;
    }

    .quiSomItemBorder{
      border: 2px solid #b2dbd4;
    }
  }

  .mesInfo{
    font-family: Quicksand;
    background:transparent;
    border:none;
    font-size: 1.3rem;
    font-weight:bold;
    color: #ffcc01;
    margin:0 auto;
  }

</style>
