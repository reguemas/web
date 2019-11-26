<template>
    <div>
      <b-row class="m-0">
        <b-col>
          <h2 class="my-5 text-center">Col·laboradors</h2>
          <b-row class="mb-5 justify-content-center">
            <a class="serveisImg gravetatZero" href="https://www.gravetat-zero.com/"></a>
          </b-row>
        </b-col>
        <b-col>
          <h2 class="my-5 text-center">Webs Amigues</h2>
            <b-row class="mb-2 justify-content-center">
              <a class="ml-2 serveisImg feec" href="https://www.feec.cat/"></a>
              <a class="ml-2 serveisImg minyons" href="https://www.minyons.cat/"></a>
              <a class="ml-2 serveisImg amics" href="http://amicsdelesarts-jjmm.cat/"></a>
              <a class="ml-2 serveisImg plataformaPerLaLlengua" href="https://www.plataforma-llengua.cat/"></a>
              <a class="ml-2 serveisImg esportCatala" href="http://fcesport.cat/"></a>
            </b-row>
            <b-row class="mb-5 justify-content-center">
              <a class="ml-2 serveisImg parcsNaturals" href="https://parcs.diba.cat/web/santllorenc"></a>
            </b-row>
        </b-col>
      </b-row>
    </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'colaboradors',
}

</script>

<style>

  .colaboradors{
    background-color: #d3d3d3;
  }

  .gravetatZero{
    width: 200px;
    height: 248px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/Gravetat0.png") no-repeat;
  }

  .feec{
    width: 150px;
    height: 150px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/FEEC_Blanc-150x150.png") no-repeat;
  }

  .feec{
    width: 150px;
    height: 150px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/FEEC_Blanc-150x150.png") no-repeat;
  }

  .minyons{
    width: 150px;
    height: 150px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/logo-MINYONS-150x150.jpg") no-repeat;
  }

  .plataformaPerLaLlengua{
    width: 150px;
    height: 150px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/logo_plataforma_1_petit_700-150x150.jpg") no-repeat;
  }

  .esportCatala{
    width: 300px;
    height: 150px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/logo_color-300x125.png") no-repeat;
  }

  .parcsNaturals{
    width: 150px;
    height: 44px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/logo-XarxadeParcsnaturals_1-e1421490851611-150x44.jpg") no-repeat;
  }

</style>