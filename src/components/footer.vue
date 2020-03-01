<template>
    <div class="peuPagina justify-content-center">
      <b-row no-gutters class="peuPaginaAmplada justify-content-center">
        <b-col md="6" xl="4">
          <a href="http://ce-terrassa.cat/">
            <img src="logosCET/CENT10_esquerra_negatiu.png" alt="Logo Centre Excursionista Terrassa" class="footerLogo my-4">
          </a>
          <a class="peuPaginaEnllaç mb-2"  href="http://ce-terrassa.cat/inici/el-c-e-t/">
            <p class="mb-2">El CET</p>
          </a>
          <a class="peuPaginaEnllaç"  href="http://ce-terrassa.cat/activitats-del-cet/">
            <p class="mb-2">Activitats del CET</p>
          </a>
          <a class="peuPaginaEnllaç"  href="http://ce-terrassa.cat/agenda/">
            <p class="mb-2">Agenda</p>
          </a>
          <a class="peuPaginaEnllaç"  href="http://ce-terrassa.cat/alta-soci-2020/">
            <p class="mb-2">Fes-te Soci</p>
          </a>
          <a class="peuPaginaEnllaç"  href="http://ce-terrassa.cat/llicencies-federatives-2020/">
            <p class="mb-2">Llicència Federativa FEEC</p>
          </a>
          <a class="my-4 peuPaginaEnllaç"  href="http://ce-terrassa.cat/llicencies-espeleologia-2020/">
            <p class="mb-4">Llicència Federativa FCE</p>
          </a>
          <b-button href="http://ce-terrassa.cat/alta-soci-2020/" size="lg" variant="success" class="mb-5 peuPaginaBoto">
            Fer-se Soci
          </b-button>
        </b-col>
        <b-col md="6" xl="4">
          <h5 class="mb-4 mt-5">Butlletí Setmanal</h5>
          <a class="my-4 footerButlleti" href="https://us7.list-manage.com/subscribe?u=8bfad2969c28698c29f4390ad&id=42c3ad86b5"></a>
        </b-col>
        <b-col lg="12" xl="4">
          <h5 class="mt-5 mb-4">Contacte</h5>
          <h6 class="mb-3">Ens Trobaràs de dilluns a dicvendres de 6 a 9 del vespre a:</h6>
            <p class="mb-2">Carrer Sant Llorenç, 10 - Terrassa - 08221</p>
            <p class="mb-2">Vallès Occidental - Catalunya.</p>
            <p class="mb-2">Telèfon: +34 93 788 30 30.</p>
            <p class="mb-2">Email: centre@ce-terrassa.cat</p>
        </b-col>
      </b-row>
      <b-row no-gutters class="w-100 pt-3">
        <p>© CENTRE EXCURSIONISTA DE TERRASSA 2020. Entitat Excursionista des de 1910</p>
      </b-row>
    </div>
</template>

<script>

export default {
  name: 'peuWeb',
}

</script>

<style>

  .peuPagina{
    font-family:"QuickSand";
    font-size: 1rem;
    background-color: #272727;
    color:cyan;
    border-top: 10px solid olivedrab;
  }

  .peuPaginaAmplada{
    max-width: 1024px;
  }

    @media (max-width: 1200px) {
    .peuPaginaAmplada {
      max-width: 768px;
    }
  }

  .peuPaginaEnllaç{
    color:cyan;
  }

  .peuPaginaEnllaç:hover{
    color:#28a745;
  }

  .peuPaginaEnllaç:active{
    color:#28a745;
  }

  .footerLogo{
    height:110px;
    width:auto;
  }

  .peuPaginaBoto:hover{
    color:#103440 !important;
    font-weight:900;
  }

  .peuPaginaBoto:active{
    color:#103440 !important;
    font-weight:900;
  }

  .footerButlleti{
    display:block;
    width: 300px;
    height: 246px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2018/06/banner_newsletter-blancII-300x246.png") no-repeat;
  }

</style>