<template>
  <nav-logIn></nav-logIn>
  <article class="container">
    <form-user></form-user>
  </article>

  <footer-personal></footer-personal>
</template>


<script>
import FooterPersonal from "../components/footer.vue";
import NavLogIn from "../components/navLogIn.vue";
import FormUser from "../components/formUser.vue";

export default {
  name: "App",
  components: {
    FooterPersonal,
    NavLogIn,
    FormUser,
  },
};
</script>

<style>

body {
  width: 100vw;
  /* position: fixed; */
  background: url("../assets/fondo.jpg");
  background-repeat: repeat-x;
  background-position: bottom;
  background-attachment: fixed;
  background-size: 400px 300px;
}
</style>