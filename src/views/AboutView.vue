<template>
  <nav id="app" class="container-fluid">
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

    <ul class="nav nav-tabs justify-content-end mb-3">
      <li class="nav-item">
        <router-link to="/">
          <a class="nav-link" href="">Home</a>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/login">
          <a class="nav-link" href="">Log in</a>
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
          <i class="fa-brands fa-facebook-square"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://www.instagram.com/">
          <i class="fa-brands fa-instagram-square"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://twitter.com/i/flow/login">
          <i class="fa-brands fa-twitter-square"></i>
        </a>
      </li>
    </ul>
  </nav>

  <article class="container">
    <div class="card-group">
      <div class="card">
        <img
          src="../assets/investigation.jpg"
          width="170"
          height="270"
          class="card-img-top"
          alt="no se cargo la imagen de investigación"
        />
        <div class="card-body">
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
          <h5 class="card-title">Investigación Constante</h5>
          <p class="card-text">
            This is a wider card with supporting text below as a natural lead-in
            to additional content. This content is a little bit longer.
          </p>
        </div>
      </div>
      <div class="card">
        <img
          src="../assets/everyNecesity.jpg"
          width="70"
          height="270"
          class="card-img-top"
          alt="no se cargo la imagen de lo que tu necesites"
        />
        <div class="card-body">
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
          <h5 class="card-title">Conseguimos Adaptarnos</h5>
          <p class="card-text">
            This card has supporting text below as a natural lead-in to
            additional content.
          </p>
        </div>
      </div>
      <div class="card">
        <img
          src="../assets/multiworck.jpg"
          width="170"
          height="270"
          class="card-img-top"
          alt="no se cargo la imagen de disponibilidad"
        />
        <div class="card-body">
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
          <h5 class="card-title">Trabajamos en Diversos Campos</h5>
          <p class="card-text">
            This is a wider card with supporting text below as a natural lead-in
            to additional content. This card has even longer content than the
            first to show that equal height action.
          </p>
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
   top: 40px;
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

#homeIcon > a {
  margin: 0 auto;
}

#homeIcon > a > img {
  margin: 0 auto;
  margin-top: 12px;
}

#homeIcon:hover{
  background-color: #fffae3;
  top: 10px;
  width: 60px;
  height: 60px;
  text-align: center;
  margin: 0 auto;
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
}

.card {
  border-color: #debc25;
  margin-top: 50px;
  padding: 20px;
  padding-left: 35px;
  padding-right: 35px;
}

.nav,
nav {
  border-color: #debc25 !important;
}

article {
  margin-bottom: 300px;
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