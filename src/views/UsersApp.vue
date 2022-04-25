<template>
  <nav id="app" class="container-fluid">
    <div>
      <router-link to="/" id="homeIcon">
        <a class="navbar-brand" href="">
          <img
            src="../assets/casa.png"
            width="30"
            height="30"
            alt="Menú"
          />
        </a>
      </router-link>
    </div>

    <ul class="nav nav-tabs justify-content-end mb-3">
      <router-link to="/">
        <a class="nav-link" href="">Home</a>
      </router-link>
      <router-link to="/login">
        <a class="nav-link active" href="">Users</a>
      </router-link>
      <li class="nav-item">
        <a class="nav-link" href="">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Delete</a>
      </li>
      <li class="nav-item">
        <router-link to="/">
          <a class="nav-link" href="">Log Out</a>
        </router-link>
      </li>
      <li class="nav-item">
        <a class="nav-link hiddenNav" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link hiddenNav" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link hiddenNav" href=""></a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://es-es.facebook.com/">
          <img
            id="insta"
            src="../assets/facebook_1.jpg"
            width="50"
            height="50"
            alt="Facebook"
          />
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://www.instagram.com/">
          <img
            src="../assets/instagram_2.jpg"
            width="48"
            height="48"
            alt="Instagram"
          />
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://twitter.com/i/flow/login">
          <img
            src="../assets/twitter_1.jpg"
            width="47"
            height="47"
            alt="Twitter"
          />
        </a>
      </li>
    </ul>
  </nav>

  <article class="container">
    <div class="card">
      <div class="row">
        <div class="col-6 bodyUser">
          <h3 class="card-text">Title</h3>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <p class="card-text moreAbUser">
            Learn More
            <img src="../assets/buscando.png" alt="error_imagen_busqueda" />
          </p>
        </div>
        <div class="col bodyUser"></div>
        <div class="col bodyUser"></div>
        <div class="col bodyUser"></div>
        <div class="col bodyUser"></div>
        <div class="col bodyUser"></div>

        <div class="col-1 cardUser" id="imgUser">
          <img
            width="100px"
            height="100px"
            src="../assets/perfil-del-usuario.png"
            alt="error_imagen_usuario"
          />
        </div>
        <div class="col-3 cardUser" id="nameUser">
          <p id="nameUser">Usuario Cualquiera</p>
          <p>Laburo</p>
        </div>
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
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  font-size: 20px;
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

.hiddenNav {
  visibility: hidden;
}

.nav-link {
  font-size: 21px;
  padding-bottom: 17px;
}

a {
  text-decoration: none !important;
}

.nav-link:link,
.nav-link:visited,
.nav-link:active {
  color: rgb(229, 155, 27);
  background-color: transparent;
  text-decoration: none;
}

.nav-link:hover {
  color: rgb(163, 130, 29) !important;
  background-color: transparent;
  font-weight: bolder;
  text-decoration: none;
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

.nav,
nav {
  border-color: #debc25 !important;
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
  text-align: left;
  font-weight: bolder;
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
</style>