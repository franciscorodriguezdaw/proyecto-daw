<template>
  <nav id="about" class="container-fluid">
    <div>
      <router-link to="/home" id="homeIcon">
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
          <input type="text" name="name" id="name" />
        </p>

        <p class="card-text text-center">
          <label for="password">Contraseña</label>
        </p>
        <p class="card-text text-center">
          <input type="password" name="password" id="password" />
        </p>
        <a href="moreInf.html" class="btn botton">CONFIRMAR</a>
      </div>
    </div>
  </article>
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
  margin-bottom: 300px;
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
  padding-top: 15px;
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

.botton {
  margin-right: 27%;
}
</style>