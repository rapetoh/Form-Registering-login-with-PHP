<?php session_start();?>
<?php include('header.php') ?>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
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
}

?>  
<?php
    $id=$_GET['a'];
    $_SESSION['id']=$id;
    require_once('connect-db.php');
    $req='SELECT `username`, `namee`, `surname` FROM `user` WHERE id=:idd';
    $req_prep=$bd->prepare($req);
    $req_prep->execute([
        'idd'=>$id
    ]);
    $res=$req_prep->fetchAll();

?>
<div id="ook">
    <form style="margin-top: 40px;" action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
           <?php echo'<input name="editN" type="text" value="'.$res[0]['namee'].'" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">';?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Surname</label>
            <?php echo'<input name="editS" type="text" value="'.$res[0]['surname'].'" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">';?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <?php echo'<input name="editU" type="email" value="'.$res[0]['username'].'" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">';?>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-light">Submit</button>
        </div>
    </form>
    
</div>














<?php include('footer.php') ?>