<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="css/newform.css"></head>
    <body class="bgbody">

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="header">Login</div>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                <!--Not yet a member? <a href="register.php">Sign up</a>-->
            </p>
        </form>
    </body>
</html>
