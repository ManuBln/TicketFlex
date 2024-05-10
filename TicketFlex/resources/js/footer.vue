<template>
    <div>
      <!-- Contenido principal de tu aplicación aquí -->
  
      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h5>Contacto</h5>
              <ul>
                <li><strong>Dirección:</strong> Calle Principal, Ciudad, País</li>
                <li><strong>Teléfono:</strong> +1234567890</li>
                <li><strong>Correo Electrónico:</strong> info@ticketflex.com</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h5>Síguenos en las redes sociales</h5>
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Footer',
  }
  </script>
  
  <style>
  /* Estilos CSS para el footer */
  .footer {
    background-color: #333;
    color: #fff;
    padding: 30px 0;
  }
  
  .footer h5 {
    color: #fff;
  }
  
  .footer ul {
    list-style: none;
    padding-left: 0;
  }
  
  .footer ul li {
    margin-bottom: 10px;
  }
  
  .footer ul li a {
    color: #fff;
  }
  
  .footer ul li a:hover {
    color: #bbb;
  }
  </style>