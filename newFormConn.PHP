<?php include('header.php') ?>
<div class="box">
    <div class="form">
        <h2 style="color: white;" >Login</h2>
        <br>
        <br>
        <form action="conn-bd-données.php" method="post">
            <div class="form-group">
                <input type="email" name="username" placeholder="mail" required>
                
            </div>
            <br>
            <div class="form-group">
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <br>
            <input type="Submit" style="background-color: #ffffff; width: 140px; color:gray; border-radius: 10px;" value="connection">
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
<?php include('footer.php') ?>