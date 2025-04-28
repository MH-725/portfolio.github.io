<?php

    if(isset($_POST['btn-submit'])){
        $UserName = $_POST['Name'];
        $Email = $_POST['Email'];
        $Msg = $_POST['Message'];

        if(empty($UserName) || empty($Email) || empty($Msg)){
            header('location:index.html?error');
        }else{
            $to = "admin@onlineittuts.com";

            if(mail($to,$Msg,$Email)){
                header("location:index.php?success");
            }
        }
    }
    else{
        header("location:index.html");
    }



?>