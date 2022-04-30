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
          <input
            type="password"
            name="password"
            id="password"
            v-model="password"
          />
        </p>
        <input
          type="submit"
          class="btn button"
          @click="login()"
          value="Acceder"
        />
      </div>
    </div>
  </article>
  <footer class="py-4 bg-dark text-white">
    <small>Copyright &copy; 2022 - TopHandler.S.L</small>
  </footer>
</template>

   <style>
footer {
  color: white;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  font-size: 15px;
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
  transition: 2s;
}

#homeIcon:hover {
  background-color: #fffae3;
  top: 30px;
  width: 60px;
  height: 60px;
  text-align: center;
  margin: 0 auto;
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
  margin-top: 50px;
  padding: 20px;
  margin-left: 25px;
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
  padding-bottom: 35px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

article {
  top: -5px;
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
  background-color: #edaa6c;
  margin-top: 12px;
}

.card-header > img {
  padding: 15px;
}

.card-body {
  margin-right: 15px;
}

.button {
  margin-right: 27%;
}

i {
  font-size: 45px;
  color: #f4a20a;
  font-weight: bolder;
  margin-right: 6px;
  transition: 1s;
}
i:hover {
  margin-bottom: 20px;
  padding-top: -40px;
  font-size: 60px;
  color: #ffd12b;
}
</style>

<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
  data: () => ({
    username: "",
    password: "",
  }),
  methods: {
    login() {
      console.log(this.username);
      console.log(this.password);

      axios
        .post(
          "http://localhost/dashboard/proyecto-daw/src/backend/test01.php",
          {
            headers: {
              "Access-Control-Allow-Origin": "*",
            },
            request: 1,
            username: this.username,
            password: this.password,
          }
        )
        .then(function (response) {
          console.log(response);
          console.log(JSON.stringify(response.data));

          if (response.data[0].status == 1) {
            const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
              },
            });

            Toast.fire({
              icon: "success",
              title: "Inicio de sesión correcto",
            });
            setTimeout(() => {
              window.location = "users";
            }, 2000);
          } else {
            Swal.fire(
              "No se pudo iniciar sesión",
              "Usuario o contraseña incorrectos",
              "error"
            );
          }
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>