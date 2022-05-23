<template>
  <router-link to="/users" id="backList">
    <a class="navbar-brand" href="">
      <img src="../assets/undo.png" width="25" height="25" alt="Menú" />
    </a>
  </router-link>
  <form class="container contForm" @submit="registerUser">
    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="userWeb" class="form-label">Usuario de plataforma</label>
      <input
        type="text"
        class="form-control"
        id="userWeb"
        name="userWeb"
        aria-describedby="userWeb"
        required
      />
    </div>
    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="userWeb" class="form-label">Contraseña</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        aria-describedby="userWeb"
        required
      />
    </div>

    <div class="col-md-7 col-xs-12 rowInput">
      <label for="avatar" class="form-label"
        >Seleccione su foto de perfil</label
      >
      <input
        type="file"
        v-on:input="loadPicture($event)"
        class="form-control"
        id="avatar"
        name="avatar"
      />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput" id="pictureDiv">
      <img id="picture" :src="image" alt="" />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" required />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="surname" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="surname" required />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="selectWork">Seleccione su Labor en la Empresa</label>
      <select class="form-select" id="selectWork" name="selectWork" required>
        <option selected hidden>Seleccione su labor en la empresa</option>
        <option>Programador web</option>
        <option>Administrador de sistemas</option>
        <option>Científico de datos</option>
        <option>Programador móvil</option>
        <option>Auxiliar infórmatica</option>
        <option>Tester técnico</option>
        <option>Desarrollador de software</option>
      </select>
    </div>

    <div class="mb-4 col-md-7 col-xs-12 rowInput">
      <label for="workday" class="form-label">Jornada Laboral</label>
      <br />
      <label for="workday" class="form-control-inline">Hora de Entrada </label>
      <input type="time" style="width: 200px;" class="form-control-inline" name="checkInTime" id="checkInTime" readonly /><br />
      <label for="workday" class="form-control-inline">Hora de Salida </label><br/>
      <input type="time" style="width: 200px;" class="form-control-inline" name="departureTime" id="departureTime" readonly />
    </div>

    <div class="mb-4 col-md-7 col-xs-12 rowInput salario">
      <label for="salary" class="form-label">Salario</label>
      <input
        type="number"
        step="10"
        min="0"
        class="form-control"
        id="salary"
        required
      />

      <div class="form-check form-check-inline mt-4">
        <input
          class="form-check-input"
          type="radio"
          name="workShift"
          id="month"
          required
        />
        <label class="form-check-label" for="month"> Mensual </label>
      </div>

      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="workShift"
          id="salTime"
          checked
          required
        />
        <label class="form-check-label" for="salTime">
          Salario por Unidad de Tiempo</label
        >
      </div>
    </div>

    <div class="mb-4 rowInput">
      <label for="moreInf" class="form-label">Observaciones</label>
      <textarea
        class="form-control"
        id="observations"
        name="moreInf"
        rows="6"
      ></textarea>
    </div>

    <div class="mb-2 col-md-5 col-xs-12 form-check" id="checkYes">
      <input
        type="checkbox"
        class="form-check-input"
        id="agreeRead"
        name="agreeRead"
        required
      />
      <label class="form-check-label" for="agreeRead" id="submitLabel"
        >HE LEÍDO Y ACEPTO LOS TÉRMINOS LOS TÉRMINOS Y CONDICIOONES DE LA PÁGINA
        WEB</label
      >
    </div>

    <div class="mb-2 col-8 form-check" id="confirm">
        <button type="submit" class="btn btn-primary" id="submitButton">
          Editar
        </button>
    </div>
  </form>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
  name: "details-user",
  methods: {
    registerUser(e) {
      e.preventDefault();
      if (sessionStorage.getItem("user")) {
        this.getBase64Image(this.image, function (dataUrl) {
          axios
            .put("http://localhost:8080/api/", {
              id: sessionStorage.getItem("id"),
              username: document.getElementById("userWeb").value,
              name: document.getElementById("name").value,
              surname: document.getElementById("surname").value,
              password: document.getElementById("password").value,
              picture: dataUrl,
              observations: document.getElementById("observations").value,

              job: document.getElementById("selectWork").value,
              salary: document.getElementById("salary").value,
              salary_type: document.getElementsByName("workShift")[0].value,
            })
            .then(function (response) {
              console.log(response.data);

              //SWAL cuando se añade correctamente
              Swal.fire({
                position: "top",
                icon: "success",
                title: "Actualizado correctamente",
                showConfirmButton: false,
                timer: 1500,
              });
            })
            .catch((e) => {
              console.log("Error: " + e);
              Swal.fire({
                position: "top",
                icon: "error",
                title: "No se pudo editar el usuario",
                showConfirmButton: false,
                timer: 1500,
              });
            });
        });
      } else {
        Swal.fire({
          position: "top",
          icon: "error",
          title: "Error: no estás autorizado a realizar esta operación",
          showConfirmButton: false,
          timer: 1500,
        });
      }
    },
    loadPicture: function (e) {
      let extension = e.target.files[0].name.substr(
        e.target.files[0].name.length - 3
      );
      if (
        extension == "jpg" ||
        extension == "png" ||
        extension == "jpeg" ||
        extension == "gif"
      ) {
        this.image = URL.createObjectURL(e.target.files[0]);
      } else {
        this.image =
          "https://es.rescuedigitalmedia.com/wp-content/uploads/sites/7/2019/04/jpeg-and-jpg-file-download-black-icon-vector-37669571.jpg";
      }
    },
    getBase64Image: function (url, callback) {
      var xhr = new XMLHttpRequest();
      xhr.onload = function () {
        var reader = new FileReader();
        reader.onloadend = function () {
          callback(reader.result);
        };
        reader.readAsDataURL(xhr.response);
      };
      xhr.open("GET", url);
      xhr.responseType = "blob";
      xhr.send();
    },
  },
  data() {
    return {
      image: "",
    };
  },
};
</script>

<style>
#backList {
  top: 45px;
  left: 100px;
  position: absolute;
  width: 45px;
  height: 45px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 40%;
  border: 3px solid rgb(107, 101, 77);
  background: rgb(251, 239, 218);
  transition: 2s;
}

#backList:hover {
  background-color: #fbea96b7;
  top: 10px;
  width: 50px;
  height: 50px;
  text-align: center;
  margin: 0 auto;
}

#backList > a {
  margin: 0 auto;
}

#backList > a > img {
  margin: 0 auto;
  margin-top: 8px;
}

#submitButton {
  margin-top: -20px;
}
.contForm {
  text-align: left;
  background-color: #eca51fa5;
  padding-top: 40px;
  padding-left: 8%;
  padding-right: 8%;
  border-radius: 30px;
}
form > .rowInput {
  background-color: #e8ac3ca5;
  padding: 2%;
  padding-right: 15%;
  border-radius: 5px;
}

form {
  margin-bottom: 200px;
}
input,
label:not(#submitLabel),
#recordatorio,
select,
textarea {
  margin-left: 10px;
  margin-bottom: 20px;
}

.form-check {
  margin-left: 40px;
}

#confirm > button {
  position: absolute;
  margin-top: 10px;
  float: left;
  width: 35%;
}

#confirm {
  margin: 0 auto;
  padding-bottom: 100px;
}

button[type="submit"] {
  font-size: 18px;
  margin-top: 0px;
  padding: 10px 70px;
  background-color: rgb(235, 162, 67);
  border: 2px solid rgb(242, 219, 184);
  transition: 1s ease-out;
}

button[type="submit"]:hover {
  margin: 0 auto;
  color: black;
  background-color: rgb(235, 178, 103);
  border: 2px solid rgb(255, 154, 3);
}

.rowInput > label {
  font-size: 20px;
}

.rowInput > input {
  font-size: 20px;
}

.rowInput > textarea {
  font-size: 20px;
}

#agreeRead {
  font-size: 12px;
}

.form-check-inline {
  font-size: 18px;
}

label[for="workday"] {
  font-size: 18px;
}

label[for="workday"]:nth-child(2) {
  margin-left: 15%;
}

input[type="time"] {
  margin-left: 2%;
  margin-right: 2%;
  width: 18%;
  height: 40px;
}
#recordatorio {
  color: rgb(230, 5, 5);
  font-size: 12px;
}

#pictureDiv {
  height: 100%;
  padding: 30px 6rem;
}
#pictureDiv > img {
  width: 70%;
  height: auto;
  background-color: white;
  padding: 40px;
  border-radius: 10px;
}

#pictureDiv > img {
  padding: 10px;
  width: 10rem;
}
#pictureDiv {
  padding: 10px 20%;
}

@media (max-width: 850px) {
  #confirm > button {
    font-size: 1.2em;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 220px;
    height: 70px;
    left: 22%;
  }

  input[type="time"] {
    margin-right: 10%;
    width: 25%;
    height: 40px;
    margin-top: 20px;
  }

  #checkYes {
    margin-left: 0px;
  }
}

@media (min-width: 850px) and (max-width: 1100px) {
  #confirm > button {
    width: 320px;
    height: 70px;
  }
  #checkYes {
    margin-left: 5px;
  }

  input[type="time"] {
    margin-left: 5%;
    margin-top: 20px;
    margin-right: 10%;
    width: 30%;
    height: 40px;
  }
}
@media (max-width: 800px) {
  #backList {
    top: 10px;
    left: 30px;
    width: 45px;
    height: 45px;
  }

  #backList > a > img {
    margin: 0 auto;
    margin-top: 6px;
  }
}
</style>