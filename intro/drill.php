<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drill php</title>
</head>
<body style="margin:40px;">

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

<h2>2. Display Greetings according to time</h2>

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

<h2>3. & 4. Display greetings according to age, gender & language</h2>

<h4 style ="margin:10px"> <!-- starting <p> -->
    <?php 

    $language = $_GET['language'];
    $gender = $_GET['gender'];
    $age = $_GET['age'];

    //Setting greeting into <p>
    if(isset($language)){
        if($language == "yes"){
            echo "Hello ";
        }else{
            echo "Aloha ";
        }
    };

    //Setting gender into <p>
    if(isset($gender)){ 
        if($gender == "M"){
            echo "mister ";
        }else{
            echo "miss ";
        }
    };

    // Setting age into <p>
    if (isset($age)){ 
        if($age < 12){
            echo "kiddo !";
        }else if($age >= 12 and $age < 18){
            echo "teenager !";
        }else if($age >= 18 and $age < 115){
            echo "adult !";
        }else if ($age>=115){
            echo "... wow, still alive??";
        }else{
            echo "";
        };
    };?>
</h4> <!-- finish <p> here -->


<form method="get" action="">
    <div style ="margin:10px">
        <label for="language">Do you speak English? </label>

        <input type="radio" name="language" value="yes">
        <label for="yes">Yes</label>

        <input type="radio" name="language" value="no">
        <label for="no">No</label>
    </div>

    <div style ="margin:10px">
        <label for="gender">Select you gender : </label>

        <input type="radio" name="gender" value="M">
        <label for="male">Male</label>

        <input type="radio" name="gender" value="F">
        <label for="female">Female</label>
    </div>
    
	<div style ="margin:10px">
	    <label for="age">Please type your age : </label>
    	<input type="text" name="age" maxlength="3">
    	<input type="submit" name="submit" value="Greet me now">
	</div>
</form>

<h2>5. & 6. Women soccer team</h2>

<form method="get">

    <div style ="margin:10px">
        <label for="genderSoccer">Select you gender : </label>

        <input type="radio" name="genderSoccer" value="M">
        <label for="male">Male</label>

        <input type="radio" name="genderSoccer" value="F">
        <label for="female">Female</label>
    </div>
    
	<div style ="margin:10px">
	    <label for="ageSoccer">Please type your age : </label>
    	<input type="text" name="ageSoccer" maxlength="2">
	</div>

	<div style ="margin:10px">
	    <label for="nameSoccer">Please type your name : </label>
    	<input type="text" name="nameSoccer" maxlength="16">
	</div>

    <input type="submit" name="submitSoccer" value="Join the team">
</form>

<?php 

    $genderS = $_GET['genderSoccer'];
    $ageS = $_GET['ageSoccer'];
    $nameS = $_GET['nameSoccer'];
    $message = "Sorry you don't fit the criteria...";

    if(isset($genderS) and isset($ageS) and isset($nameS)){
        if($genderS == "F" and $ageS > 20 and $ageS < 41){
            $message = "Welcome to the team $nameS !";
        }
    };

    echo $message;
?>

<h2>7 & 8. Switch</h2>

<form method="get" style="margin:10px">
    <label for="note">Enter the note :</label>
    <input type="text" maxlength="2" name="note">

    <input type="submit" value="Submit note">
</form>

<?php 
    $note = $_GET['note'];

    if (isset($note)){
        switch ($note) {
            case 1:
            case 2:
            case 3:
            case 4:
                echo "This work is really bad. What a dumb kid! ";
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo "This is not sufficient. More studying is required.";
                break;
            case 10 :
                echo "barely enough!";
                break;
            case 11:
            case 12:
            case 13:
            case 14:
                echo "Not bad!";
                break;
            case 15:
            case 16:
            case 17:
            case 18:
                echo "Bravo, bravissimo!";
                break;
            case 19:
            case 20:
                echo "Too good to be true : confront the cheater!";
                break;
            default :
                echo "Not a valid note.";
        };
    };
?>

<h2>9 & 10. Ternary operators</h2>

<form method="get">
    <div style ="margin:10px">
        <label for="gender3">Select gender : </label>

        <input type="radio" name="gender3" value="M">
        <label for="male">Male</label>

        <input type="radio" name="gender3" value="F">
        <label for="female">Female</label>
    </div>
    <div>
        <input type="text" name="name3">
        <input type="submit" value="Greet me">
    </div>

</form>

<p>
<?php 
    $gender3 = $_GET['gender3'];
    $name3 = $_GET['name3'];
    $hello = ($gender3 == 'M') ? 'Hello Mr '.$name3 : 'Hello Mrs '.$name3;

    if(isset($gender3) and isset($name3)){
        echo $hello;
    };
?>
</p>


<h2>10.1. Human, cat or unicorn?</h2>

<form method="get">
    <div style ="margin:10px">
        <label for="type"> Are you human, cat or unicorn ? </label>

        <input type="radio" name="type" value="human">
        <label for="human">Human</label>

        <input type="radio" name="type" value="cat">
        <label for="cat">Cat</label>

        <input type="radio" name="type" value="unicorn">
        <label for="unicorn">Unicorn</label>
    </div>
        <input type="submit" value="Go !">
</form>

<?php

    $type = $_GET['type'];

    $src = ($type == 'human') ? "https://media.giphy.com/media/3o7bu1QBfylzi8MmYw/giphy.gif" : (($type == 'cat') ? "https://media.giphy.com/media/5HSYaZTcRpYnS/giphy.gif" : "https://media.giphy.com/media/3oKIPrCu48s5KfzV7i/giphy.gif");
?>

<img src=<?php if (isset($type)){
        echo $src;
    };?>
>

    
</body>
</html>