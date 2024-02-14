<?php
    require('config.php');

    
    function getAllUers()
    {
        global $db;
        $sql="SELECT * FROM users";
        
        try{
            $stmt=$db->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e)
        {
            echo('Falid to getAllUsers: '.$e->getMessage());
            die();
        }

        return $result;
    }

?>