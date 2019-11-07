<template>
  <div class="menuBackground">
    <b-navbar id="contactMenu" variant="darkMenu" class="d-flex">
      <b-list-group horizontal class="mr-auto ml-4">
        <b-list-group-item><img src="../assets/social/icon-direccio.png" class="ml-3 mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
        <b-list-group-item><img src="../assets/social/icon-telefon.png" class="ml-3 mr-2">93 788 30 30</b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-email.png" class="ml-3 mr-2">centre@ce-terrassa.cat</b-list-group-item>
      </b-list-group>
      <b-list-group horizontal class="ml-auto mr-4">
        <b-list-group-item href="#"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
      </b-list-group>
    </b-navbar>

    <b-navbar id="socialMenu" variant="darkMenu" class="d-none">
      <b-navbar-brand href="#" fluid-grow class="ml-4 mr-auto">
        <b-img src="logosCET/CET_Esquerra-transparent-blanc-xs.png" alt="Logo Centre Excursionista Terrassa"></b-img>
      </b-navbar-brand>
      <b-list-group horizontal class="ml-auto mr-4">
        <b-list-group-item><img src="../assets/social/icon-direccio.png" class="ml-3 mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
        <b-list-group-item class="mr-2"><img src="../assets/social/icon-telefon.png" class="ml-3 mr-2">93 788 30 30</b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="#"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
      </b-list-group>
    </b-navbar>
    <b-row no-gutters>
    <b-col no-gutters cols="12" xl="2" class="p-0">
      <div class="espai"></div>
    </b-col>
    <b-col no-gutters cols="0" xl="10" class="p-0">
      <b-navbar id="menuNav" small toggleable="md" type="dark" class="p-0">

      <b-navbar-toggle type="dark" variant="dark" target="nav-collapse" class="my-3 ml-3"></b-navbar-toggle>

      <h2 class="my-auto textCyan displayMobile">CET</h2>

      <b-navbar-brand id="logoCET" href="#" fluid-grow class="mr-4">
        <b-img src="logosCET/CET_Esquerra-transparent-blanc-xs.png" alt="Logo Centre Excursionista Terrassa"></b-img>
      </b-navbar-brand>

      <b-collapse id="nav-collapse" is-nav class="my-4 justify-content-xl-center justify-content-lg-end justify-content-md-center">
        
        <b-navbar-nav class="ml-4"> 
          <b-nav-item-dropdown text="El CET" left>
            <b-dropdown-item href="#">Què hi Trobaràs</b-dropdown-item>
            <b-dropdown-item href="#">Fes-te Soci</b-dropdown-item>
            <b-dropdown-item href="#">La Seu Social</b-dropdown-item>
            <b-dropdown-item href="#">Llicències Federatives</b-dropdown-item>
            <b-dropdown-item href="#">Històric d'Activitats</b-dropdown-item>
            <b-dropdown-item href="#">Contacte</b-dropdown-item>
          </b-nav-item-dropdown>
          <b-nav-item-dropdown text="Activitats" left class="ml-5">
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
          <b-nav-item-dropdown text="Publicacions" left class="ml-5 textCyan">
            <b-dropdown-item href="#">El Full</b-dropdown-item>
            <b-dropdown-item href="#">Arxiu</b-dropdown-item>
            <b-dropdown-item href="#">Butlletí</b-dropdown-item>
            <b-dropdown-item href="#">CET.DOC</b-dropdown-item>
            <b-dropdown-item href="#">Topografia Avencs i Coves</b-dropdown-item>
          </b-nav-item-dropdown>
          <b-nav-item class="ml-5 mr-5">
            <router-link to="#">Galeries</router-link>
          </b-nav-item>
          <b-button size="lg" variant="success" class="mt-4 mx-auto displayMobile altaSociSocialMobile">
            <router-link to="#">Fer-se Soci</router-link>
          </b-button>

          <b-list-group horizontal class="mx-auto mt-4 displayMobile">
            <b-list-group-item href="#"><img src="../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
            <b-list-group-item href="#"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
            <b-list-group-item href="#"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
            <b-list-group-item href="#"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
            <b-list-group-item href="#"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
          </b-list-group>

          <b-list-group class="mt-3 displayMobile">
            <b-list-group-item class="mt-3"><img src="../assets/social/icon-direccio.png" class="mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
            <b-list-group-item class="mt-3"><img src="../assets/social/icon-telefon.png" class="mr-2">93 788 30 30</b-list-group-item>
          </b-list-group>
        </b-navbar-nav>
        <b-button id="altaSoci" size="lg" variant="success" class="d-none">
          <router-link to="#">Fer-se Soci</router-link>
        </b-button>
      </b-collapse>
      </b-navbar>
      </b-col>
      </b-row>   
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'menu',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/* background */

.menuBackground{
  background-color: #a1bd9f !important;
}

/* Menu Contacte i Xarxes Social */

.list-group-item{
  background: none !important;
  border: none !important;
  padding:0 0.25rem !important;
  color:rgb(161, 161, 161);
}

.list-group-item-action{
  width: auto !important;
}

.bg-darkMenu {
  background-color:#2e3e4e;
}

.bg-lightMenu{
  background-color:#655377 !important;
}

@media (max-width: 992px) {
  #contactMenu {
    display: none !important;
  }
}

@media (min-width: 768px) and (max-width: 992px) {
  #socialMenu {
    display: flex !important;
  }
}

@media (max-width: 767px) {
  #menuNav {
    background-color:#103440;
  }
}

/* Menu Navegació */

.nav-item{
  font-family:"QuickSand";
  font-size: 1.5rem;
  font-weight:bold !important;
}

.nav-item a{
  color:rgba(255,255,255,0.5) !important;
}

.nav-item a:hover, a:focus{
  color:rgba(255,255,255,0.7) !important;
  text-decoration: none;
}

.navbar-toggler {
  border-style: none;
}

@media (max-width: 1200px) {
  .nav-item {
    font-size: 1.2rem !important;
    margin:0 30px 0 0 !important;
  }
}

/* Logo CET */

@media (min-width: 768px) {
  #logoCET img{
    display: none !important;
  }
}

/* Botó Fer-se Soci */

.espai{
  width:100%;
}

/* Botó Fer-se Soci */

  #altaSoci {
  margin-right:85px;
}

#altaSoci a{
  color:cyan;
  font-family:"QuickSand" !important;
  font-weight:600;
  text-decoration: none;
}

#altaSoci a:hover{
  color:#103440;
  font-weight:900;
}

.altaSociSocialMobile a{
  color:cyan;
  font-family:"QuickSand" !important;
  font-weight:900;
  text-decoration: none;
}

@media (max-width: 1200px) {
  #altaSoci {
    margin-left: 0 !important;
    font-size: 0.9rem !important;
  }
}

@media (max-width: 864px) {
  #altaSoci {
    margin-right:0px;
  }
}

@media (min-width: 768px) {
  #altaSoci {
    display: flex !important;
  }
}

@media (min-width: 768px) {
  .displayMobile {
    display: none !important;
  }
}

</style>
