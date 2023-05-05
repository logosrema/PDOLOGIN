<?php

class Connection {

protected function Dblink(){
    try{
        $dbn = "mysql:host=localhost;dbname=delivery";
        $db  = new PDO($dbn,"root","");
        return $db;
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo $error;
    }

    
}


    }
    // $object = new Connection;
    // $object -> Dbconection();

 