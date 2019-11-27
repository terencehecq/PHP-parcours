<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drill php</title>
</head>
<body>

<h1>Exercices de Drill PHP</h1>
<h2>1.1. Clean the room</h2>

<?php 
    $room_is_filthy = true;


    if( $room_is_filthy == true ){
        echo "Yuk, Room is dirty : let's clean it up !";
        // cleanup_room();
        echo "<br>Room is now clean!";
        $room_is_filthy = false;
    } else {
        echo "<br>Nothing to do, room is neat.";
    };
?>

<h2>1.2. Clean the room 2</h2>

<?php

    $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
    $room_filthiness = $possible_states[3];

    if ($room_filthiness == "health hazard"){
        echo "How can you sleep here???? Clean this mess up !";
    }elseif ($room_filthiness == "filthy"){
        echo "That stinks here ! Clean your room up !";
    }elseif ($room_filthiness == "dirty"){
        echo "Nearly clean... But still work to do !";
    }elseif ($room_filthiness == "clean"){
        echo "Nearly perfect, but could still be better !";
    }else{
        echo "That's what I call a bedroom ! :D";
    };
?>

<h2>2. Display Greetings</h2>

<?php 

date_default_timezone_set("Europe/Brussels");
$time = date('Hi');
$hour = date('H');
$mins = date('i');

if($time >= 500 AND $time <= 900){
    echo "Good morning ! It's $hour : $mins";
}else if($time > 900 AND $time <=1200){
    echo "Good day ! It's $hour : $mins";
}else if($time > 1200 AND $time <=1600){
    echo "Good afternoon ! It's $hour : $mins";
}else if($time > 1600 AND $time <=2100){
    echo "Good evening ! It's $hour : $mins";
}else{
    echo "Good night ! It's $hour : $mins";
};
?>

    
</body>
</html>