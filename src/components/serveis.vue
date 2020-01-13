<template>
  <div class="serveis">
    <b-row class="m-0 filters justify-content-center align-items-center">
      <h2 class="text-center pb-4 w-100">Serveis</h2>
        <div class="py-4 mx-4">
          <h4 class="text-center mb-5">Targetes Federatives</h4>
          <a class="serveisImg targetaFederativa" href="http://ce-terrassa.cat/inici/llicencies-federatives/"></a>
        </div>
        <div class="py-4 mx-4">
          <h4 class="text-center mb-5">Butlletí Setmanal</h4>
          <a class="serveisImg butlletiSetmanal" href="https://us7.list-manage.com/subscribe?u=8bfad2969c28698c29f4390ad&id=42c3ad86b5"></a>
        </div>
        <div class="py-4 mx-4">
          <h4 class="text-center mb-5">Portal de Tracks</h4>
          <a class="serveisImg tracks" href="https://ca.wikiloc.com/wikiloc/map.do?lt=41.9945&ln=2.2169&z=9&k=1&event=map&uid=2621467"></a>
        </div>
        <div class="py-4 mx-4">
          <h4 class="text-center mb-5">Canal Telegram</h4>
          <a class="serveisImg telegram" href="http://ce-terrassa.cat/canal-de-telegram-dinformacio-de-lentitat/"></a>
        </div>
    </b-row>
  </div>
</template>

<script>

  import serveis from './json/serveis.json'

  export default {
    name: 'serveis',
  }

</script>

<style>

  .serveis{
    background:#e1d1a0;
    padding-top:4.5rem;
    padding-bottom:4.5rem;
  }

  .serveisImg {
    text-decoration:none !important;
    display:block;
  }

  .targetaFederativa{
    width: 300px;
    height: 193px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2018/12/carnet2019-300x193.jpg") no-repeat;
  }

  .butlletiSetmanal{
    width: 300px;
    height: 222px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/newsletter_blau_rgb-e1446803652472-300x222.png") no-repeat;
  }

  .tracks{
    width: 300px;
    height: 226px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/CETWikiloc-300x226.png") no-repeat;
  }

  .telegram{
    width: 300px;
    height: 300px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/telegram_icon-icons.com_53603-300x300.png") no-repeat;
  }

</style>