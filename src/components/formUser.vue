<template>
  <form class="container contForm">
    <div class="mb-2 col-9 rowInput">
      <label for="userWeb" class="form-label">Usuario de plataforma</label>
      <input
        type="text"
        class="form-control"
        id="userWeb"
        name="userWeb"
        aria-describedby="userWeb"
      />
      <div id="userWeb" class="form-text">
        Acuerdate, seguramente sea tu nombre más tu apellido
      </div>
    </div>

    <div class="mb-2 col-9 rowInput">
      <label for="avatar" class="form-label"
        >Seleccione su foto de pérfil</label
      >
      <input class="form-control" type="file" id="avatar" name="avatar" />
    </div>

    <div class="mb-2 col-9 rowInput">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" />
    </div>

    <div class="mb-2 col-9 rowInput">
      <label for="surname" class="form-label">Apellidos</label>
      <input type="surname" class="form-control" id="surname" />
    </div>

    <div class="mb-2 col-9 rowInput">
      <label for="selectWork">Seleccione su Labor en la Empresa</label>
      <select class="form-select" id="selectWork" name="selectWork">
        <option selected>Seleccione su labor en la empresa</option>
        <option>Lorem ipsum</option>
        <option>Ipsum Lorem</option>
        <option>Araen</option>
      </select>
    </div>

    <div class="mb-4 col-9 rowInput">
      <label for="workday" class="form-label">Jornada Laboral</label>
      <br />
      <label for="workday" class="form-control-inline">Hora de Entrada </label>
      <input type="time" class="form-control-inline" id="workday" name="checkInTime" />
      <label for="workday" class="form-control-inline">Hora de Salida </label>
      <input
        type="time"
        class="form-control-inline"
        id="workday"
        name="departureTime"
      />
    </div>

    <div class="mb-4 col-9 rowInput">
      <label for="salary" class="form-label">Salario</label>
      <input type="number" step="10" min="0" class="form-control" id="salary" />

      <div class="form-check form-check-inline mt-4 firstCheck">
        <input
          class="form-check-input"
          type="radio"
          name="workShift"
          id="anual"
          checked
        />
        <label class="form-check-label" for="anual"> Anual </label>
      </div>

      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="workShift"
          id="salTime"
          checked
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

    <div class="mb-2 col-9 form-check">
      <input
        type="checkbox"
        class="form-check-input"
        id="agreeRead"
        name="agreeRead"
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
  float: left;
  width: 35%;
}

#confirm {
  margin: 0 auto;
  padding-bottom: 100px;
}

.firstCheck {
  margin-left: 8px;
}

button[type="submit"] {
  font-size: 18px;
  padding-top: 23px;
  padding-bottom: 43px;
  background-color: rgb(235, 162, 67);
  border: 2px solid rgb(242, 219, 184);
  transition: 1s ease-out;
}

button[type="submit"]:hover {
  padding-top: 25px;
  padding-bottom: 45px;
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

label[for=workday]:nth-child(3), label[for=workday]:nth-child(5){
    font-size: 18px;
    padding: 15px;
}

label[for=workday]:nth-child(3){
 margin-left: -2%;
}

input[type=time]{
  margin-right: 4%;
  width: 22%;
  height: 40px;
}
</style>