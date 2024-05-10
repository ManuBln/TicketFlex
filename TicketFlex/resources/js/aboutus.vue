<template>
  <div class="about-us">
    <div class="grid-container">
      <!-- Texto arriba a la izquierda -->
      <div class="grid-item text">
        <h2 class="title">Sobre nosotros</h2>
        <p>
          TicketFlex es una aplicación de distribución de entradas para espectáculos en directo. Nos especializamos en conciertos, eventos, fiestas y más. Buscamos ofrecer a nuestros clientes el mejor precio y trabajamos estrechamente con artistas y salas para gestionar todo lo necesario para llevar a cabo las ventas.
        </p>
      </div>
      <!-- Imagen arriba a la derecha -->
      <div class="grid-item image">
        <img src="https://www.muypymes.com/wp-content/uploads/2018/03/reventadeentradas-lanuevacronica.jpg" alt="Imagen de TicketFlex" />
      </div>
      <!-- Imagen abajo a la izquierda -->
      <div class="grid-item image">
        <img src="https://www.cartv.es/thumbs/fullwidth/2023-09/ob.-reventa-emision-ok.copy.01-frame-3123.jpeg?cb07c65993" alt="Imagen de TicketFlex" />
      </div>
      <!-- Texto abajo a la derecha -->
      <div class="grid-item contact">
        <p>Contacta con nosotros:</p>
        <ul>
          <li>
            <a href="mailto:contacto@ticketflex.com">contacto@ticketflex.com</a>
          </li>
          <li>
            <a href="https://www.instagram.com/ticketflex" target="_blank">
              Instagram
            </a>
          </li>
          <li>
            <a href="https://twitter.com/ticketflex" target="_blank">
              Twitter
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AboutUs"
};
</script>

<style scoped>
.about-us {
  width: 100vw;
  height: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Segoe UI', sans-serif;
  font-size: 120%;
  background-color: #080808;
}

.grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 16px;
  width: 90%;
  height: auto;
  background-color:black;
  padding: 16px;
  border-radius: 12px;
}

.grid-item {
  color: #ccc;
}

.title{
  color: blue;
}
.image {
  display: flex;
  justify-content: center;
  align-items: center;
}

.image img {
  max-width: 100%;
  height: auto;
  aspect-ratio: 3/1;
  object-fit: cover;
  border-radius: 8px;
}

.contact {
  border-top: 1px solid #555;
  padding-top: 16px;
}

.contact a {
  color: #007bff; /* Acento azul */
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact a:hover {
  color: #0056b3; /* Color azul más oscuro al pasar sobre el enlace */
}
</style>
