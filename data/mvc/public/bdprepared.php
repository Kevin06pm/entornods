<?php

    require "../bdcon.php";
//datasourcename -> dsn : driver + host; dbname
    
//mysql , PDO


    echo "<h2>BBDD Sentencias</h2>";

    echo "<br>constante: " . TABLACLIENTES;



    /*
        1- Preparar la sentecnia -> prepare:
            - named placeholder : :nomvariable
            - questions mark placeholder :?
        
        2- VIncular valores a las variables
            - bindParam
            - bindValue
        
        3- Ejecutar la sentencia -> execute

    */ 

    
    try {

        $dbh = new PDO(DSN2, USERNAME, PASSWORD);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        ////////////////////////////////////////////////

        //FORMA A: NAMED PLACEHOLDER
        $sql = "INSERT INTO " .TABLACLIENTES. "(ID, Name, Address, Age, Telephone,Fecha) 
            VALUES(:id,:nombre,:direccion,:edad,:telefono,:fecha)"; //Se añadio fecha


        //FORMA B: NAMED PLACEHOLDER
        $sql2= "INSERT INTO " . TABLACLIENTES. "(ID, Name, Address, Age, Telephone, Fecha)
                VALUES(?,?,?,?,?,?)"; //Se añadio fecha ?

        $statement = $dbh -> prepare($sql2);

        ////////////////////////////////////////////////

        //OPCION 1: bindParam -> variables es una referencia.
        // Son valores que recojo $_POST , $_GET , $_COOKIE

        $id = null;
        $nombre = "Arthur";
        $direccion = "The beggind after the end";
        $edad = "67";
        $telefono = "675925427";
        $fecha = 5/10/2023;

        /*
        $statement -> bindParam(":id", $id); //EL ORDE ES INDIFERENTE
        $statement -> bindParam(":nombre", $nombre);
        $statement -> bindParam(":direccion", $direccion);
        $statement -> bindParam(":edad", $edad);
        $statement -> bindParam(":telefono", $telefono); */

        
        //OPCION 2: bindValue -> asocio los valores //SI HAY DOS VALORES COMO EN ESTE CASO LA EDAD, SE PONDRA LAS PRIMERA EDAD

        /*
        $statement -> bindValue(":id", $id); //EL ORDE ES INDIFERENTE
        $statement -> bindValue(":nombre", $nombre);
        $statement -> bindValue(":direccion", $direccion);
        $statement -> bindValue(":edad", $edad);
        $statement -> bindValue(":telefono", $telefono);
        //Ejecutar la sentencia
        $edad = 64;
        $statement -> execute();

        */


        
        //con QUESTION MARK PLACEHOLDE (IMPORTA EL ORDEN)

        /*
        $statement -> bindParam(1, $id);
        $statement -> bindParam(2, $nombre);
        $statement -> bindParam(3, $direccion);
        $statement -> bindParam(4, $edad);
        $statement -> bindParam(5, $telefono);

        $nombre = "Alfredo"; */

        //BINDVALUE SE QUEDA EL PRIMERO VALOR QUE HAYA ENTRE DOS IGUALES
        $statement -> bindValue(1, $id); //EL ORDE ES INDIFERENTE
        $statement -> bindValue(2, $nombre);
        $statement -> bindValue(3, $direccion);
        $statement -> bindValue(4, $edad);
        $statement -> bindValue(5, $telefono);
        $statement -> bindValue(6, $fecha);
        //Ejecutar la sentencia
        // $direccion = "Calle 100";

        $statement -> execute();

        echo "<h4>Inserccion correcta!!</h4>";


        

        /*
        
        Sobre la tabla clients:

            Añadir una columna a la tabla Fecha

            insettar 5 filas con bindParam
            insertar 5 filas con bindValue

            Los datos a insertar se recogeran de un formulario que se realizar 
            y rellenar con los datos.

            El formato a insertar en la fecha -> 5/10/2023 
            (Parsear la fecha insertada (cambiar el dato para que sea igual al formato de esa fecha))
        
        */




    } catch (Exception $ex){
        //throw $th:
        echo "Fallo en la conexion ; " . $ex->getMessage();
        
    }finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }

    ?>