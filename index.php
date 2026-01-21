<?php
// session_start();
require_once "Model/database/database.php";
require_once "Model/Services/Users.php";
require_once "contreler/AuthConection.php";

switch($_SERVER['REQUEST_URI']){
   
    case "/register":
        $auth = new AuthConection();
        $auth->register();
        //var_dump($auth);
        break;

    case "/login":
        // echo "page login";
            $auth =new AuthConection();
            $auth->login();
            //  echo "<pre>";
        
             //var_dump($auth->login());
            //  echo "</pre>";
            // print_r($auth->login());
             var_dump($auth);
             break;
    case "/client":
        echo "hello client";
        require_once "views/client.php";
        break;

    case "/admin":
        echo "hello admin";
        require_once "views/admin.php";
        break;



}

