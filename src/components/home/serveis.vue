<template>
  <b-container fluid class="m-0 p-0">
    <b-row class="m-0 p-0">
      <b-col class="m-0 p-0">
        <b-row class="mx-0 serveiEsquerra">
          <div class="d-inline-flex">
            <div class="imatgeServeisMascara">
              <div class="imatgeServeis"></div>
            </div>
            <div class="serveis ml-sm-3">
              <div class="d-block w-100">
                <h1 class="titolServeis mb-3 mt-0 pb-0 pt-2">
                  Servei de Gestió d'Assegurances
                </h1>
                  <p class="mt-2 p-0">Demana la targeta de la FEEC/Espeleo per la web i la podràs recollir a sercretaria.</p>
                  <p class="mt-2 p-0">Amb l'App de la FEEC no necessites l'exemplar físic.</p>
                <ul>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      targeta FEEC -&rsaquo;
                    </a>
                  </li>
                  <li>
                    <a :href="serveiEsquerra.url" class="serveisEnllaç pt-4">
                      targeta espeleo -&rsaquo;
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </b-row>
      </b-col>
      <b-col class="m-0 p-0" v-if="serveiDreta!=undefined">
        <b-row class="mx-0 serveiDreta">
          <div class="d-inline-flex">
            <div class="serveis mr-sm-3">
              <div class="d-block w-100">
                <h1 
                  class="titolServeis mb-3 mt-0 pb-0 pt-2"
                  :style="{borderTop: '3px solid' + serveiDreta.colorLiniaEnllaç}"
                >{{serveiDreta.titol}}</h1>
                  <p class="mb-2 p-0">{{serveiDreta.frase1}}</p>
                  <p class="mb-1 p-0">{{serveiDreta.llista1}}</p>
                  <p class="mb-1 p-0">{{serveiDreta.llista2}}</p>
                  <p class="m-0 p-0">{{serveiDreta.llista3}}</p>
                  <p class="mt-2 p-0">{{serveiDreta.frase2}}</p>
                <a 
                  v-if="serveiDreta.enllaç!=undefined"
                  :href="serveiDreta.url"
                  class="sereveisEnllaç" 
                  :style="{color: serveiDreta.colorLiniaEnllaç}"
                >
                &lsaquo;- {{serveiDreta.enllaç}}
                </a>
              </div>
            </div>
            <div class="imatgeServeisMascara">
              <img
                class="imatgeServeis"
                slot="img"
                :src="serveiDreta.imatge"
                alt="Vols fer de monitor al CET"
              >
            </div>
          </div>
        </b-row>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>

  export default {
    name: 'serveis',

    props:["serveiEsquerra","serveiDreta"],

    data() {
      return {
        isMobile:false,
      };
    },

    mounted() {
    if( navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
        this.isMobile=true;
      }
    },
  }

</script>

<style>

  .serveis{
    font-family: "Quicksand";
    font-weight:700;
    display:flex;
    align-items:flex-end;
    width:280px;
    margin-bottom:0.5rem;
  }

  .serveiEsquerra{
    justify-content: center;
    height:400px;
    color:#f2f5f7;
    background:#008cba;
    align-items:flex-end;
  }

  .serveiDreta{
    text-align:right;
    justify-content: center;
    align-items:flex-end;
    height:400px;
    color:#f2f5f7;
    background:#3f628d;
  }

  @media (min-width:1200px) and (max-width: 1391px) {
    .serveiEsquerra{
      justify-content: center !important;
    }
    .serveiDreta{
      justify-content: center !important;
    }
  }

  .titolServeis{
    font-size: 1.5rem;
    font-weight:bold;
    text-transform: uppercase;
    border-bottom: 3px solid #ffcc01;
  }

    @media (min-width:616px) and (max-width: 1199px) {
    .serveiEsquerra{
      justify-content: start !important;
      padding-left:25px;
    }
    .serveiDreta{
      justify-content: flex-end !important;
      padding-right:25px;
    }
  }

  .imatgeServeisMascara{
    width:400px;
    overflow:hidden;
  }

  .imatgeServeis{
    background-image:url('~@/assets/imatges/promocions/promocions_1.jpg');
    height:300px;
    width:auto;
  }
  
  @media (min-width:656px) and (max-width: 715px) {
    .imatgeServeisMascara{
      width:320px;
      height:auto;
      overflow:hidden;
    }
  }

  @media (max-width:655px) {

    .serveiEsquerra{
      justify-content: center;
      text-align:center;
      align-items:center;
      height:275px;
    }

    .serveiDreta{
      justify-content: center;
      align-items:center;
      text-align:center;
      height:275px;
    }

    .imatgeServeisMascara{
      display:none;
    }

    .imatgeServeis{
      display:none;
    }

    .titolServeis{
      border-top: none !important;
    }
  }


  .serveisEnllaç {
    text-transform: capitalize;
    font-size:1.2rem;
    font-weight:bold;
    color:#ffcc01;
  }

  .serveisEnllaç:hover {
    font-size:1.4rem !important; 
    font-weight: bold !important;
    transition: .4s ease;
  }

  .serveisEnllaç:active {
    color:#545454 !important;
    transition: .4s ease;
  }

</style>