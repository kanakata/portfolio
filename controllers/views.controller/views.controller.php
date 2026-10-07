<?php

class Views_controller{
    public static function view(){
        $folder = "/templates/views/";
        $extension = ".php";
        $file = parse_url($_SERVER['REQUEST_URI'])['path'];
        $allowed_pages = [
            "/",
            "/about",
            "/contact",
            "/landing",
            "/projects",
            "/skills",
        ];

        if(in_array($file , $allowed_pages)){
            if($file == "/"){
                $path = $folder . "landing" . $extension;
                return[
                    require_once ROOT . "/require/require.header.php",
                    require_once ROOT . $path,
                    require_once ROOT . "/require/require.footer.php",
                ];
            }else{
                $path = $folder . $file . $extension;
                return[
                    // require_once ROOT . "/require/require.header.specific.php",
                    require_once ROOT . "/require/require.header.php",
                    require_once ROOT . $path,
                    require_once ROOT . "/require/require.footer.php",
                ];
            }
        }else{
            return require_once ROOT . "/public/404.php";
        }
        
    }
}