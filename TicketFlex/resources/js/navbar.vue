<template>
        <nav>
          <h2 class="logo">Ticket<span>Flex</span></h2>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Entradas</a></li>
            <li><a href="#">Drops</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
          <button type="button"><a href="/login">Iniciar sesión</a></button>
        </nav>
</template>


<script>
export default {
  data() {
    return {
      isMenuOpen: false // Variable para controlar el estado del menú
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen; // Cambia el estado del menú al hacer clic en el icono de hamburguesa
    }
  }
}
</script>
  
  <style scoped>
    * {
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
      font-family: 'Nunito', sans-serif;
      box-sizing:border-box;
    }
  
    nav{
      display: flex;
      align-items: center;
      justify-content:space-between;
      padding-top:40px;
      padding-left:10%;
      padding-right:10%;
    }

    .logo{
      color:white;
      font-size:28px;
    }
  
    span{
      color: blue;
    }
    nav ul li{
      list-style-type:none;
      display:inline-block;
      padding:10px 20px;
    }
    nav ul li a {
      color:white;
      text-decoration: none;
      font-weight:bold;
    }
    nav ul li a:hover {
     color:blue;
     transition: .3s;
    }
    button{
      border:none;
      background:blue;
      padding:12px 30px;
      border-radius:30px;
      color:white;
      font-weight: bold;
      font-size:15px;
      transition:.4s;
    }
    button:hover{
      transform:scale(1.3);
      cursor:pointer;
    }
  </style>
  