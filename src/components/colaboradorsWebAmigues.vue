<template>
    <div>
      <b-row class="m-0">
        <b-col cols="12" xl="4">
          <h2 class="my-5 text-center">Col·laboradors</h2>
          <b-row class="mb-5 justify-content-center">
            <a class="gravetatZero" href="https://www.gravetat-zero.com/"></a>
          </b-row>
        </b-col>
        <b-col cols="12" xl="8">
          <h2 class="my-5 text-center">Webs Amigues</h2>
            <b-row class="mb-2 justify-content-center">
              <a class="mx-4 my-4 feec" href="https://www.feec.cat/"></a>
              <a class="mx-4 my-4 minyons" href="https://www.minyons.cat/"></a>
              <a class="mx-4 my-4 amics" href="http://amicsdelesarts-jjmm.cat/"></a>
              <a class="mx-4 my-4 plataformaPerLaLlengua" href="https://www.plataforma-llengua.cat/"></a>
              <a class="mx-4 my-4 esportCatala" href="http://fcesport.cat/"></a>
            </b-row>
            <b-row class="mb-5 justify-content-center">
              <a class="ml-2 parcsNaturals" href="https://parcs.diba.cat/web/santllorenc"></a>
            </b-row>
        </b-col>
      </b-row>
    </div>
</template>

<script>

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

  .amics{
    width: 100px;
    height: 100px;
    background: url("http://ce-terrassa.cat/wp-content/uploads/2014/09/557223_10151207731491180_1410300398_n-e1436258340967.jpg") no-repeat;
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