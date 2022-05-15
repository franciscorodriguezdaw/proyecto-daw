<template>
  <nav-logIn></nav-logIn>
  <article class="container">
    <div class="card" v-for="user in users" v-bind:key="user.id">
      <div class="row">
        <div class="col-6 bodyUser">
          <h3 class="card-text">{{ user.name }}</h3>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <p class="card-text moreAbUser">
            <router-link to="/detail">
              <a href="">
                Detalles
                <img src="../assets/buscando.png" alt="Buscar" />
              </a>
            </router-link>
          </p>
        </div>
        <div class="col-1 bodyUser"></div>

        <div class="col cardUser" id="imgUser">
          <router-link to="/detail">
            <img
              class="profilePic"
              :src="'data:image/jpeg;base64,' + user.picture"
              alt="Foto de perfil"
            />
          </router-link>
        </div>
        <div class="col cardUser" id="nameUser">
          <p>{{ user.name + " " + user.surname }}</p>
          <span id="info">
            <p><b>Trabajo: </b>{{ user.job }}</p>
            <p><b>Salario: </b>{{ user.salary }}</p>
            <p><b>Tipo de salario: </b>{{ user.salary_type }}</p>
            <p><b>Propina: </b>{{ user.pot }}</p>
          </span>
        </div>
        <div class="ghost"></div>
        <i
          class="fa-solid fa-xmark"
          id="deleteIcon"
          @click="deleteData(user.id)"
        ></i>
      </div>
    </div>
  </article>

  <footer-personal></footer-personal>
</template>


<script>
import FooterPersonal from "../components/footer.vue";
import NavLogIn from "../components/navLogIn.vue";
import axios from "axios";
import Swal from "sweetalert2";

export default {
  name: "App",
  components: {
    FooterPersonal,
    NavLogIn,
  },
  data() {
    return { users: [] };
  },
  methods: {
    deleteData(id) {
      Swal.fire({
        title: `¿Estás seguro de que quieres eliminar al empleado con id ${id}?`,
        showDenyButton: true,
        icon: "warning",
        confirmButtonText: "Eliminar",
        denyButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .post(
              "http://localhost/dashboard/proyecto-daw/src/backend/deleteUser.php",
              {
                id: id,
                method: "POST",
              }
            )
            .then(function (response) {
              Swal.fire("!Eliminado correctamente!", "", "success");
              console.log(response.data);
            })
            .catch(() => {
              Swal.fire("No se pudo eliminar al empleado", "", "error");
            });
        } else if (result.isDenied) {
          Swal.fire("¡Ok! Este empleado no será eliminado", "", "success");
        }
      });
    },
  },
  created() {
    axios
      .get("http://localhost/dashboard/proyecto-daw/src/backend/userList.php")
      .then((response) => {
        this.users = response.data.users;
      });
  },
  mounted() {
    if (localStorage.getItem("reloaded")) {
      // The page was just reloaded. Clear the value from local storage
      // so that it will reload the next time this page is visited.
      localStorage.removeItem("reloaded");
    } else {
      // Set a flag so that we know not to reload the page twice.
      localStorage.setItem("reloaded", "1");
      location.reload();
    }
  },
};
</script>

<style>
#info > * {
  text-align: left;
  font-size: 12px;
  font-family: sans-serif;
  margin-bottom: 0px;
}
.profilePic {
  width: 120px;
  height: 120px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.card-title {
  margin-top: 35px;
  font-size: 50px;
}

.card-text {
  text-align: left;
  margin-top: 30px;
  font-size: 20px;
  margin-left: 20px;
}

.card {
  border: 2px solid #806b2d6c;
  width: 80%;
  margin: 0 auto;
  margin-top: 50px;
  padding: 20px;
  padding-left: 35px;
  padding-right: 35px;
}

.card > .row {
  height: 210px;
}

.rounded-start {
  margin-top: 50px;
  margin-bottom: 50px;
}

.btn {
  color: #343f3f;
  font-size: 16px;
  font-weight: bolder;
  float: right;
  background-color: #fdaf1d;
  height: 50px;
  text-align: center;
}

.btn:hover {
  color: rgb(255, 229, 181);
  background-color: #272c2c;
}

.cardUser {
  margin-top: 40px;
  margin-right: 2%;
  text-align: right;
}

#nameUser > p {
  margin-top: 20px;
  font-weight: bolder;
  text-align: left;
}

h3 {
  font-weight: bolder;
}

.moreAbUser {
  color: #f4a20a;
  margin: 0 auto;
  margin-left: 20px;
}

.bodyUser {
  background: #f2eeee80;
}

.card {
  padding: 0;
  padding-left: 12px;
}

.ghost {
  width: 10px;
}

#deleteIcon {
  position: absolute;
  left: 93.2%;
  bottom: 83%;
  transition: 1s;
  background-color: #272c2c;
  border-bottom-left-radius: 15px;
  width: 7%;
  font-size: 30px;
  padding: 4px;
  min-width: 30px;
}

#deleteIcon:hover {
  color: aliceblue !important;
  margin-bottom: 0px;
  padding-top: 3px;
}

a:link,
a:visited,
a:active {
  color: rgb(229, 155, 27);
  background-color: transparent;
  text-decoration: none;
}

@media (max-width: 1000px) {
  .bodyUser {
    display: none;
  }

  .cardUser,
  .row {
    padding: 0px;
  }
}

@media (max-width: 500px) {
  #deleteIcon {
    left: 90.2%;
  }
}
</style>