<h1>Functions in PHP : Exercises</h1>

<h2>1. Shuffle the letters</h2>

<?php
$original_text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffle_text($text){
    $text_to_array = explode(" ", $text);
    foreach($text_to_array as $key => $word){
        $text_to_array[$key] = str_shuffle($word);
    };

    $shuffled_text = implode(" ", $text_to_array);
    
    echo '<p>Original text : <br>'.$text.'</p>';
    echo '<p>Shuffled text : <br>'.$shuffled_text.'</p>';
};
shuffle_text($original_text);
?>

<h2>2. Capitalize 1st letter</h2>

<?php 

function capitalize_first($word){
    return ucfirst($word);
}; 
$to_capitalize = 'some word';
$capitalized = capitalize_first($to_capitalize);
echo 'Initial : '.$to_capitalize.'<br>';
echo 'Capitalized : '.$capitalized;
?>

<h2>3. Display year</h2>

<?php 
echo date('Y');
?>

<h2>4. Display full date & time</h2>

<?php
date_default_timezone_set('Europe/Brussels');
echo date('d/m/Y H:i:s');
?>