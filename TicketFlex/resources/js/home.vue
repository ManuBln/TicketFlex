<template>
  <div>
    <navbar class="custom-navbar" />
    <Carrousel />
  </div>
</template>

<script>
import Carrousel from './VueFlux.vue';
import navbar from './navbar.vue';


export default {
  components: {
    navbar,   Carrousel
    
  }
}
</script>
<style scoped>
  body{
    margin:0; 
    font-family: 'Roboto Condensed' , sans-serif;
  }

  *{
    box-sizing:border-box
    }
</style>
