<template>
  <div id="app">
    <router-link id="app" to="/HelloWorld">Go to HelloWorld</router-link>
    <router-link id="app" to="/button-counter">Go to button-counter</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app',
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
