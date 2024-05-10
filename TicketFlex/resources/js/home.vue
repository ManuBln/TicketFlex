<template>
  <div>
    <navbar/>
    <Carrousel />
    <AboutUs />
    <Footer />
  </div>
</template>

<script>
import Carrousel from './VueFlux.vue';
import Footer from './footer.vue';
import navbar from './navbar.vue';
import AboutUs from './aboutus.vue';


export default {
  components: {
    navbar,   Carrousel , Footer , AboutUs, 
    
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
