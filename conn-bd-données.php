<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newForm.css">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background: linear-gradient(150deg, #ffffff,#101012, #edeeee);
            background-size: 400% 400%;
            animation: animate-back 40s infinite ease-in-out;
        }
        @keyframes animate-back{
            0%{
                background-position: 0 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0 50%;
            }
                }
    </style>
    <?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once('connect-db.php');
            $his_mail=$_POST['username'];
            $his_password=$_POST['pass'];
            $req_recup=$bd->query('SELECT * FROM user');
            $reponse=$req_recup->fetchAll();
            $tab_long=count($reponse);
            echo '<pre>';
            print_r($reponse);
            echo '</pre>';
            for ($i=0;$i<$tab_long;$i++){
                if ($his_mail==$reponse[$i]['username']){
                    $find_i=$i;
                    if ($his_password==$reponse[$find_i]['passw']){
                        echo'<h1 style="color:white; display: flex; justify-content: center; padding-top: 295px;" > Bienvenue '.$reponse[$find_i]['namee'].' '.$reponse[$find_i]['surname'].'!</h1>';
                    }
                }
            }
    }

    ?>
</body>
</html>
