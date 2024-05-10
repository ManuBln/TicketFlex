<template>
    <div class="login-page">
      <div class="login-container">
        <h2 class="title">Inicio de sesión</h2>
        <form @submit.prevent="iniciarSesion">
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" v-model="correo" required />
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" v-model="contrasena" required />
          </div>
          <button type="submit" class="btn-login">Iniciar sesión</button>
        </form>
        <p class="register-message">
          ¿No tienes una cuenta?
          <router-link to="/register" class="register-link">Regístrate!</router-link>
        </p>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: "LoginPage",
    data() {
      return {
        correo: "",
        contrasena: "",
      };
    },
    methods: {
      iniciarSesion() {
        console.log("Correo electrónico:", this.correo);
        console.log("Contraseña:", this.contrasena);
      },
    },
  };
  </script>

  <style scoped>
  .login-page {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Segoe UI', sans-serif;
    background-color: #080808;
  }

  .login-container {
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
    margin-right: 16px;
  }

  .btn-login {
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

  .btn-login:hover {
    background-color: #0056b3;
  }

  .register-message {
    margin-top: 16px;
    color: #ccc;
    font-size: 14px;
  }

  .register-link {
    color: #007bff;
    text-decoration: none;
    margin-left: 5px;
  }

  .register-link:hover {
    color: #0056b3;
  }
  </style>
