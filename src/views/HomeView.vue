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
     <router-link to="/">
          <a class="nav-link active" href="">Home</a>
        </router-link>
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
          <img
            id="insta"
            src="../assets/facebook_1.jpg"
            width="50"
            height="50"
            alt="problemas con Instagram"
          />
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://www.instagram.com/">
          <img
            src="../assets/instagram_2.jpg"
            width="48"
            height="48"
            alt="problemas con Facebook"
          />
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://twitter.com/i/flow/login">
          <img
            src="../assets/twitter_1.jpg"
            width="47"
            height="47"
            alt="problemas con Instagram"
          />
        </a>
      </li>
    </ul>
  </nav>

  <article class="container">
    <div class="card">
      <div class="row">
        <div class="col col-6">
          <img
            src="../assets/office.jpg"
            class="img-fluid rounded-start"
            alt="error al cargar imagen de Home"
          />
        </div>
        <div class="col-6 text-left">
          <div class="card-body">
            <h5 class="card-title">Top Handler</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipiscing elit lectus
              pellentesque ornare, hendrerit euismod rutrum aliquam eget netus
              ultricies vulputate suscipit senectus, fusce aptent curae cursus
              fringilla a sagittis habitant nisl.
            </p>

            <p class="card-text">
              Arcu aliquet fringilla ut ac blandit tincidunt dis aenean
              parturient rhoncus dui, tristique a habitant ligula sed lacus
              gravida praesent erat.
            </p>

            <router-link to="/about">
              <a href="" class="btn botton"
                >Investiganos
                <img
                  src="../assets/flecha-correcta.png"
                  alt="error de acceso de imagen de adelante"
                  width="35"
                  height="35"
                />
              </a>
            </router-link>

            <p class="card-text">
              <small class="text-muted"
                >Editado el jueves 14, de Abril de 2022</small
              >
            </p>
          </div>
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
  font-size: 15px;
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

#homeIcon:hover{
  background: rgb(204, 111, 1);
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
  margin-top: 50px;
  padding: 0 45px;
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
</style>
