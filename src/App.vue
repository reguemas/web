<template>
  <div >
      <b-navbar variant="dark" type="dark" class="pt-0 pb-0">
        <b-navbar-nav small class="d-flex ml-auto mr-5">
          <b-nav-item>FACEBOOK</b-nav-item>
          <b-nav-item>INSTAGARAM</b-nav-item>
          <b-nav-item>WIKILOC</b-nav-item>
          <b-nav-item>CONTACTE</b-nav-item>
        </b-navbar-nav>
      </b-navbar>
      <b-navbar sticky toggleable="lg" type="dark" variant="danger" class="p-3 d-flex">
        <b-navbar-brand href="#">
          <b-img src="CET_Esquerra-transparent-blanc.png" fluid-grow alt="Logo Centre Excursionista Terrassa"></b-img>
        </b-navbar-brand>
        
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav class="d-flex ml-auto"> 
            <b-nav-item-dropdown text="El CET" right>
              <b-dropdown-item href="#">Què hi Trobaràs</b-dropdown-item>
              <b-dropdown-item href="#">Fes-te Soci</b-dropdown-item>
              <b-dropdown-item href="#">La Seu Social</b-dropdown-item>
              <b-dropdown-item href="#">Llicències Federatives</b-dropdown-item>
              <b-dropdown-item href="#">Històric d'Activitats</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown text="Activitats" right>
              <b-dropdown-header class="dropdown-header-label">
                Activitats Esportives
              </b-dropdown-header>
                <b-dropdown-item href="#">Alta Muntanya</b-dropdown-item>
                <b-dropdown-item href="#">Espeleologia</b-dropdown-item>
                <b-dropdown-item href="#">Esquí</b-dropdown-item>
                <b-dropdown-item href="#">Senderisme</b-dropdown-item>
                <b-dropdown-item href="#">Marxa Nòrdica</b-dropdown-item>
                <b-dropdown-item href="#">BTT</b-dropdown-item>
                <b-dropdown-item href="#">Entrenament i Formació</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>  
              <b-dropdown-header class="dropdown-header-label">
                Activitats Culturals
              </b-dropdown-header>
                <b-dropdown-item href="#">Ciències Naturals</b-dropdown-item>
                <b-dropdown-item href="#">Fotogràfia</b-dropdown-item>
                <b-dropdown-item href="#">Exposicions</b-dropdown-item>
                <b-dropdown-item href="#">Cultura</b-dropdown-item>
                <b-dropdown-item href="#">Biblioteca i Arxiu</b-dropdown-item>
                <b-dropdown-item href="#">Coral</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header id="dropdown-header-label">
                Activitats Socials
              </b-dropdown-header>
                <b-dropdown-item href="#">Campament Alta Muntanya</b-dropdown-item>
                <b-dropdown-item href="#">Caminada Popular</b-dropdown-item>
                <b-dropdown-item href="#">CET de Viatges</b-dropdown-item>
                <b-dropdown-item href="#">Altres Activitats</b-dropdown-item>
              </b-nav-item-dropdown>
            <b-nav-item-dropdown type="dark" text="Publicacions" right>
              <b-dropdown-item href="#">El Full</b-dropdown-item>
              <b-dropdown-item href="#">Arxiu</b-dropdown-item>
              <b-dropdown-item href="#">Butlletí</b-dropdown-item>
              <b-dropdown-item href="#">CET.DOC</b-dropdown-item>
              <b-dropdown-item href="#">Topografia Avencs i Coves</b-dropdown-item>
            </b-nav-item-dropdown>

            <b-nav-item>
              <router-link to="/button-counter">Galeries</router-link>
            </b-nav-item>

            <b-button variant="info" class="ml-5 mr-5">
              <router-link to="/button-counter">Fes-te Soci</router-link>
            </b-button>

          </b-navbar-nav>           
        </b-collapse>
      
      </b-navbar>
    <router-view/>

    <b-jumbotron header="Centre Excursionista Terrrassa" lead="Gaudiràs Grans Moments Amb Nosaltres">
      <b-button variant="primary" size="lg" href="#">Fes-te Soci!</b-button>
    </b-jumbotron>

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
    
  </div>
</template>

<script>
import HelloWorld from '../components/HelloWorld.vue'

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
  }
  components: {
    HelloWorld,
  },

}


</script>

<style>
#menu {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  height:30%;
  width:100%;
}
</style>
