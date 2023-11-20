<?php

//Este user nos va a cobectar a una base de datos

namespace App\Models;

require "../core/Model.php";

//importar
use Core\Model;
use PDO;

class User extends Model//MODEL
{


    // @return devuelve todos los registros de la tabla user de la bbddd
     
    //conQUERY

    public static function all(){ //Recoger todos los datos
        $dbh = User::db();//obtener conexion; -> otra forma es self::db() metodo-estatico
        $sql = "SELECT * FROM users"; //llamar tabla users 
        $statement = $dbh ->query($sql);
        $statement -> setFetchMode(PDO::FETCH_CLASS, User::class);//cargar atriubutos de esa clase 
        $users = $statement -> fetchAll(PDO::FETCH_CLASS); //devuelve un array -> users
        return $users;
        //Devuelvo USERS elena, pedro...

    }//all


    // @return Un usuario en particular de la bbdd
    // @param $id
    public static function find($id){ //Recoger un solo dato especifico

        $dbh = self::db();
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id",$id);
        $statement ->execute();

        $statement ->setFetchMode(PDO::FETCH_CLASS, User::class);//cargar atriubutos de esa clase ///recupera como una clase / y los asigna a la clase user
        //fetch_class = crea automaticamente atributos de mi tabla -> $name, $username ...
        //para acceder a esos atributos, $user = new User() /// $user -> name; $user -> email ....

        //RECUPERANDO

        $user = $statement ->fetch(PDO::FETCH_CLASS); //FETCHALL = devuelve un array(todas las columnas) -> users //FETCH= me devuelve un solo elemento
        
        return $user;
    }//find

    //codigo sql -> solo en Models- USER
    
    public function insert(){ 

        $dbh = self::db();
        $sql = "INSERT INTO users(name,surname,email,birthdate) VALUES(:nombre,:apellidos,:email,:fechnac)";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":nombre", $this->name);
        $statement->bindValue(":apellidos", $this->surname);
        $statement->bindValue(":email", $this->email);
        $statement->bindValue(":fechnac", $this->birthdate);

        return $statement->execute();

    }

    public function save(){
        echo "<br> Actualizando un registro..";

    }

    public function delete(){
        echo "<br> Borrar un registro..";

    }

}//finclass