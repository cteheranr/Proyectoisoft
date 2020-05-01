<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/seccion.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<h1 class="title">Hola cteheranr</h1>
        <div >
          <h3>Tipo de lenceria</h3>
          <select class="custom-select">
            <option selected>Escoje una opción</option>
            <option value="1">Toalla</option>
            <option value="2">Sabana</option>
            <option value="3">Cobija</option>
            <option value="4">Fundas</option>
          </select>
        </div>

        <div class="">
          <h3>&nbsp</h3>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad</h5>
              <input type="text" class="input">
           </div>
        </div>

        <div class="option">
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Movimiento</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Enviar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Recibir
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
        </div>

        <input type="submit" class="btn" value="Registrar">
      </form>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
