<?php
    $dbn="mysql:host=localhost;dbname=phy";
    $user="root";
    $pass="";

    try{
        $db=new PDO($dbn,$user,$pass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo('Flaid to connect with the data base, '.$e->getMessage());
    }

?>