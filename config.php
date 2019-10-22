<?php
    session_start();
   
    include "vendor/autoload.php";

    $gClient= new Google_Client();
    $gClient->setClientId("1035873772427-ij73u8lf0a7lgdvhv9jru0rrjd52322f.apps.googleusercontent.com"); //enter google client id
    $gClient->setClientSecret("NNUHqXDMyihQAGVPg0wyoGVF"); //Enter your google secret key
    $gClient->setApplicationName("My Login");
    $gClient->setRedirectUri("http://localhost/googleLoginApiPhp/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


?>