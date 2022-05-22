<template>
  <nav-logOut></nav-logOut>

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
  <footer-personal></footer-personal>
</template>


<script>
import FooterPersonal from "../components/footer.vue";
import NavLogOut from "../components/navLogOut.vue";

export default {
  name: "App",
  components: {
    FooterPersonal,
    NavLogOut,
  },
};
</script>


<style>
body {
  background: url("../assets/fondo.jpg");
  background-repeat: repeat-x;
  background-position: bottom;
  background-attachment: fixed;
  background-size: 300px 200px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
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

#homeIcon:hover {
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
  text-align: left;
  margin-top: 15%;
  font-size: 40px;
}

.card-text {
  text-align: left;
  margin-left: 0.4% !important;
  font-size: 24px;
}

.card {
  margin-top: 30px;
  padding-left: 35px;
  padding-right: 35px;
}

.card-group > .card {
  border-right-color: #debc25;
  border-left-color: #ffffff;

  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  padding-right: 4%;
  padding-left: 4%;
  padding-top: 20px;
}

.card-group > .card:nth-child(3) {
  border-right-color: #ffffff;
  border-left-color: #debc25;

  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  padding: 2%;
}

article {
  margin-top: 1.5%;
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

.card-body {
  padding-top: 0%;
  margin-top: 0%;
}

img {
  margin-bottom: -8%;
  margin-left: 2.5%;
  padding-right: 2.5%;
}
.text-muted {
  text-align: center;
  margin-bottom: 5%;
}
</style>