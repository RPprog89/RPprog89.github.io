<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(mail('rivasrp.prog@gmail.com', $name, $message)) {
        echo "Correo enviado";
    } else {
        echo "Correo no enviado";
    }
?>