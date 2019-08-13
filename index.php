<?php
include_once "dbConfig.php";
session_start();
$user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : 0;
//echo $user_id; exit;
if ($user_id == 0) {
    header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

    </head>
    <style>
        .logout
        {
            font-family: Montserrat;
            float: right;
            margin: 13px 0px;
            font-size: 18px;
            border: 1px solid #203565;
            padding: 2px;
            width: 7%;
            text-align: center;
            list-style: none;
            text-decoration: none;
            color:#203565;
        }




    </style>
    <body>


        <!-- Modal -->
        <div> Welcome
            <p class="logout"> <a href="login.php?logout=1">logout</a> </p>
        </div>
        


    </body>
</html>

