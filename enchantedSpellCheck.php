<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Spell Check</title>
</head>
<body>
    <h2>Enchanted Spell Check</h2>
    <?php
    $spell = "   AbRAcAdABrA   ";
    echo "Original String -> ";
    var_dump ($spell);
    echo ("<br>");
    $spell = trim($spell);
    echo "Trimed String -> " . $spell;
    echo ("<br>");
    $spell = strtolower($spell);
    echo "To lower case -> " . $spell;
    echo ("<br>");
    if ($spell=="abracadabra"){
        echo ("The spell is correct.");
    }else{echo ("The wizarding world is still at risk.");}
    ?>
</body>
</html>