<template>
  <div>
    <div class="menuBackgroundFosc">
      <b-navbar id="contactMenu" class="d-flex">
        <b-list-group horizontal class="ml-auto mr-4">
          <b-list-group-item><img src="../../assets/social/icon-direccio.png" class="ml-3 mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
          <b-list-group-item><img src="../../assets/social/icon-telefon.png" class="ml-3 mr-2">93 788 30 30</b-list-group-item>
          <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../../assets/social/icon-email.png" class="ml-3 mr-2"></b-list-group-item>
          <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
        </b-list-group>
      </b-navbar>

      <b-navbar id="socialMenu" class="d-none">
        <b-navbar-brand href="http://ce-terrassa.cat/" fluid-grow class="ml-2 mr-auto">
          <b-img src="logosCET/CET_Esquerra-transparent-blanc-xs.png" alt="Logo Centre Excursionista Terrassa"></b-img>
        </b-navbar-brand>
        <b-list-group horizontal class="ml-auto mr-2">
          <b-list-group-item><img src="../../assets/social/icon-direccio.png" class="mx-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
          <b-list-group-item class="mr-2"><img src="../../assets/social/icon-telefon.png" class="mx-2">93 788 30 30</b-list-group-item>
          <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://twitter.com/ceterrassa" target="_blank"><img src="../../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
          <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
        </b-list-group>
      </b-navbar>
    </div>

    <div class="menuBackground">
      <b-row no-gutters class="justify-content-center">
        <b-navbar id="menuNav" small toggleable="md" type="dark" class="p-0 w-100">

          <b-navbar-toggle type="dark" variant="dark" target="nav-collapse" class="my-3 ml-3"></b-navbar-toggle>

          <h2 class="my-auto textCyan displayMobile">CET</h2>

          <b-navbar-brand id="logoCET" href="#" fluid-grow class="mr-4">
            <b-img src="logosCET/CET_Esquerra-transparent-blanc-xs.png" alt="Logo Centre Excursionista Terrassa"></b-img>
          </b-navbar-brand>

          <b-collapse id="nav-collapse" is-nav class="my-4 justify-content-xl-center justify-content-lg-end justify-content-md-center">

          <b-navbar-nav class="">
            <b-nav-item-dropdown :text="menuNavegacio.keys_Menu[0]" left>
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexCET) in menuNavegacio.CET" 
                :key="indexCET"
              >
                {{ item.item }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown 
              :text="menuNavegacio.keys_Menu[1]"
              left class="ml-5"
            >
              <b-dropdown-header 
                href="http://ce-terrassa.cat/activitats-del-cet/"
              >
                Activitats del CET
              </b-dropdown-header>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header>
                Area {{ menuNavegacio.keys_Arees[0] }}
              </b-dropdown-header>
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexActivitatsEsportiva) in menuNavegacio.Activitats.Esportiva.Seccions" 
                :key="indexActivitatsEsportiva"
              >
                Secció {{ item.key_Seccio }}
              </b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header>
                Area {{ menuNavegacio.keys_Arees[1] }}
              </b-dropdown-header>
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexActivitatsCientificaCultural) in menuNavegacio.Activitats.Cientifica_Cultural.Seccions" 
                :key="indexActivitatsCientificaCultural"
              >
                Secció {{ item.key_Seccio }}
              </b-dropdown-item>
            <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header>
                Area {{ menuNavegacio.keys_Arees[2] }}
              </b-dropdown-header>
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexActivitatsFormacio) in menuNavegacio.Activitats.Formacio.Seccions" 
                :key="indexActivitatsFormacio"
              >
                {{ item.key_Seccio }}
              </b-dropdown-item>
            <b-dropdown-divider></b-dropdown-divider>
              <b-dropdown-header>
                Area {{ menuNavegacio.keys_Arees[3] }}
              </b-dropdown-header>
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexActivitatSocial) in menuNavegacio.Activitats.Social.Seccions"
                :key="indexActivitatSocial"
              >
                {{ item.key_Seccio }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown 
              :text="menuNavegacio.keys_Menu[2]"
              left class="ml-5"
            >
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexEMCET) in menuNavegacio.EMCET" 
                :key="indexEMCET"
              >
                {{ item.key_Vocalia }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown 
              :text="menuNavegacio.keys_Menu[3]"
              left class="ml-5"
            >
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexProjectes) in menuNavegacio.Projectes" 
                :key="indexProjectes"
              >
                {{ item.item }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item-dropdown 
              :text="menuNavegacio.keys_Menu[4]"
              left class="mx-5"
            >
              <b-dropdown-item 
                :href="item.url" 
                ref=menuNavegacioCET 
                v-for="(item,indexGestions) in menuNavegacio.Gestions" 
                :key="indexGestions"
              >
                {{ item.item }}
              </b-dropdown-item>
            </b-nav-item-dropdown>
            <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="altaSoci mt-4 mx-auto displayMobile">Fer-se Soci</b-button>
            <b-list-group horizontal class="mx-auto mt-4 displayMobile">
              <b-list-group-item href="mailto:centre@ce-terrassa.cat" target="_blank"><img src="../../assets/social/icon-email.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/" target="_blank"><img src="../../assets/social/icon-telegram.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://www.facebook.com/CETerrassa/" target="_blank"><img src="../../assets/social/icon-facebook.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://www.instagram.com/ceterrassa/" target="_blank"><img src="../../assets/social/icon-instagram.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://twitter.com/ceterrassa" target="_blank"><img src="../../assets/social/icon-twitter.png" class="mr-2"></b-list-group-item>
              <b-list-group-item href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467" target="_blank"><img src="../../assets/social/icon-wikiloc.png" class="mr-2"></b-list-group-item>
            </b-list-group>
            <b-list-group class="mt-3 displayMobile">
              <b-list-group-item class="mt-3"><img src="../../assets/social/icon-direccio.png" class="mr-2">C/Sant Llorenç, 10 - Terrassa</b-list-group-item>
              <b-list-group-item class="mt-3"><img src="../../assets/social/icon-telefon.png" class="mr-2">93 788 30 30</b-list-group-item>
            </b-list-group>
          </b-navbar-nav>
          <b-button href="http://ce-terrassa.cat/alta-soci/" size="lg" variant="success" class="d-none altaSoci">
              Fer-se Soci
            </b-button>
          </b-collapse>
        </b-navbar>
      </b-row>   
    </div>
  </div>

</template>

<script>
import menuPrincipal from '@/static/menuNavegacio/menuNavegacio.json'

export default {
  name: 'menuNavegacio',

  data() {
    return {
      menuNavegacio: menuPrincipal
    }
  },

  methods:{
/* 
    stickyMenu(){
      console.log("estic fent scroll");º  0
    }
 */
  },

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/* background */

.menuBackground{
  background-color: rgb(31, 111, 180) !important;
  box-shadow: 0 0.25rem 0.25rem rgba(0,0,0,.25), inset 0 -1px 5px rgba(0,0,0,.25);
}

.menuBackgroundFosc{
  background-color: #1b4c5c !important;
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
  background-color:rgb(31, 111, 180);
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
