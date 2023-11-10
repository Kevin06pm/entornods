<?php


/*
http://mvc.local?method=[index|show]&id=[id_usuario]
http://mvc.local/index.php?url=user/index


La peticion get:
http://mvc.local/controlador/metodo/arg1/arg
http://mvc.local/user/show/1

/user/show/1/ -> user/Show/1 (trim) -> [user,show,1] (explode)
// user -> UserController ; (ucword
*/


class App
{
    function __construct() 
    {
        // TRANSFORMACION PARA EL CONTROLADOR
        isset($_GET["url"]) ? $url = $_GET["url"] : $url = "home";

        //opcion2
        /*$url = isset($_GET["url"])? $_GET["url"] : "home";*/
        $arguments = explode('/',trim($url,'/'));

        //////////////////////////////////////////////////////////////////////

        // OBTENER CONTROLADOR

        $controllerName = array_shift($arguments); //ser | product | home..
                                                  //UserController . ProductController
        $controllerName = ucwords($controllerName) . "Controller"; 
        

        ////////////////////////////////////////////////////////////////////

        // TRANSFORMACION PARA EL METODO
        count($arguments) ? $method = array_shift($arguments) : $method = "index";
    
        
        /////////////////////////////////////////////////////////////////////

        //IMPORTAR EL CONTROLADOR
        $file = "../app/Controllers/$controllerName" . ".php";
        if(file_exists($file)){ //file_Exists -> existe fichero importado
            require "$file";        
        }else{
        
            http_response_code(404);
            echo "Recurso no encontrado";
            die();
        }

        //CREAR INSTANCIA DEL CONTROLADOR Y LLAMAR AL METODO
        $controllerObject = new $controllerName;
        //verificar si existe el metood de la peticion en la clase/controlador
        if(method_exists($controllerObject, $method)){
            //invocarlo
            $controllerObject -> $method($arguments);
        }else{
            http_response_code(404);
            echo "Funcion no encontrada";
            die();
        }



    }//Fin de constructor

}//Fin clase
