<template>
  <div>
    <b-row class="m-0" @mouseover="visualitzacioBotons" @mouseleave="controlsVisibilitat=false">
      <b-list-group horizontal ref="esMou" class="esMou pr-3">
        <b-list-group-item
          class="p-0 carruselActivitats"
          :key="index"
          v-for="(activitat,index) in activitatsCarousel"
        >
          <card :activitat="activitat" />
        </b-list-group-item>
      </b-list-group>
      <div v-if="controlsVisibilitat">
        <button
          class="botoAnterior"
          v-if="botoAnteriorVisibilitat"
          @click="movimentCarousel"
          ref="anterior"
        >&lsaquo;</button>
        <button
          class="botoSeguent"
          v-if="botoSeguentVisibilitat"
          @click="movimentCarousel"
          ref="seguent"
        >&rsaquo;</button>
      </div>
    </b-row>
  </div>
</template>

<script>
import card from "./card.vue";

export default {
  name: "gallery",

  props: ["activitatsCarousel", "ampladaPantallaActivitat"],

  components: {
    card
  },

  data() {
    return {
      count: 0,
      botoAnteriorVisibilitat: false,
      botoSeguentVisibilitat: true,
      controlsVisibilitat: false,
      ampladaPantallaGaleria: this.ampladaPantallaActivitat
    };
  },

  mounted() {
    if (
      navigator.userAgent.match(/Android/i) ||
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) ||
      navigator.userAgent.match(/iPad/i) ||
      navigator.userAgent.match(/iPod/i) ||
      navigator.userAgent.match(/BlackBerry/i) ||
      navigator.userAgent.match(/Windows Phone/i)
    ) {
      this.controlsVisibilitat = false;
    }
  },

  methods: {
    visualitzacioBotons: function() {
      if (this.numClickFinalGaleria == 0) {
        this.controlsVisibilitat = false;
      } else {
        this.controlsVisibilitat = true;
      }
    },

    movimentCarousel: function() {
      if (this.numCardsVisibles == 0) {
        this.numCardsVisibles++;
      }
      let distanciaMoure = this.numCardsVisibles * 316;
      if (distanciaMoure == 0) {
        distanciaMoure = 316;
      }
      if (event.target.className === "botoAnterior") {
        this.count++;
        this.element.style.transform =
          "translateX(" + this.count * distanciaMoure + "px)";
        this.botoSeguentVisibilitat = true;
        if (this.count == 0) {
          this.botoAnteriorVisibilitat = false;
        }
      }
      if (event.target.className === "botoSeguent") {
        this.count--;
        this.element.style.transform =
          "translateX(" + this.count * distanciaMoure + "px)";
        this.botoAnteriorVisibilitat = true;
        if (this.count == -this.numClickFinalGaleria) {
          this.botoSeguentVisibilitat = false;
        }
      }
    }
  },
  watch: {
    ampladaPantallaActivitat: function(newAmplada, oldAmplada) {
      if (newAmplada != oldAmplada) {
        this.element = this.$refs.esMou;
        this.longitudGaleria = this.element.childNodes.length;
        this.numCardsVisibles = Math.floor(newAmplada / 316);
        this.numClickFinalGaleria = Math.floor(
          this.longitudGaleria / this.numCardsVisibles
        );
        if (this.numCardsVisibles == 1) {
          this.numClickFinalGaleria--;
        }
        if (this.longitudGaleria * 316 < newAmplada) {
          this.numClickFinalGaleria = 0;
          this.controlsVisibilitat = false;
        }
      }
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.esMou {
  transition: transform 1s ease-in-out;
}

.list-group-item {
  border: none !important;
  margin-left: 1rem;
}

.list-group-item:first-child {
  margin-left: 0 !important;
}

.botoAnterior {
  position: absolute;
  left: 0;
  margin-top: 0px;
  border: none !important;
  color: white;
  font-size: 50px;
  line-height: 300px;
  text-align: center;
  width: 75px;
  padding: 0 !important;
  background: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.8) 0%,
    rgba(0, 0, 0, 0.6) 50%,
    rgba(0, 0, 0, 0) 100%
  );
}

.botoSeguent {
  position: absolute;
  right: 0;
  margin-top: 0px;
  border: none !important;
  color: white;
  font-size: 50px;
  line-height: 300px;
  text-align: center;
  width: 75px;
  padding: 0 !important;
  background: linear-gradient(
    to left,
    rgba(0, 0, 0, 0.8) 0%,
    rgba(0, 0, 0, 0.6) 50%,
    rgba(0, 0, 0, 0) 100%
  );
}
</style>
