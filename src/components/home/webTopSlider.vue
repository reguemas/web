<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="3000"
      fade
      background="#919690"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
      >
      <!-- Text slides with image -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="galeriaImatgesTopWeb/slide1_2.jpg"
          alt="image slot"
        >
        <h1>Descobriràs el Nostre Entorn</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="galeriaImatgesTopWeb/slide2_2.jpg"
          alt="image slot"
        >
        <h1>Compartiràs l'Alegria del Cim</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="galeriaImatgesTopWeb/slide3_2.jpg"
          alt="image slot"
        >
        <h1>Descobriràs Nous Móns</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="galeriaImatgesTopWeb/slide4_2.jpg"
          alt="image slot"
        >
        <h1>Faràs Nous Amics</h1>
      </b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block w-100"
          src="galeriaImatgesTopWeb/slide5_2.jpg"
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
    font-family:"Escriptura";
    letter-spacing: 2px;
    margin-bottom:-30px !important;
    white-space:nowrap;
    font-size:2.5rem;
    color:#d0bb57;
  }
  
  #carousel-1 img{
    height:400px !important;
    width:100 !important;
  }

  @media (min-width: 768px) {
    #carousel-1 img {
      height:500px !important;
      width:auto !important;
    }
  }

  @media (max-width: 768px) {
    .carousel h1{
      white-space:normal;
      font-size:2.2rem;
    }
  }


</style>
