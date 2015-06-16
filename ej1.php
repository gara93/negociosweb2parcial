<?php
 session_start();



 if(isset($_POST["btnExam"])){
    $registro = array();
    $registro["Nombre"] = $_POST["txtNombre"];

    $registros = array();
    if(isset($_SESSION["registros"])){
      $registros = $_SESSION["registros"];
    }
    $registros[] = $registro;

    $_SESSION["registros"] = $registros;
}


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Segundo parcial</title>
</head>

<body>

    <h1>Llene el siguiente formulario</h1>

    <form action="ej1.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Nombre Completo"/><br/>

<br/>

        <input type="submit" name="btnExam" id="btnExam" value="Registrar" />



  </form>




</body>
</html>
