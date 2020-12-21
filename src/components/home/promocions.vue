<template>
  <div class="mascaraImatge">
      <b-row ref="esMou" no-gutters align-v="center" class="m-0 justify-content-center h-100 imatge">
        <div>
          <h2 class="w-100 mt-3">Per l'any 2021 el CET té moltes novetats esperant</h2>
          <b-button variant="success" class="titolButo d-block mx-auto mt-4 mb-3">Descobreix-les</b-button>
        </div>
      </b-row>
  </div>
</template>

<script>

export default {
  name: 'promocions',

  components: {
    //cardNoticies
  },

  data() {
    return {
      posicio:0
    }
  },

  mounted() {
    window.addEventListener("scroll", this.mouImatge);
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.mouImatge);
  },

  methods: {
    mouImatge: function(){
      this.element = this.$refs.esMou;
      this.posicio = this.$refs.esMou.getBoundingClientRect().y;
      this.element.style.backgroundPosition = "center " + this.posicio * 0.8 + "px";
    }
  }
};

</script>
<style scoped>
  .mascaraImatge{
    height:350px;
    width:100%;
  }

  .imatge{
    content: "";
    width:100%;
    height: 100%;
    background-image:url('~@/assets/imatges/promocions/promocions_1.jpg');
    background-size: 100% auto;
    background-attachment: fixed;
    background-repeat:no-repeat;
  }

  .titolButo{
    font-family: Quicksand;
    font-size: 1.4rem;
    font-weight:bold;
    letter-spacing: 2px;
  }

</style>
