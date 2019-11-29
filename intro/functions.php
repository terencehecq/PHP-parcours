
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

<h2>5. Sum</h2>

<?php

    function sum($a,$b){

        $sum = (is_numeric($a) and is_numeric($b)) ?  $a + $b : "Error : argument is not a number";
        return $sum;
    };

    echo 'sum(2, d) ==> '.sum(2, d).'<br>';
    echo 'sum(12, 45) ==> '.sum(12, 45).'<br>';
?>

<h2>6. Generate acronym</h2>

<?php

    function generate_acronym($string){
        $string_to_array = explode(" ", $string);
        foreach($string_to_array as $key => $word){
            $string_to_array[$key] = ucfirst(substr($word, 0, 1));
        }
        return implode("", $string_to_array);
    };

    $acronym = generate_acronym('Fabrique un chapeau, kirikou');
    echo '<p>'.$acronym.'</p>';
?>

<h2>7. Replace ae by æ & reverse</h2>

<?php

    function replace_ae($string){
        return str_replace("ae", "æ", $string);
    };

    function replace_transformed($string){
        return str_replace("æ", "ae", $string);
    };

    $ae_words = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
    $transformed_words = ["cæcotrophie", "chænichthys","microsphæra", "sphærotheca"];

    foreach($ae_words as $word){
        echo $word.' => '.replace_ae($word).'<br>';
    }

    foreach($transformed_words as $word){
        echo '<br>'.$word.' => '.replace_transformed($word);
    }
?>

<h2>8. Return html for errors, warning & info</h2>

<?php

    function display_message($message, $css_class = "info"){
        echo '<div class='.$css_class.'>'.ucfirst($css_class).' : '.$message.'.</div>';
    };

    display_message("Incorrect email adress");
?>

<h2>9. Generate 2 random words</h2>

<?php

    function getRandomWords() {
        $len1 = random_int(1,5);
        $len2 = random_int(7,15);
        $letters = array_merge(range('a', 'z'));
        shuffle($letters);
        $word1 =  substr(implode($letters), 0, $len1);
        $word2 = substr(implode($letters), $len1, $len2);
        $words = $word1.' - '.$word2;
        return $words;
    };

 ?>

 <p>Random words : 
    <?php 
        if(isset($_GET['words'])){
            echo getRandomWords();
        }
    ?>
</p>

<form method="get" action="functions.php">
    <input type="submit" value="Generate words" name="words">
 </form>

<h2>10. String to lower case</h2>

<?php 

    function decapitalize($string){
        return ucfirst(strtolower($string));
    };

    echo decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

?>

<h2>11. Calc volume of a cone</h2>

<?php

    function calc_cone_volume($r, $h){
        $volume = (pow($r,2) * pi() * $h) / 3;

        return 'The volume of a cone which ray is ' . $r . ' cm and height is ' . $h . ' cm = ' . $volume . ' cm<sup>3</sup>';
    }

    echo calc_cone_volume(4,10);
?>