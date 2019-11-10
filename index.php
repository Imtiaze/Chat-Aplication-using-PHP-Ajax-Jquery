<?php

include('database_connection.php');

session_start();

if (! isset($_SESSION['user_id'])) 
{
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <div class="container">
        <br>
        
        <h3 align="center">Chat Application using PHP ajax Jquery</h3>

        <br>

        <div class="table-responsive">
            <H4 align="center">Online User</H4>
            <p align='right'>Hi - <?php echo $_SESSION['username']; ?> - <a href="logout.php">Logout</a> </p>
        </div>

    </div>
</body>
</html>