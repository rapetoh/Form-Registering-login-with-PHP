<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="newForm.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Fredericka+the+Great&family=Orbitron:wght@400;500;600;700;800;900&family=Rubik+Vinyl&display=swap');
</style>
    <title>RX's form</title>
</head>
<body class="animated-bg">



<?php include_once('treatment.php') ?>

<nav class="navbar bg-body-tertiary navv">
  <div class="container">
    <a style="padding-left: 40px;" class="navbar-brand" href="newFormConn.PHP">
        Connection
    </a>
    <a class="navbar-brand" href="#">
      <img src="img/chef-dequipe.png" alt="" width="30" height="24">
    </a>
    <a style="padding-right: 40px;" class="navbar-brand" href="#">
        Inscription
    </a>
  </div>
</nav>


<div style="display: flex; justify-content: center; padding-top: 220px;"><img src="img/coche.png" width="100px" alt=""></div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    function validatePasswords() {
        var password = document.getElementsByName("pass").value;
        var confirm_password = document.getElementsByName("passconf").value;
        if (password != confirm_password) {
        alert("Les mots de passe ne correspondent pas");
        return false;
        }
        return true;
    }
</script>
</body>
</html>