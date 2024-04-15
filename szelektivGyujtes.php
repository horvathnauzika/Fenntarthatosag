<?php
include_once "backend.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // negyedik feladat
    $szemet = array("papír", "bab konzerv", "tejes doboz", "sörös üveg", "nylon csomagolás", "krumpli héja");
    ?>

    <form action="backend.php" method="post">
        <label for="szemetem">Kidobható szemét</label>
        <select name="szemetem" id="szemetem">
            <?php
            foreach ($szemet as $ertek) {
                echo "<option value=\"$ertek\">$ertek</option>";
            }
            ?>
        </select>
        <br>
        <input type="image" src="kuka.jpg" alt="kukák" name="kuka" id="kuka">
    </form>


    <br>
</body>

</html>