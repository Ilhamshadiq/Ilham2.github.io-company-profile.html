<?php

    if( isset($_POST ["email"]) || isset($_POST["Passowrd"])) {
        
        $email = $_POST ["email"];
        $db_password = $_POST['password'];
        
        if($email == 'ilham@admin.com' && $db_password == 'admin'){
            header(header: 'location: ./../dasboard.php');
        }
        else 
            echo"email atau password yang anda masukkan salah";
            
    }


?>
