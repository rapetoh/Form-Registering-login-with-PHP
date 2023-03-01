<?php include('header.php') ?>
    <?php include('connect-db.php') ?>
    
<?php 
    $req_recup=$bd->query('SELECT * FROM user');
    $reponse=$req_recup->fetchAll();

        echo"<table style=\" margin: auto; margin-top: 40px; width:550px;\" class=\"table\">
        <thead style=\"\" class=\"table-light\">
            <tr>
                <td>Name</td>
                <td>Surname</td>
                <td>E-mail</td>
                <td>Option</td>
                <td>Option</td>
                </tr>
        </thead>";
        echo"<tbody style=\"color: white; \">";
    foreach($reponse as $user){
        echo"<tr>
                <td>".$user['namee']."</td>
                <td>".$user['surname']."</td>
                <td>".$user['username']."</td>
                <td><a href=\"edit.php?a=".$user['id']."\"><button type=\"button\" class=\"btn btn-light\">EDIT</button></a></td>
                <td><a href=\"#\"><button type=\"button\" class=\"btn btn-outline-danger\">DELETE</button></a></td>

            </tr>";
    }
        echo"</tbody>";
       
        echo"</table>";
?>  
<?php include('footer.php') ?>