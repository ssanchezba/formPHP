<?php
if (isset($_POST['register'])){
    if (!empty($_POST['name']) && 
    !empty($_POST['email']) && 
    !empty($_POST['direction']) && 
    !empty($_POST['phone']) && 
    !empty($_POST['password']) ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $direction = $_POST['direction'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $fecha = date("d/m/y");
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreplay@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $mensaje = $email . $name . $direction . $phone . $password . $fecha . $header;
        $mail = mail($email, "usuario nuevo", $mensaje);
        if ($mail){
            echo '<h3 class="succes">El correo se ha enviado correctamente</h4>';
        }
    }
}    
?>
