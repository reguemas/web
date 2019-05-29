<template>
    <div>
      <b-row class="m-0 filters noticies">
        <h2 class="my-4 mx-5">Noticies del CET</h2>
        <b-card-group deck class="mx-5 justify-content-between">
          <card/>
          <card/>
          <card/>
          <card/>
          <card class="mb-5"/>
        </b-card-group>
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