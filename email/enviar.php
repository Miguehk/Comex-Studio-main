<?php 

        $myemail = 'info@comexstudio.com';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $subjet = $_POST['subjet'];
        $message = $_POST['message'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje del sitio web Comex Studio. \n Nombre: $name \n Correo: $email \n Asunto: $subjet \n Mensaje: \n $message";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);

        if($name){

            echo "<script> 
        
            alert('Datos Enviados Correctamente'); 
            
            location.href = '../contact.html';
            
            </script>";

        }else{

            echo "<script> 

            alert('incorrecto');
            
            </script>";

        }

?>