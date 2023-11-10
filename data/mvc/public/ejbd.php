<?php

    require "../bdcon_testclients.php";
    //datasourcename -> dsn : driver + host; dbname
    
    //mysql , PDO


    echo "<h1>Base de datos en PHP</h1>";
    // print_r (PDO::getAvailableDrivers());

    try{
        $dbh = new PDO(DSN, USERNAME, PASSWORD);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // $sql = "SELECT * FROM city";

        $sql = "SELECT * FROM $table";
        $sql = "INSERT INTO $table VALUES(null, 'Pepito', 'Calle Coso', 34, ''"; //Insertar una fila en la tabña


    //FORMA1: QUERY
    
        // $registers = $dbh -> query($sql);
        // foreach($registers as $row){
        //     echo "Id : " . $row["ID"];
        //     echo "Nombre: " . $row["Name"];
        //     echo "Direccion: " . $row["Adress"];
        //     echo "Edad: " . $row["Age"];
        //     echo "Telefono: " . $row["Telephone"];
        //     echo "<br>";
        // }
        

    //FORMA 2: PREPARE + EXECUTE
    $stmnt = $dbh -> prepare($sql2);
    $stmnt -> execute();   
    echo "Ultimo id: " .  $dbh->lastInsertId(); //ULTIMO ID
    
    
    $registers = $stmnt -> fetchAll(PDO::FETCH_OBJ);
    foreach($registers as $row){
            echo "Id : " . $row -> ID;
            echo "Nombre" . $row -> Name;
            echo "Direccion" . $row -> Adress;
            echo "Edad" . $row -> Age;
            echo "Telefono" . $row -> Telephone;
            echo "<br>";
        }

        echo "Número de filas: " . $registers -> rowCount(); //Numero de filas

        
    


    
    } catch (Exception $ex){
        //throw $th:
        echo "Fallo en la conexion ; " . $ex->getMessage();
        
    }finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }