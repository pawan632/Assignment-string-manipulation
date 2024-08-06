<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirate Treasure Map</title>
</head>
<body>
    <h2>Pirate Treasure Map</h2>
    <?php
    $clue = "find the hidden treasure at the golden island";
    echo "Clue -> " . $clue;
    echo "<br>";
    $arr = explode(" ",$clue);

    // var_dump($arr);
    // print_r( explode(" ",$clue));

    echo "New Clue -> ";
    foreach($arr as $element){
        if ($element =="golden"){
            $element= "mystic";
        }
        echo strToUpper($element . " ");
    }
 
    ?>
</body>
</html>