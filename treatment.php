<?php 
    require_once('connect-db.php');
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $mail=$_POST['username'];
    $passwordd=$_POST['pass'];
    $sqlQuery='INSERT INTO user(username,passw,namee,surname) VALUES (:username, :passw, :namee, :sur)';
    $req_insert=$bd->prepare($sqlQuery);
    $req_insert->execute([
        'username'=>$mail,
        'passw'=>$passwordd,
        'namee'=>$name,
        'sur'=>$surname,
    ]);

?>  