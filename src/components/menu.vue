<template>
  <div class="menuBackground">
    <b-navbar id="contactMenu" variant="darkMenu" class="d-flex">
      <b-list-group horizontal class="mr-auto ml-4">
        <b-list-group-item><img src="../assets/social/icon-direccio.png" class="ml-3 mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
        <b-list-group-item><img src="../assets/social/icon-telefon.png" class="ml-3 mr-2">93 788 30 30</b-list-group-item>
        <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../assets/social/icon-email.png" class="ml-3 mr-2">centre@ce-terrassa.cat</b-list-group-item>
      </b-list-group>
      <b-list-group horizontal class="ml-auto mr-4">
        <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://twitter.com/ceterrassa" target="_blank"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
      </b-list-group>
    </b-navbar>

    <b-navbar id="socialMenu" variant="darkMenu" class="d-none">
      <b-navbar-brand href="http://ce-terrassa.cat/" fluid-grow class="ml-2 mr-auto">
        <b-img src="logosCET/CET_Esquerra-transparent-blanc-xs.png" alt="Logo Centre Excursionista Terrassa"></b-img>
      </b-navbar-brand>
      <b-list-group horizontal class="ml-auto mr-2">
        <b-list-group-item><img src="../assets/social/icon-direccio.png" class="mx-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
        <b-list-group-item class="mr-2"><img src="../assets/social/icon-telefon.png" class="mx-2">93 788 30 30</b-list-group-item>
        <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://twitter.com/ceterrassa" target="_blank"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
        <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
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
            <b-nav-item-dropdown :text="'El '+ keys[0]" left>
              <b-dropdown-item :href="item.url" ref=menuNavegacioCET v-for="(item,index) in menuNavegacio.CET" :key="index">{{ item.item }}</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown text="Activitats" left class="ml-5">
              <b-dropdown-header class="dropdown-header-label">
                Activitats {{ keys[1] }}
              </b-dropdown-header>
                <b-dropdown-item :href="item.url" ref=menuNavegacioCET v-for="(item,index) in menuNavegacio.Esportives" :key="index">{{ item.item }}</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header class="dropdown-header-label">
                Activitats {{ keys[2] }}
              </b-dropdown-header>
                <b-dropdown-item :href="item.url" ref=menuNavegacioCET v-for="(item,index) in menuNavegacio.Culturals" :key="index">{{ item.item }}</b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header id="dropdown-header-label">
                Activitats {{ keys[3] }}
              </b-dropdown-header>
                <b-dropdown-item :href="item.url" ref=menuNavegacioCET v-for="(item,index) in menuNavegacio.Socials" :key="index">{{ item.item }}</b-dropdown-item>
              </b-nav-item-dropdown>
            <b-nav-item-dropdown :text="keys[4]" left class="ml-5 textCyan">
              <b-dropdown-item :href="item.url" ref=menuNavegacioCET v-for="(item,index) in menuNavegacio.Publicacions" :key="index">{{ item.item }}</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item class="ml-5 mr-5" href="https://www.flickr.com/photos/ceterrassa/collections/">Galeries</b-nav-item>

            <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="altaSoci mt-4 mx-auto displayMobile">Fer-se Soci</b-button>

            <b-list-group horizontal class="mx-auto mt-4 displayMobile">
              <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://twitter.com/ceterrassa" target="_blank"><img src="../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
            </b-list-group>

            <b-list-group class="mt-3 displayMobile">
              <b-list-group-item class="mt-3"><img src="../assets/social/icon-direccio.png" class="mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
              <b-list-group-item class="mt-3"><img src="../assets/social/icon-telefon.png" class="mr-2">93 788 30 30</b-list-group-item>
            </b-list-group>
          </b-navbar-nav>
          <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="d-none altaSoci">
            Fer-se Soci
          </b-button>
        </b-collapse>
        </b-navbar>
      </b-col>
    </b-row>   
  </div>
</template>

<script>
import menuPrincipal from './json/menu.json'

export default {
  name: 'menu',

  data() {
    return {
      menuNavegacio: menuPrincipal,
      keys: Object.keys(menuPrincipal),
    }
  },

  methods:{
/* 
    stickyMenu(){
      console.log("estic fent scroll");
    }
 */
  },

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/* background */

.menuBackground{
  background-color: #afc8ad !important;
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

  .altaSoci {
    margin-right:80px;
    color:cyan;
    font-family:"QuickSand" !important;
    font-weight:600;
    text-decoration: none;
  }

  .altaSoci:hover{
    color:#103440;
    font-weight:900;
  }

@media (max-width: 1200px) {
  .altaSoci {
    margin-left: 0 !important;
  }
}

@media (max-width: 864px) {
  .altaSoci {
    margin-right:0px;
  }
}

@media (min-width: 768px) {
  .altaSoci {
    display: flex !important;
  }
}

@media (min-width: 768px) {
  .displayMobile {
    display: none !important;
  }
}

</style>
