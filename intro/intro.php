<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<!------------ Exercises with variables ------------>

<h2>Variables</h2>

<?php 
    $first_name = "Térence";
    $age = 23;
    $eyes_color = "blue";
    $family_members = array(
        'Anne-Cécile',
        'Christophe',
        'Maoro',
        'Tiziana',
        'Florie-Anne'
    );
    $hungry = true;

    // This is a comment
    /* This is also a comment */
    # This is a comment too

    $a = 10; // var_dump($a) -> int(10)
    $b = "10"; // var_dump($b) -> string(2) "10" -> (2) = longueur de la string
    $c = array(10); // var_dump($c) -> array(1) { [0]=> int(10) } -> (1) = longueur de l'array
?>

<p>My name is <?php echo $first_name?>.</p>
<p>I'm <?php echo $age?> years old.</p>
<p>My eyes <?php echo $eyes_color?>.</p>
<p>The first member of my family is <?php echo $family_members[0]?>.</p>
<p>Am i hungry? <?php echo $hungry?>.</p>


<!------------- Exercises with arrays ------------->

<h2>Arrays</h2>

<?php 
    $recipes = ['Spaghetti bolo', 'Raclette', 'Pizza', 'Steak frites'];
    $fav_films = ['Taken', 'Ready player one', 'Star Wars', 'Gardiens de la Galaxie'];

    // Technique to print array more visual than print_r() :
    echo '<pre>';
    print_r($recipes);
    echo '</pre>';
    
    // This one shows more information :
    var_dump($recipes);


    // Associative array describing me
    $me = array(
        'firstname' => 'Térence',
        'favSeason' => 'Summer',
        'likeSoccer' => true,
        'favFilms' => $fav_films
    );

    // Add hobbies
    $me['hobbies'] = ['Playing music', 'Coding', 'Seeing friends', 'Watching series'];
    
    // Associative array describing my mother
    $mother = array(
        'firstname' => 'Anne-Cécile',
        'favSeason' => 'Spring',
        'likeSoccer' => false,
        'favFilms' => ['La belle & la bête', "Don't know", "Some movie"],
        'hobbies' => ['Running', 'Listening to music', 'Healthy food']
    );

    // Add mother's information to my array
    $me['mother'] = $mother;

    // Add a hobby
    $me['hobbies'][] = 'Taxidermy'; // Using [] to push in array

    // Print the $me array
    echo '<pre>';
    print_r($me);   
    echo '</pre>';

    $soulmate = array(
        'firstname' => 'Florie-Anne',
        'favSeason' => 'Summer',
        'likeSoccer' => false,
        'favFilms' => ['Titanic', "Gardiens de la Galaxie", "Saga Marvel"],
        'hobbies' => ['Watching series', 'Listening to music', 'Seeing friends']
    );

    $possible_hobbies_intersection = array_intersect( $me['hobbies'],  $soulmate['hobbies']);
    $possible_hobbies_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

    echo '<pre>';
    print_r($possible_hobbies_intersection);   
    print_r($possible_hobbies_merge);   
    echo '</pre>';
?>


<p>My family : <?php print_r($family_members)?>.</p>
<p>My favorite recipes : <?php print_r($recipes)?>.</p>
<p>My favorite recipes : <?php echo $fav_films[3] ?>.</p>
<p>My mother has <?php echo count($mother['hobbies']) ?> hobbies</p>
<p>I have <?php echo count($me['hobbies']) ?> hobbies</p>
<p>Together, we have <?php echo count($mother['hobbies']) + count($me['hobbies']) ?> hobbies</p>


<!---------- More with arrays ---------->

<h2>More with arrays</h2>

<?php 
    $web_development = array(
        'frontend' => [],
        'backend' => []
    );
    // Set in the table
    $web_development['frontend'][] = 'xhtml';
    $web_development['backend'][] = 'Ruby on rails';
    $web_development['frontend'][] = 'CSS';
    $web_development['backend'][] = 'Flash';
    $web_development['frontend'][] = 'JavaScript';

    // Modify in the table
    $web_development['frontend'][array_search('xhtml', $web_development['frontend'])] = 'html';

    // Delete from the table
    array_splice($web_development['backend'],(array_search('Flash', $web_development['backend'])),1);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

?>
    
</body>
</html>