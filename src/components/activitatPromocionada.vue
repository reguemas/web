<template>
  <b-container fluid class="m-0 p-0">
    <b-row class="m-0 p-0">
      <b-col class="m-0 p-0">
        <b-row class="mx-0 promocioEsquerra"
          :style="{color: activitatPromocionadaEsquerra.colorFont, background: activitatPromocionadaEsquerra.colorFons}"
        >
          <div class="d-inline-flex">
            <div class="imatgePromocionadaMascara">
              <img
                class="imatgePromocionada"
                slot="img"
                :src="activitatPromocionadaEsquerra.imatge"
                alt="Vols fer de monitor al CET"
              >
            </div>
            <div class="promocio ml-sm-3">
              <div class="d-block w-100">
                <h1 
                  class="titolPromocio mb-3 mt-0 pb-0 pt-2"
                  :style="{borderTop: '3px solid' + activitatPromocionadaEsquerra.colorLiniaEnllaç}"
                >{{activitatPromocionadaEsquerra.titol}}</h1>
                  <p class="mb-2 p-0">{{activitatPromocionadaEsquerra.frase1}}</p>
                  <p class="ml-3 mb-1 p-0">{{activitatPromocionadaEsquerra.llista1}}</p>
                  <p class="ml-3 mb-1 p-0">{{activitatPromocionadaEsquerra.llista2}}</p>
                  <p class="ml-3 m-0 p-0">{{activitatPromocionadaEsquerra.llista3}}</p>
                  <p class="mt-2 p-0">{{activitatPromocionadaEsquerra.frase2}}</p>
                <a 
                  v-if="activitatPromocionadaEsquerra.enllaç!=undefined"
                  :href="activitatPromocionadaEsquerra.url"
                  class="promocionadaEnllaç"
                  :style="{color: activitatPromocionadaEsquerra.colorLiniaEnllaç}"
                >
                  {{activitatPromocionadaEsquerra.enllaç}} -&rsaquo;
                </a>
              </div>
            </div>
          </div>
        </b-row>
      </b-col>
      <b-col class="m-0 p-0" v-if="activitatPromocionadaDreta!=undefined">
        <b-row class="mx-0 promocioDreta"
          :style="{color: activitatPromocionadaDreta.colorFont, background: activitatPromocionadaDreta.colorFons}"
        >
          <div class="d-inline-flex">
            <div class="promocio mr-sm-3">
              <div class="d-block w-100">
                <h1 
                  class="titolPromocio mb-3 mt-0 pb-0 pt-2"
                  :style="{borderTop: '3px solid' + activitatPromocionadaDreta.colorLiniaEnllaç}"
                >{{activitatPromocionadaDreta.titol}}</h1>
                  <p class="mb-2 p-0">{{activitatPromocionadaDreta.frase1}}</p>
                  <p class="mb-1 p-0">{{activitatPromocionadaDreta.llista1}}</p>
                  <p class="mb-1 p-0">{{activitatPromocionadaDreta.llista2}}</p>
                  <p class="m-0 p-0">{{activitatPromocionadaDreta.llista3}}</p>
                  <p class="mt-2 p-0">{{activitatPromocionadaDreta.frase2}}</p>
                <a 
                  v-if="activitatPromocionadaDreta.enllaç!=undefined"
                  :href="activitatPromocionadaDreta.url"
                  class="promocionadaEnllaç" 
                  :style="{color: activitatPromocionadaDreta.colorLiniaEnllaç}"
                >
                &lsaquo;- {{activitatPromocionadaDreta.enllaç}}
                </a>
              </div>
            </div>
            <div class="imatgePromocionadaMascara">
              <img
                class="imatgePromocionada"
                slot="img"
                :src="activitatPromocionadaDreta.imatge"
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
    name: 'activitatPromocionada',

    props:["activitatPromocionadaEsquerra","activitatPromocionadaDreta"],

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

  .promocioEsquerra{
    justify-content: center;
    height:325px;
    color:#f2f5f7;
    background:#008cba;
    align-items:flex-end;
  }

  .promocioDreta{
    text-align:right;
    justify-content: center;
    align-items:flex-end;
    height:325px;
    color:#f2f5f7;
    background:#2f1a45;
  }

  @media (min-width:1200px) and (max-width: 1391px) {
    .promocioEsquerra{
      justify-content: center !important;
    }
    .promocioDreta{
      justify-content: center !important;
    }
  }

    @media (min-width:616px) and (max-width: 1199px) {
    .promocioEsquerra{
      justify-content: start !important;
      padding-left:25px;
    }
    .promocioDreta{
      justify-content: flex-end !important;
      padding-right:25px;
    }
  }

  .imatgePromocionadaMascara{
    width:400px;
    overflow:hidden;
  }

  .imatgePromocionada{
    height:300px;
    width:auto;
  }
  
  @media (min-width:656px) and (max-width: 710px) {
    .imatgePromocionadaMascara{
      width:320px;
      height:auto;
      overflow:hidden;
    }
  }

  @media (max-width:655px) {

    .promocioEsquerra{
      justify-content: center;
      text-align:center;
      align-items:center;
      height:275px;
    }

    .promocioDreta{
      justify-content: center;
      align-items:center;
      text-align:center;
      height:275px;
    }

    .imatgePromocionadaMascara{
      display:none;
    }

    .imatgePromocionada{
      display:none;
    }

    .titolPromocio{
      border-top: none !important;
    }
  }

  .promocio{
    font-family: "Quicksand";
    font-weight:700;
    display:flex;
    align-items:flex-end;
    width:280px;
    margin-bottom:0.5rem;
  }

  .titolPromocio{
    font-size: 1.5rem;
    font-weight:bold;
    text-transform: uppercase;
    border-top: 3px solid #ffcc01;
  }

  .promocionadaEnllaç {
    text-transform: capitalize;
    font-size:1.2rem;
    font-weight:bold;
    color:#ffcc01;
  }

  .promocionadaEnllaç:hover {
    font-size:1.4rem !important; 
    font-weight: bold !important;
    transition: .4s ease;
  }

  .promocionadaEnllaç:active {
    color:#545454 !important;
    transition: .4s ease;
  }

</style>