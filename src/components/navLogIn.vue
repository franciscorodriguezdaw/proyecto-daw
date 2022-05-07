<template>
    <nav id="app" class="container-fluid">
    <div>
      <router-link to="/" id="homeIcon">
        <a class="navbar-brand" href="">
          <img src="../assets/casa.png" width="30" height="30" alt="Menú" />
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
          <i class="fa-brands fa-facebook-square" id="socialWebs"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://www.instagram.com/">
          <i class="fa-brands fa-instagram-square" id="socialWebs"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="https://twitter.com/i/flow/login">
          <i class="fa-brands fa-twitter-square" id="socialWebs"></i>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
name: "nav-logIn",
}
</script>

<style>
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

#homeIcon:hover {
  background-color: #fffae3;
  top: 10px;
  width: 60px;
  height: 60px;
  text-align: center;
  margin: 0 auto;
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

@media (max-width: 750px) {
  .boxIcoOne {
    position: absolute;
    top: 10px;
    right: 120px;
  }

  .boxIcoTwo {
    position: absolute;
    top: 10px;
    right: 65px;
  }

  .boxIcoThree {
    position: absolute;
    top: 10px;
  }

  #separator {
    width: 10px;
    height: 10px;
  }

}

#socialWebs {
  font-size: 45px;
  color: #f4a20a;
  margin-right: 6px;
  transition: 1s;
}
#socialWebs:hover {
  margin-bottom: 20px;
  padding-top: -40px;
  font-size: 60px;
  color: #ffd12b;
}

</style>