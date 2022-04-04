<?php 

    function rotasURL(){
        if(isset($_GET["action"])){
            $url = $_GET["action"] ? $_GET["action"] : "Home";
        }else{
            $url = "home";
        }

        switch ($url){
            case 'home':
                $Titulo = "Home | Soethe";
                include_once 'view/Home.php';
                
            break;
            case 'comunidade':
                $Titulo = "Comunidade | Soethe";
                include_once 'view/Comunidade.php';
                
            break;
            default;
                $Titulo = "404 | Soethe";
                include_once 'view/Error404.php';
            break;
        }
    }