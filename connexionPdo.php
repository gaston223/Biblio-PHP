<?php
    $hostnom ='host=localhost';
    $usernom ='root';
    $password ='';
    $bdd = 'biblio';

    try{
        $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);

        //Message d'erreur à enlever en PROD
        $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
        $monPdo = null;
    }
?>