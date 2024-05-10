<template>
    <div class="register-page">
      <div class="register-container">
        <h2 class="title">Registro</h2>
        <form @submit.prevent="registrarUsuario">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" v-model="nombre" required />
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" v-model="correo" required />
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" v-model="contrasena" required />
          </div>
          <div class="form-group">
            <label for="confirmarContrasena">Confirmar contraseña:</label>
            <input type="password" id="confirmarContrasena" v-model="confirmarContrasena" required />
          </div>
          <button type="submit" class="btn-register">Registrar</button>
        </form>
        <p class="login-message">
          ¿Ya tienes una cuenta?
          <router-link to="/login" class="login-link">Iniciar sesión</router-link>
        </p>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: "RegisterPage",
    data() {
      return {
        nombre: "",
        correo: "",
        contrasena: "",
        confirmarContrasena: "",
      };
    },
    methods: {
      registrarUsuario() {
        console.log("Nombre:", this.nombre);
        console.log("Correo electrónico:", this.correo);
        console.log("Contraseña:", this.contrasena);
        console.log("Confirmar contraseña:", this.confirmarContrasena);

        if (this.contrasena !== this.confirmarContrasena) {
          console.log("Las contraseñas no coinciden.");
          return;
        }

      },
    },
  };
  </script>

  <style scoped>
  .register-page {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Segoe UI', sans-serif;
    background-color: #080808;
  }

  .register-container {
    width: 30%;
    background-color: black;
    padding: 24px;
    border-radius: 12px;
    color: #ccc;
  }

  .title {
    color: blue;
    margin-bottom: 16px;
  }

  .form-group {
    margin-bottom: 16px;
  }

  .form-group label {
    display: block;
    margin-bottom: 8px;
    color: #ccc;
  }

  .form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #555;
    background-color: #333;
    color: #ccc;
  }

  .btn-register {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: none;
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-register:hover {
    background-color: #0056b3;
  }
  </style>
