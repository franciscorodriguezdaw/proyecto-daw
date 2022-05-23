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
      response.data.users.forEach((user) => {
        if (user.id == userId) {
          document.getElementById("userWeb").value = user.username;
          document.getElementById("password").value = user.password;
          document.getElementById("picture").src = user.picture;
          document.getElementById("name").value = user.name;
          document.getElementById("selectWork").value = user.job;
          document.getElementById("surname").value = user.surname;
          document.getElementById("observations").value =
            user.observations || "";
          document.getElementById("salary").value = user.salary;

          if (user.salary_type == "Casual") {
            document.getElementById("salTime").checked = true;
          } else {
            document.getElementById("month").checked = true;
          }
          console.log(user);
        }
      });
    });
  },
};
</script>

<style>
</style>