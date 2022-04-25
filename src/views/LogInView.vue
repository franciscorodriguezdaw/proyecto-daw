<template>
  <nav id="about" class="container-fluid">
    <div>
      <router-link to="/" id="homeIcon">
        <a class="navbar-brand" href="">
          <img
            src="../assets/casa.png"
            width="30"
            height="30"
            alt="problemas con el enlace del menu"
          />
        </a>
      </router-link>
    </div>
  </nav>

  <article class="container text-center">
    <div class="card border-warning mb-3">
      <div class="card-header">
        <img
          src="../assets/usuario.png"
          alt="problemas con la imagen del usuario"
        />
      </div>
      <div class="card-body">
        <p class="card-text text-center"><label for="name">Usuario</label></p>
        <p class="card-text text-center">
          <input type="text" name="name" id="name" v-model="username" />
        </p>

        <p class="card-text text-center">
          <label for="password">Contraseña</label>
        </p>
        <p class="card-text text-center">
          <input type="password" name="password" id="password" v-model="password"/>
        </p>
        <input type="submit" class="btn button" @click="login()" value="Acceder">
      </div>
    </div>
  </article>
  <footer class="py-4 bg-dark text-white">
    <div class="container text-center">
      <small>Copyright &copy; 2022 - TopHandler.S.L</small>
    </div>
  </footer>
</template>

   <style>
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  font-size: 20px;
}
body {
  width: 100vw;
  position: fixed;
}

#homeIcon {
  top: 20px;
  left: 20px;
  position: absolute;
  width: 55px;
  height: 55px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 40%;
  border: 2px solid rgb(229, 155, 27);
  background: rgb(254, 161, 1);
}

#homeIcon > a {
  margin: 0 auto;
}

#homeIcon > a > img {
  margin: 0 auto;
  margin-top: 12px;
}

a > img {
  margin: 0 auto;
  margin-bottom: 8px;
}

.card-title {
  margin-top: 35px;
  font-size: 50px;
}

.card-text {
  font-size: 20px;
}

.card {
  border-color: #debc25;
  margin-top: 50px;
  padding: 20px;
  padding-left: 25px;
  padding-right: 35px;
  max-width: 28rem;
}

.container {
  margin-top: 80px;
  left: 35%;
  position: absolute;
}

.nav,
nav {
  border-color: #debc25 !important;
}

article {
  top: -20px;
}

label {
  font-weight: bolder;
}

.btn {
  color: #fff;
  margin-top: 40px;
  font-size: 16px;
  font-weight: bolder;
  background-color: #edaa6c;
  height: 60px;
  width: 140px;
  text-align: center;
}

.btn:hover {
  color: #000000;
  background-color: #fdaf1d;
}

.card-header {
  background-color: #ffca97;
  margin-top: 12px;
}

.card-header > img {
  padding: 15px;
}

.card-body{
    margin-right: 15px;
}

.button {
  margin-right: 27%;
}
</style>

<script>
import axios from "axios";

export default {
  data: () => ({
    username: "",
    password: ""
  }),
  methods: {
    login() {
      console.log(this.username);
      console.log(this.password);

      axios.post('http://localhost/dashboard/proyecto-daw/src/backend/test01.php', {
        request: 1,
        username: this.username,
        password: this.password
       })
       .then(function(response) {
        console.log(response);
        console.log(JSON.stringify(response.data));

        if (response.data[0].status == 1) {
          window.location = "users";
         alert('Login Successfully');
        } else {
         alert("User does not exist");
        }
       })
       .catch(function(error) {
        console.log(error);
       });
    }
  }
};
</script>