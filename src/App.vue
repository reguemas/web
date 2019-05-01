<template>
  <div>
    <navMenu/>
  
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="5000"
      fade
      controls
      indicators
      background="#ababab"
      img-width="1024"
      img-height="340"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="slide 1 340.jpg"
          alt="image slot"
        >
        <h1>Descobriràs el Nostre Entorn</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="slide 2 340.jpg"
          alt="image slot"
        >
        <h1>Compartiràs l'Alegria del Cim</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="slide 3 340.jpg"
          alt="image slot"
        >
        <h1>Descobriràs Nous Móns</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="slide 4 340.jpg"
          alt="image slot"
        >
        <h1>Faràs Nous Amics</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="slide 5 340.jpg"
          alt="image slot"
        >
        <h1>Disfrutaràs de la Muntanya</h1>
      </b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
    </b-carousel>

    <b-jumbotron header="Centre Excursionista Terrassa" lead="Gaudiràs Grans Moments Amb Nosaltres">
      <b-button variant="primary" size="lg" href="#">Fes-te Soci!</b-button>
    </b-jumbotron>

    <HelloWorld/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import navMenu from './components/menu.vue'

export default {
  name: 'app',
  data() {
    return {
      slide: 0,
      sliding: null
    }
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true
    },
    onSlideEnd(slide) {
      this.sliding = false
    }
  },
  components: {
    HelloWorld,
    navMenu,
  }

}

</script>

<style>
  #carousel-1{
    margin-top:-130px;
    z-index:-100;
  }

</style>
