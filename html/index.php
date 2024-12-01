<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
        <header>
            <div class="brandLogo">
                <a href="../html/home.php" class="logo-container">
                    <figure>
                        <img src="../images/logoM.png" alt="logo" width="40px" height="40px">
                    </figure>
                    <span>ETHIO GAMES</span>
                </a>
            </div>
        </header>

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        
        <div class="signup">
            <form action="../html/register.php" method="post">
                <label for="chk" aria-hidden="true">SIGN UP</label>

                <?php if(isset($_GET['error'])){ ?>

                    <p id = "msg"><?php echo $_GET['error']; ?> </p>
                <?php } ?>

                <input type="text" name="fname" placeholder="FirstName" required>
                <input type="text" name="lname" placeholder="lastName" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pswd" placeholder="Password" required>
                <input type="password" name="cpswd" placeholder="Confirm Password" required>
                <button type="submit" name = "signup">Sign up</button>
            </form>
        </div>
        
        <div class="login">
            <form action="../html/register.php" method="post">
                <label for="chk" aria-hidden="true">LOG IN</label>
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="pswd" placeholder="Password" required>
                <button type="submit" name="login">Log in</button>
            </form>
        </div>
    </div>
</body>

<style>
    #msg{
    background-color:red;
    color: #fff;
    padding: 10px;
    width: 60%;
    border-radius: 5px;
    text-align:center;
    margin:auto;
    margin-top:-50px;
}

input{
    margin: 13px auto;
}
</style>

<script>


let msg = document.getElementById("msg");

if(msg.textContent == "Succesfully Registered!"){

    msg.backGroundColor = "green";



}

</script>

<?php

define("Mysite" , true);
?>
</html>
