<h1>URL parameters exercises</h1>

<h2>1. Display full name</h2>
<?php

    $firstname = $_GET['prenom'];
    $lastname = $_GET['nom'];
    if (isset($firstname) and isset($lastname)){
        echo $firstname . ' ' . $lastname;
    }
?>

<h2>2. Display error if not set</h2>

<?php
    if (isset($_GET['age'])){
        echo $_GET['age'];
    }else{
        echo "Error : 'age' is not set";
    }
?>

<h2></h2>