<template>
    <div>
      <b-row class="m-0 filters noticies justify-content-center">
        <h2 class="m-5">Imnatges de Sortides del CET</h2>
          <b-list-group horizontal>
            <card/>
            <card class="ml-3"/>
            <card class="ml-3"/>
            <card class="ml-3"/>
          </b-list-group>
      </b-row>
    </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'noticies',

    components: {
    card,
  }
}

</script>

<style>

  .noticies{
    background-color: rgb(204, 219, 171);
  }

</style>