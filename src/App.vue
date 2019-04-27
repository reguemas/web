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
          <img src="./assets/CET_Esquerra-transparent-blanc.png" alt="Logo Centre Excursionista Terrassa">
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

    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="5000"
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
      <b-carousel-slide
        caption="Descobriràs el Nostre Entorn"
        text="La Castellassa de Can Torres en una Sortida pel Parc Natural de Sant Llorenç"
        img-src="./assets/carousel/slide 1 340.jpg"
      ></b-carousel-slide>

      <!-- Slides with custom text -->
      <b-carousel-slide img-src="./public/slide_2_340.jpg">
        <h1>Hello world!</h1>
      </b-carousel-slide>

      <!-- Slides with image only -->
      <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"></b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide>
        <img
          slot="img"
          class="d-block img-fluid w-100"
          src="https://picsum.photos/1024/480/?image=55"
          alt="image slot"
        >
      </b-carousel-slide>

      <!-- Slide with blank fluid image to maintain slide aspect ratio -->
      <b-carousel-slide caption="Blank Image" img-blank img-alt="Blank image">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eros felis, tincidunt
          a tincidunt eget, convallis vel est. Ut pellentesque ut lacus vel interdum.
        </p>
      </b-carousel-slide>
    </b-carousel>
  </div>
</template>

<script>
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
