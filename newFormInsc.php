<?php include('header.php'); ?>

<div class="box">
    <div class="form">
        <h2 style="color: white;" >Login</h2>
        <br>
        <br>
        <form action="finInscription.php" method="post" onclick="return validatePasswords()">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" required>
                
            </div>
            <br>
            <div class="form-group">
                <input type="text" name="surname" placeholder="Surname" required>
                
            </div>
            <br>
            <div class="form-group">
                <input type="email" name="username" placeholder="mail" required>
                
            </div>
            <br>
            <div class="form-group">
                <input class="password" type="password" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une lettre majuscule et une lettre minuscule, et avoir au moins 8 caractères" required>
            </div>
            <br>
            <div class="form-group">
                <input class="password" type="password" name="passconf" placeholder="Password confirmation" required>
            </div>
            <br>
            <input  type="Submit" style="background-color: #ffffff; width: 140px; color:gray; border-radius: 10px;" value="connection">
            <br>
            <br>
            <div class="liens">
                <a href="">Password forgotten?</a>
                <a href="">Sign in</a>
            </div>
            <br>
            
        </form>
        
    </div>
</div>
<?php include('footer.php');?>

