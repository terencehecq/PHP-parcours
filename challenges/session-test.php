<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get sessions info</title>
</head>
<body style="margin:30px 10%; font-family:helvetica;">


    <h1 style="text-align:center;">Display session info</h1>

    <p><strong>Name : </strong><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];?></p>
    <p><strong>Age : </strong><?php echo $_SESSION['age'] ?></p>

    <a href="global-var.php"><< Back to home page</a>

    <h2>Show cookie information</h2>


    <p>Username : <?php echo $_COOKIE['user'];?></p>
    <p>Password : <?php echo $_COOKIE['password'];?></p>
    
</body>
</html>