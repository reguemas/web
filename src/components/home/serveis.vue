<template>
  <b-container fluid class="m-0 p-0">
    <b-row class="m-0 p-0">
      <h2 class="w-100 text-center py-4 titolServeisBackground m-0">Serveis del CET</h2>
      <b-col class="m-0 p-0">
        <b-row class="mx-0 serveiEsquerra">
          <div class="d-inline-flex">
            <div class="imatgeServeisMascara">
              <div class="imatgeServeisEsquerra"></div>
            </div>
            <div class="serveis ml-sm-3">
              <div class="d-block w-100">
                <h1 class="titolServeis mb-3 mt-0 pb-0 pt-2">
                  Secretaria
                </h1>
                  <p class="mt-2 p-0">Tant a la Web, com a la secretaria del centre trobaràs els següents serveis:</p>
                <ul class="llistaServeis">
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Demanar Informació -&rsaquo;
                    </a>
                  </li>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Fer-se Soci -&rsaquo;
                    </a>
                  </li>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Inscriure's a una activitat -&rsaquo;
                    </a>
                  </li>
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
                <h1 class="titolServeis mb-3 mt-0 pb-0 pt-2">
                  Comunica't amb el CET
                </h1>
                  <p class="mt-2 p-0">Estigues informat de tot el que es cou al CET</p>
                <ul class="llistaServeis">
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Butlletí Setmanal -&rsaquo;
                    </a>
                  </li>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Portal de Tracks -&rsaquo;
                    </a>
                  </li>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Canal de Telegram -&rsaquo;
                    </a>
                  </li>
                  <li class="mb-2">
                    <a :href="serveiEsquerra.url" class="serveisEnllaç">
                      Preferències de Email -&rsaquo;
                    </a>
                  </li>
                </ul>
                <h2 class="mb-3 mt-0 pb-0 pt-2">
                  <a class="participa" :href="serveiEsquerra.url">
                    Col·labora amb el CET -&rsaquo;
                  </a>
                </h2>
              </div>
            </div>
            <div class="imatgeServeisMascara">
              <div class="imatgeServeisDreta"></div>
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

  .titolServeisBackground{
    color:#f2f5f7;
    background:#3f628d;
  }

  .serveis{
    font-family: "Quicksand";
    font-weight:700;
    display:flex;
    align-items:flex-end;
    width:300px;
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

  .titolServeis{
    font-size: 1.5rem;
    font-weight:bold;
    text-transform: uppercase;
    border-bottom: 3px solid #ffcc01;
  }

  .imatgeServeisMascara{
    width:400px;
    overflow:hidden;
  }

  .imatgeServeisDreta{
    background-image:url('~@/assets/imatges/promocions/promocions_1.jpg');
    background-size: cover;
    background-repeat:no-repeat;
    height:350px;
  }

  .imatgeServeisEsquerra{
    background-image:url('~@/assets/imatges/promocions/promocions_1.jpg');
    background-size: cover;
    background-repeat:no-repeat;
    height:350px;
  }
  
  @media (min-width:675px) and (max-width: 750px) {
    .imatgeServeisMascara{
      width:320px;
      height:auto;
      overflow:hidden;
    }
  }

  @media (max-width:674px) {
    .serveiEsquerra{
      justify-content: center;
      align-items:center;
      height:350px;
    }

    .serveiDreta{
      justify-content: center;
      align-items:center;
      height:375px;
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

  .llistaServeis{
    list-style-type: none;
    padding:0;
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
    transition: .2s ease;
    color:#ffcc01;
  }

  .serveisEnllaç:active {
    color:#545454 !important;
    transition: .2s ease;
  }

  .participa{
    font-size:1.4rem;
    font-weight:bold;
    color:cyan;
  }

    .participa:hover {
    font-size:1.6rem !important; 
    font-weight: bold !important;
    transition: .2s ease;
    color:cyan;
  }

  .participa:active {
    color:cyan;
    transition: .4s ease;
  }

</style>