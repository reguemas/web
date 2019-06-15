<template>
    <div>
      <b-row no-gutters align-v="center" class="m-0 filters destacades justify-content-center">
        <h2 class="m-5">Activitats destacades</h2>
        <b-card-group class="mb-5 justify-content-center">
          <card class="mb-3"/>
          <card class="ml-3"/>
          <card class="ml-3"/>
          <card class="ml-3"/>
          <card/>
          <card class="ml-3"/>
          <card class="ml-3"/>
          <card class="ml-3"/>
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