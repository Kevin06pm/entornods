 <?php

//nameSpace modo
require "core/App.php";
    
$app = new Core\App(); //Crea el enrutador


    /*

    //require "User.php"; //Comprobar usuario sin Controller

    // echo "<h3>Contenido privado</h3>";
    // echo "<h3>Prueba de recuperacion</h3>";

    require_once "Controller.php"; //Importo
    $app = new Controller();//Llamo a la clase
    //url:
    //http://mvc.local?method=[index|show]&id=[id_usuario]
    //http://mvc.locsl?method=insert

    if(isset($_GET["method"])){ //Si este metodo esta estblecido...
        $method = $_GET["method"];

    }else{
        $method = "index";
    }

    try{
        if(method_exists($app,$method)){ //COmprueba si existe un metodo en la clase
            $app -> $method();

        }else{
            throw new Exception();
        }


    }catch (Exception $ex){ 

        http_response_code(404);
        echo "No se ha encontrado el metodo solicitado";
    }

    // var_dump(User::all());
    // echo "<br>";
    // var_dump(User::find(3));

    */

