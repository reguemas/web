<template>
    <div>
      <b-row class="m-0 filters colaboradors justify-content-center align-items-center">
        <h1>Col·laboradors i Webs Amigues</h1>
      </b-row>
    </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'colaboradors',

    components: {
    card,
  }
}

</script>

<style>

  .colaboradors{
    background-color: #d3d3d3;
    height:500px;
  }

</style>