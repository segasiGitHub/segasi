<?php

//Configuracion de la conexion a base de datos
  $servername = $_SERVER['SEGASI_DB_HOST'];
  $username   = $_SERVER['SEGASI_DB_USER'];
  $password   = $_SERVER['SEGASI_DB_PASS'];
  $dbname     = $_SERVER['SEGASI_DB_NAME'];

 if (isset($_POST['name'],$_POST['phone'],$_POST['mail'],$_POST['message'])) {

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['mail'];
    $message=$_POST['message'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    $sql = "Insert into contacto (name, phone, mail, message) values ('$name','$phone','$email','$message')";

    if ($conn->query($sql) === TRUE) {
      echo '"<div style="padding:20px; background-color:teal">Mensaje enviado correctamente, en breve nos contactaremos con Usted.</div>"';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>