<?php


$wood = true;
$rope = true;
$nails = true;
$knife = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Batoh </h1>
    
    <?php

if ($wood) {
echo '<img src="wood.png" alt="dřevo"><br>';
} else {
echo "Nemáš dřevo <br>";
}

if ($rope) {
echo '<img src="Rope.jpg" alt="provaz"><br>';
} else {
echo "Nemáš provaz <br>";
}

if ($nails) {
echo '<img src="nails.jpg" alt="hřebíky"><br>';
} else {
echo "Nemáš hřebíky <br>";
}

if ($knife) {
echo '<img src="knife" alt="nuž"><br>';
} else {
echo "Nemáš nuž <br>";
}

    ?>

<h2> Výroba </h2>

<?php

if ($rope && $knife && $wood) {
echo '<img src="bow.jpg" alt="luk"><br>';
} if ($nails && $wood) {
echo '<img src="Bat.png" alt="pálka s hřebíky"><br>';
} if ($rope && $wood) {
echo '<img src="Nun.jpg" alt="nunchaky"><br>';
} if ($knife && $wood) {
echo '<img src="spear.png" alt="kopí"><br>';
}

?>



</body>
</html>