<template>
    <b-row class="mx-0 quiSom">

      <h3 class="mx-auto mt-4 mb-5 w-50 text-center">El Centre Excursionista de Terrassa és:</h3>
      <b-row cols="1" cols-lg="2" no-gutters class="pb-4 pt-2">
        <b-col class="pr-3 pl-5">
          <div class="quiSomItemBorder">
            <b-avatar text="CET" class="avatarEstils"></b-avatar>
            <div class="quiSomItem mx-4">Entitat Esportiva, Social i Cultural vinculada a la Muntanya i el Muntanyisme.</div>
          </div>
        </b-col>
        <b-col class="pr-5 pl-3">
          <div class="quiSomItemBorder">
            <b-avatar text="MON" class="avatarEstils"></b-avatar>
            <div class="quiSomItem  mx-4">T'iniciaràs en la muntanya, perfeccionaràs la teva tècnica mentre fas esport i et diverteixes amb amics per a tota la vida.</div>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters class="pb-4">
        <b-col class="pr-3 pl-5">
          <div class="quiSomItemBorder">
            <b-avatar text="VAL" class="avatarEstils"></b-avatar>
            <div class="quiSomItem mx-4">Els nostres valors: l'Esforç i Superació, el Companyerisme, Estimar la Natura i la Integració Social.</div>
          </div>
        </b-col>
        <b-col class="pr-5 pl-3">
          <div class="quiSomItemBorder">
            <b-avatar text="ACT" class="avatarEstils"></b-avatar>
            <div class="quiSomItem mx-4">S'hi organitzen activitats durant tot l'any de totes les modalitats del muntanyisme per a tots els nivells i tota la familia.</div>
          </div>
        </b-col>
      </b-row>
      <b-row cols="1" cols-lg="2" no-gutters class="pb-5">
        <b-col class="pr-3 pl-5">
          <div class="quiSomItemBorder">
            <b-avatar text="SEU" class="avatarEstils"></b-avatar>
            <div class="quiSomItem mx-4">Disposa d'una seu social on reunir-se amb servei de bar, sala d'exposicions i on el soci tindrà la seva veu.</div>
          </div>
        </b-col>
        <b-col class="pr-5 pl-3">
          <div class="quiSomItemBorder">
            <b-avatar text="VEU" class="avatarEstils"></b-avatar>
            <div class="quiSomItem mx-4">La Veu del Soci és transcendental, per això posem a la seva disposició els canals de comunicació físics i virtuals per poder expressar-la.</div>
          </div>
        </b-col>
      </b-row>
    </b-row>
</template>

<script>

  //import gallery from "@/components/home/gallery.vue";
  //import galleryMobile from "@/galleryMobile.vue";
  //import totesActivitatsPeriodiques from '@/static/carousels/activitatsPeriodiques.json'

export default {
  name: 'quiSom',

  components: {
    //gallery,
    //galleryMobile,
  },

  data() {
    return {

    }
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
    height:80px;
    border: 3px solid #b2dbd4;
    border-radius: 40px;
  }

  .quiSomItem{
    font-family: Quicksand;
    font-size: 1.2rem;
    font-weight:bold;
    color:#b2dbd4;
  }

  .queFem{
    max-width:1400px;
  }

  .avatarEstils{
    font-family: Quicksand;
    font-size: 1.3rem;
    font-weight:bold;
    color:  #b2dbd4;
    height:60px;
    width:60px;
    margin-left:8px;
    background-color: rgb(155, 62, 62);
    border: 2px solid #dbb2b2;
  }

</style>
