<?php session_start() ?>
<?php 
    require_once('connect-db.php');
    $name=$_POST['editN'];
    $surname=$_POST['editS'];
    $mail=$_POST['editU'];
    $sqlQuery='UPDATE user SET username=:email,namee=:nom,surname=:surnom WHERE id=:id';
    $req_insert=$bd->prepare($sqlQuery);
    $req_insert->execute([
        'email'=>$mail,
        'nom'=>$name,
        'surnom'=>$surname,
        'id'=>$_SESSION['id'],
    ]);

?>  