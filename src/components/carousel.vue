<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="3000"
      fade
      background="#ababab"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
      >
      <!-- Text slides with image -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="slide1_1.jpg"
          alt="image slot"
        >
        <h1>Descobriràs el Nostre Entorn</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="slide2_1.jpg"
          alt="image slot"
        >
        <h1>Compartiràs l'Alegria del Cim</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="slide3_1.jpg"
          alt="image slot"
        >
        <h1>Descobriràs Nous Móns</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="slide4_1.jpg"
          alt="image slot"
        >
        <h1>Faràs Nous Amics</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="slide5_1.jpg"
          alt="image slot"
        >
        <h1>Disfrutaràs de l'Alta Muntanya</h1>
      </b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
    </b-carousel>

  </div>
</template>

<script>
export default {
  name: 'slider',

  data() {
    return {
      slide: 0,
      sliding: null
    }
  },

/*   methods: {
    onSlideStart(slide) {
      this.sliding = true
    },
    onSlideEnd(slide) {
      this.sliding = false
    }
  } */
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  
  #carousel-1{
    z-index:-1;
  }

  .carousel h1{
    margin-bottom:-2% !important;
    font-size:1.5rem;
  }
  
  #carousel-1 img{
    height:100% !important;
    width:auto !important;
  }

</style>
