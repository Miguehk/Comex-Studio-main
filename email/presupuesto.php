<?php 

        $myemail = 'info@comexstudio.com';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $planes = $_POST['plan'];
        $message = $_POST['message'];
        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje del sitio web Comex Studio Presupuestos. 
        \n Nombre: $name \n Correo: $email \n Plan: $planes \n Mensaje: $message";


        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);

        if($name){

            echo "<script> 
        
            alert('Datos Enviados Correctamente'); 
            
            location.href = '../index.html';
            
            </script>";

        }else{

            echo "<script> 

            alert('incorrecto');
            
            </script>";

        }

?>