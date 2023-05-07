<?php
if(isset($_POST['sender_email'])) {

    // Correo electrónico al que se enviará el mensaje.
    $to = "lucaslaborde.trabajo@gmail.com";

    // Asunto del mensaje.
    $subject = "Mensaje del formulario de contacto";

    // Contenido del mensaje.
    $message = "Nombre: ".$_POST['sender_name']."\r\n";
    $message .= "Email: ".$_POST['sender_email']."\r\n";
    $message .= "Mensaje:\r\n".$_POST['message_content'];

    // Encabezados del correo electrónico.
    $headers = "From: ".$_POST['sender_email']."\r\n";
    $headers .= "Reply-To: ".$_POST['sender_email']."\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();

    // Envía el correo electrónico.
    if(mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>