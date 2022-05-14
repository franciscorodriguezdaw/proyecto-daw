<template>
  <nav-logOut></nav-logOut>
  <article class="container">
    <div class="card">
      <div class="row">
        <div class="col col-6" id="imgMain">
          <img
            src="../assets/office.jpg"
            class="img-fluid rounded-start"
            alt="error al cargar imagen de Home"
          />
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-left">
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

  mounted() {
    if (localStorage.getItem("reloaded")) {
      localStorage.removeItem("reloaded");
    } else {
      localStorage.setItem("reloaded", "1");
      location.reload();
    }
  },
};
</script>

<style>
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

@media (max-width: 750px) {
  #imgMain {
    display: none;
  }
}
</style>
