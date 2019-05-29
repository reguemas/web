<template>
    <div>
      <b-row class="m-0 filters destacades">
        <h2 class="my-4 mx-5">Activitats destacades</h2>
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
  name: 'activitatDestacades',

    components: {
    card,
  }
}

</script>

<style>

    .destacades{
        background-color: #ffcc66;
    }

</style>