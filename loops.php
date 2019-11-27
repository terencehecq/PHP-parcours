<h1>Loops in php : Exercises</h1>

<?php

echo '<h2>1. Print pronouns</h2>';

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $key => $pronoun){

    if($key == 2){
        echo '<p>'.$pronoun.' codes</p>';
    }else{

        echo '<p>'.$pronoun.' code</p>';
    };
};

echo '<h2>2. Generate select from array</h2>';

$countries = array(
    'BE' => 'Belgium', 
    'FR' => 'France', 
    'ES' => 'Spain', 
    'DE' => 'Germany', 
    'UK' => 'England', 
    'US' => 'USA', 
    'TH' => 'Thailand',
    'DK' => 'Danemark',
    'CR' => 'Croatia',
    'MX' => 'Mexico', 
    'CA' => 'Canada');
?>

<select name="countries" id="countries">
    <?php 
        foreach ($countries as $key => $country){
            echo '<option value="'.$key.'">'.$country.'</option>';
        };
    ?>
</select>