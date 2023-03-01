<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="newForm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Fredericka+the+Great&family=Orbitron:wght@400;500;600;700;800;900&family=Rubik+Vinyl&display=swap');
</style>
    <title>RX's form</title>
</head>
<body class="animated-bg">
<style>
#ook{
    color: #edeeee;
    width: 400px;
    margin: auto;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.navbar{
    border-radius: 20px;
    width: 70%;
    margin: auto;
    margin-top: 20px;
}
.box{
    display: flex;
    justify-content: center;
}
input{
    border: none;
    background: transparent;
    border-bottom: 3px solid white;
    color: white;
    text-align: center;
}
input::placeholder{
    color: rgb(217, 217, 217);
    text-align: center;
}
.form{
    text-align: center;
    max-width: 600px;
    border: 2px white solid;
    border-radius: 200px;
    margin: 170px;
    padding: 70px;
    box-shadow: 0px 0px 20px 20px white;
    
}
.animated-bg{
    background: linear-gradient(150deg, #ffffff,#0e0e0f, #edeeee);
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
.password:valid{
    border-bottom: 2px solid green ;
}
.password:invalid{
    border-bottom: 2px solid red ;
}
</style>

<nav class="navbar bg-body-tertiary navv">
  <div class="container">
    <a style="padding-left: 40px;" class="navbar-brand" href="newFormConn.PHP">
        Connection
    </a>
    <a class="navbar-brand" href="Acceuil.php">
      <img src="img/chef-dequipe.png" alt="" width="30" height="24">
    </a>
    <a style="padding-right: 40px;" class="navbar-brand" href="newFormInsc.php">
        Inscription
    </a>
  </div>
</nav>


