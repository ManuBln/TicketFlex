<template>
    <div>
      <register />

    </div>
  </template>

  <script>
  import navbar from './aboutus.vue';
  import Login from './login.vue';
  import register from './register.vue';


  export default {
    components: {
      navbar, Login, register

    }
  }
  </script>
  <style scoped>

  </style>
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
