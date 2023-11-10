<?php

    require "../bdcon.php";
    //datasourcename -> dsn : driver + host; dbname
    
    //mysql , PDO


    echo "<h1>Base de datos en PHP</h1>";
    // print_r (PDO::getAvailableDrivers());

    try{
        $dbh = new PDO(DSN, USERNAME, PASSWORD);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM city";

        // //FORMA 1: QUERY
        // $registers = $dbh -> query($sql);
        // foreach($registers as $row){
        //     echo "Id : " . $row["ID"];
        //     echo "Nombre" . $row["Name"];
        //     echo "Distrito" . $row["District"];
        //     echo "Poblacion" . $row["Population"];
        //     echo "<br>";
        // }

    //FORMA 2: PREPARE + EXECUTE
    $stmnt = $dbh -> prepare($sql);
    $stmnt -> execute();        
    
    //Recoger los resultados:
    // OPCION A: fetchALL como un array asociativo
    
    // $registers =$stmnt -> fetchAll(PDO::FETCH_ASSOC);
    // foreach($registers as $row){
    //     echo "Id : " . $row["ID"];
    //     echo "Nombre" . $row["Name"];
    //     echo "Distrito" . $row["District"];
    //     echo "Poblacion" . $row["Population"];
    //     echo "<br>";
    // }

    // OPCION B: fetchALL como una objeto

    $registers = $stmnt -> fetchAll(PDO::FETCH_OBJ);
    foreach($registers as $row){
            echo "Id : " . $row -> ID;
            echo "Nombre" . $row -> Name;
            echo "Distrito" . $row -> District;
            echo "Poblacion" . $row -> Population;
            echo "<br>";
        }
    


    //CREAR UNA BASE DE DATOS DE NOMBRE "TESTCLIENT"
    //CREAR UNA TABLA "CLIENTS" CON 
        //ID -> AUTOINCREMENTAL (PRIMARY KEY)
        //NAME
        //ADRESS
        //AGE
        //TELEPHONE

        //CREAR 10 FILAS EN LA TABLA


        //RECUPERAR LA INFORMACION DE LA TABLA  
        //MOSTRAR EL NUMERO DE LAS FILAS DEVUELTAS POR LA CONSULTA DE RECUPERACION

        //INSERTAR UNA FILA -> AVERIGUAR EL ULTIMO ID INSERTADO EN LA BBDD

    } catch (Exception $ex){
        //throw $th:
        echo "Fallo en la conexion ; " . $ex->getMessage();
        
    }finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }