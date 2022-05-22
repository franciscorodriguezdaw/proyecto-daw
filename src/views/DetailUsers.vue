<template>
  <nav-logIn></nav-logIn>
  <article class="container">
    <details-user></details-user>
  </article>

  <footer-personal></footer-personal>
</template>


<script>
import FooterPersonal from "../components/footer.vue";
import NavLogIn from "../components/navLogIn.vue";
import DetailsUser from "../components/details.vue";
import axios from "axios";

export default {
  name: "App",
  components: {
    FooterPersonal,
    NavLogIn,
    DetailsUser,
  },
  created() {
    let userId = sessionStorage.getItem("id");
    axios.get("http://localhost:8080/api/").then((response) => {
      console.log(userId);
      response.data.users.forEach(user => {
        if(user.id == userId){
          // console.log("!!Es: " + user.name)
          document.getElementById("userWeb").value = user.username;
          document.getElementById("password").value = user.password;
          document.getElementById("picture").src = user.picture;
          document.getElementById("name").value = user.name;
          document.getElementById("surname").value = user.surname;
          document.getElementById("observations").value = user.observations ?? "";
        }
      });
    });
  },
};
</script>

<style>
</style>