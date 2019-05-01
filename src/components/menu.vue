<template>
  <div>
      <b-navbar variant="darkMenu" small>
        <b-list-group horizontal class="mr-auto ml-5">
          <b-list-group-item><img src="../assets/social/icon-direccio.png" class="ml-3 mr-2">C/Sant Pere, 10 - Terrassa</b-list-group-item>
          <b-list-group-item><img src="../assets/social/icon-telefon.png" class="ml-3 mr-2">93 788 30 30</b-list-group-item>
          <b-list-group-item href="#"><img src="../assets/social/icon-email.png" class="ml-3 mr-2">centre@ce-terrassa.cat</b-list-group-item>
        </b-list-group>

        <b-list-group horizontal class="ml-auto mr-5">
          <b-list-group-item href="#"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="#"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="#"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="#"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
        </b-list-group>
      </b-navbar>

      <b-navbar variant="lightMenu" toggleable="lg" class="p-3 d-flex">
        <b-navbar-brand href="#" class="ml-5">
          <b-img src="CET_Esquerra-transparent-blanc.png" fluid-grow alt="Logo Centre Excursionista Terrassa"></b-img>
        </b-navbar-brand>
        
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav class="d-flex mr-auto"> 
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

          </b-navbar-nav>     
            
            <b-button variant="success" size="lg" class="d-flex mr-5">
              <router-link to="/button-counter">Fes-te Soci</router-link>
            </b-button>  

        </b-collapse>
      
      </b-navbar>
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

.list-group-item{
  background: none !important;
  border: none !important;
  padding:0 0.25rem !important;
  color:dimgrey;
}

.list-group-item-action{
  width: auto !important;
}

.bg-darkMenu {
  background-color:#103440;
}

.bg-lightMenu{
  background-color: #655377 !important;
}

.nav-item{
  font-family:"QuickSand-Bold";
  font-size: 1.75rem;

}


</style>
