<template>
    <div>
      <b-row class="p-0 m-0 noticies">
        <h2 class="my-5">Imnatges de Sortides del CET</h2>
          <b-list-group horizontal class="overflow-hidden">
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