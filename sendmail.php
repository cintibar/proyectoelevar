<?php
    require("_lib/class.phpmailer.php");
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.elevar.net.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
    $mail->SMTPAuth = true;        
    $mail->Username = "info@elevar.net.ar"; // Correo completo a utilizar
    $mail->Password = "Gustavoadolfo14"; // Contraseña
    $mail->Port = 25; // Puerto a utilizar
    $mail->From = "info@elevar.net.ar"; // Desde donde enviamos (Para mostrar)
    $mail->FromName = $_POST['name'];
    $mail->AddAddress("info@elevar.net.ar"); // Esta es la dirección a donde enviamos    
    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "Formulario de Contacto ELEVAR"; // Este es el titulo del email.   
    $mail->Body = "Telefono de contacto: " .$_POST['tel'] . " - Email de contacto: " .$_POST['email'] . " - Mensaje: " . $_POST['message']; // Mensaje a enviar    
    $exito = $mail->Send(); // Envía el correo.

    if($exito){
        echo "OK";
    }else{
        echo "ERROR";
    }
?>