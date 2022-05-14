<template>
  <nav-logIn></nav-logIn>
  <article class="container">
    <div class="card" v-for="user in users" v-bind:key="user.id">
      <div class="row">
        <div class="col-2 bodyBotton">
          <div class="card selectUpd" id="checkIn">
            <button type="button" class="btn btn-warning">Check In</button>
          </div>
          <div class="card selectUpd" id="checkOut">
            <button type="button" class="btn btn-danger">Check Out</button>
          </div>
          <div class="card selectUpd" id="pot">
            <button type="button" class="btn btn-outline-dark">BOTE</button>
          </div>
        </div>
        <div class="col-5 bodyUser">
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

        <div class="col col-xs-1 cardUser" id="imgUser">
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
          <p>Laburo</p>
        </div>
        <div class="ghost"></div>
        <i class="fa-solid fa-xmark" id="deleteIcon"></i>
      </div>
    </div>
  </article>

  <footer-personal></footer-personal>
</template>


<script>
import FooterPersonal from "../components/footer.vue";
import NavLogIn from "../components/navLogIn.vue";
import axios from "axios";

export default {
  name: "App",
  components: {
    FooterPersonal,
    NavLogIn,
  },
  data() {
    return { users: [] };
  },
  created() {
    axios
      .get("http://localhost/dashboard/proyecto-daw/src/backend/userList.php")
      .then((response) => {
        this.users = response.data.users;
        console.log(this.users);
      });
  },
};
</script>

<style>
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

.bodyBotton {
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

.selectUpd {
  padding: 0px !important;
  float: left;
  margin-left: 10px;
  border: none;
}

.selectUpd > button {
  height: 33px;
}

#checkIn {
  width: 100px;
  margin-top: 34px !important;
}

#checkOut {
  width: 110px;
  margin-top: 15px !important;
}

#pot {
  width: 80px;
  margin-top: 15px !important;
}

.bodyBotton {
  border-right: 2px solid #806b2d6c;
}

.btn-warning {
  background-color: rgb(249, 190, 89);
  border: 2px solid #806b2d6c;
  transition: 1s ease;
}

.btn-warning:hover {
  background-color: rgb(220, 168, 79);
  border: 1px solid #000000;
  color: rgb(55, 52, 52);
}

.btn-danger {
  background-color: rgb(231, 151, 139);
  border: 2px solid #806b2d6c;
  transition: 1s ease;
}

.btn-danger:hover {
  background-color: rgb(249, 199, 191);
  border: 1px solid #000000;
  color: rgb(55, 52, 52);
  font-weight: bolder;
}

.btn-outline-dark {
  background-color: rgb(255, 255, 255);
  border: 2px solid #806b2d6c;
  transition: 1s ease;
}

.btn-outline-dark:hover {
  background-color: rgb(232, 247, 246);
  border: 1px solid #000000;
  color: rgb(55, 52, 52);
  font-weight: bolder;
}

@media (max-width: 1400px) {
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

  #imgUser{
  display: none;
  }

  #nameUser{
    padding-left: 20px;
  }
}

@media (max-width: 1400px) {
  .bodyBotton {
    min-width: 150px;
  }
}
</style>