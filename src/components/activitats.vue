<template>
    <div>
      <b-row class="m-0 filters">
        <b-col cols="3" class="p-0 calendar">
          <b-form inline class="mt-4 justify-content-center">
            <!-- <label class="mr-sm-3" for="Inline-Filters">Aquí Farem</label> -->
            <b-form-select
              class="mb-2 mr-sm-3 mb-sm-0"
              :value="null"
              :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
              id="Inline-Filters"
            >
              <option slot="first" :value="null">Busca Activitats</option>
            </b-form-select>

            <b-form-select
              class="mb-2 mr-sm-2 mb-sm-0 form-control-lg"
              :value="null"
              :options="{ '1': 'One', '2': 'Two', '3': 'Three' }"
              id="inline-form-custom-select-pref"
            >
              <option slot="first" :value="null">Quin Mes</option>
            </b-form-select>
<!--             <b-button type="submit" variant="success" class="px-5">Cerca</b-button> -->
          </b-form>
          <v-calendar is-dark class="mt-5 d-flex mx-auto"></v-calendar>
        </b-col>

        <b-col cols="9" class="p-0 position-relative activitats">
          <h3 class="my-4 ml-5">Activitats Esportives</h3>
          <b-list-group horizontal class="ml-5">
            <card/>
            <card class="ml-3"/>
            <card class="ml-3"/>
            <card class="ml-3"/>
          </b-list-group>
        </b-col>
      </b-row>

    <b-row class="m-0 filters">
        <b-col cols="3" class="p-0 calendar">
        </b-col>
        <b-col cols="9" class="p-0 position-relative activitats">
          <h2 class="my-5 mx-5">Activitats Culturals</h2>
          <b-list-group horizontal class="ml-5 overflow-hidden">
            <card/>
            <card class="ml-3"/>
            <card class="ml-3"/>
            <card class="ml-3"/>
          </b-list-group>
        </b-col>
      </b-row>

      <b-row class="m-0 filters">
        <b-col cols="3" class="p-0 calendar">
        </b-col>
        <b-col cols="9" class="p-0 position-relative activitats">
          <h2 class="my-5 mx-5">Activitats Socials</h2>
          <b-list-group horizontal class="ml-5 overflow-hidden">
            <card/>
            <card class="ml-3"/>
            <card class="ml-3"/>
            <card class="ml-3 mb-5"/>
          </b-list-group>
        </b-col>
      </b-row>
  </div>
</template>

<script>
import card from './card.vue'

export default {
  name: 'activitats',

  components: {
    card,
  }
}

</script>

<style>

  #cardsBackground{
    background-color:rgb(13,189,151);
  }

  .calendar{
    background-color: rgba(54,54,54,0.3);
  }

  .filters{
    font-size:1.5rem !important;
    font-weight:900 !important;
  }

  #buttonFilters{
    margin-top:-5rem;
    z-index:5000 !important;
  }
  
  .activitats{
    background-color:#b1c1d0;
  }

</style>
