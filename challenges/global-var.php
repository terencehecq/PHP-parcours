
<?php 
session_start();
setcookie("user", $username);
setcookie("password", $password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global variables</title>
</head>
<body style="margin:30px 10%; font-family:helvetica;">

<?php
    function sanitize( $input ){
        return strip_tags( trim( $input) );
    };

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip_adress = $_SERVER['REMOTE_ADDR'];
    $server_name = $_SERVER['SERVER_NAME'];

    $_SESSION['firstname'] = "Térence";
    $_SESSION['lastname'] = "HECQ";
    $_SESSION['age'] = 23;

    if (isset($_POST['user']) and isset($_POST['password'])){
        $_COOKIE['user'] = sanitize($_POST['user']);
        $_COOKIE['password'] = sanitize($_POST['password']);
        $username = $_COOKIE['user'];
        $password = $_COOKIE['password'];
    };
?>
    
<h1 style="text-align:center;">Exercises : Global variables</h1>

<h2>Informations</h2>

<p><strong>Your user agent :</strong> <?php echo $user_agent;?></p>
<p><strong>Your IP address :</strong> <?php echo $ip_adress;?></p>
<p><strong>Your server name :</strong> <?php echo $server_name;?></p>

<a href="session-test.php">See you on the other page >></a>

<h2>3. Set username & password in cookie</h2>

<form action="global-var.php" method="post">
    <label for="user">Username :</label>
    <input type="text" name="user">

    <label for="password">Password : </label>
    <input type="password" name="password">

    <input type="submit" value="Log in">
</form>

<p>Display the cookie : <?php print_r($_COOKIE)?></p>


</body>
</html>