<template>
  <form class="container contForm">
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
      <div id="userWeb" class="form-text">
        Acuerdate, seguramente sea tu nombre más tu apellido
      </div>
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="avatar" class="form-label"
        >Seleccione su foto de pérfil</label
      >
      <input
        class="form-control"
        type="file"
        id="avatar"
        name="avatar"
        required
      />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" required />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="surname" class="form-label">Apellidos</label>
      <input type="surname" class="form-control" id="surname" required />
    </div>

    <div class="mb-2 col-md-7 col-xs-12 rowInput">
      <label for="selectWork">Seleccione su Labor en la Empresa</label>
      <select class="form-select" id="selectWork" name="selectWork" required>
        <option selected>Seleccione su labor en la empresa</option>
        <option>Lorem ipsum</option>
        <option>Ipsum Lorem</option>
        <option>Araen</option>
      </select>
    </div>

    <div class="mb-4 col-md-7 col-xs-12 rowInput">
      <label for="workday" class="form-label">Jornada Laboral</label>
      <div id="checkingInp">
        <label for="workday" class="form-control-inline"
          >Hora de Entrada
        </label>
        <input
          type="time"
          class="form-control-inline"
          id="workday"
          name="checkInTime"
          required
        />
        <label for="workday" class="form-control-inline">Hora de Salida </label>
        <input
          type="time"
          class="form-control-inline"
          id="workday"
          name="departureTime"
          required
        />
      </div>
    </div>

    <div class="mb-4 col-md-7 col-xs-12 rowInput">
      <label for="salary" class="form-label">Salario</label>
      <input
        type="number"
        step="10"
        min="0"
        class="form-control"
        id="salary"
        required
      />

      <div class="form-check form-check-inline mt-4 firstCheck">
        <input
          class="form-check-input"
          type="radio"
          name="workShift"
          id="month"
          checked
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
      <label for="moreInf" class="form-label"
        >Cualquiera apreciación que se quiera dar del empleado</label
      >
      <textarea
        class="form-control"
        id="moreInf"
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
      <label class="form-check-label" for="agreeRead"
        >HE LEÍDO Y ACEPTO LOS TÉRMINOS LOS TÉRMINOS Y CONDICIOONES DE LA PÁGINA
        WEB</label
      >
    </div>

    <div class="mb-2 col-8 form-check" id="confirm">
      <button type="submit" class="btn btn-primary">Confirmar Empleado</button>
    </div>
  </form>
</template>

<script>
export default {
  name: "form-user",
};
</script>

<style>
.contForm {
  text-align: left;
  background-color: #eca51fa5;
  padding: 70px;
  padding-top: 40px;
  padding-left: 8%;
  border-radius: 30px;
}
form > .rowInput {
  background-color: #e8ac3ca5;
  padding: 3%;
  padding-right: 15%;
  border-radius: 5px;
}

form {
  margin-top: 60px;
  margin-bottom: 200px;
}

.form-check {
  margin-left: 40px;
}

#confirm > button {
  position: absolute;
  margin-top: 50px;
}

#confirm {
  margin: 0 auto;
  padding-bottom: 100px;
}

.firstCheck {
  margin-left: 8px;
}

button[type="submit"] {
  width: 25%;
  left: 35%;
  font-size: 22px;
  padding-top: 13px;
  height: 1px;
  padding-bottom: 48px;
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
  font-size: 22px;
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

@media (max-width: 850px) {
  #confirm > button {
    padding-top: 10px;
    padding-bottom: 10px;
    width: 290px;
    height: 70px;
    left: 20%;
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
</style>