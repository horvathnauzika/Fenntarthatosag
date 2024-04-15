<?php
include_once "viz.php";
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
    $teteje = "<h1>Hogyan takarékoskodjunk a vízzel?</h1>";
    echo $teteje;
    echo "<h2>A Föld édesvízkészlete véges, hogyan takarékoskodhatunk a vízzel?<h2>";
    echo "<p>Az ivóvíz születéséért rengeteget dolgoznak a vízcseppek és az emberek is. Ráadásul a felhasználható víz mennyisége sem korlátlan. Ezért mondják a víztörténetét ismerő felnőttek, hogy óvd a természetet és takarékoskodj a vízzel. Fürdés helyett inkább zuhanyozz! Egészségesebb és takarékosabb is, mint a kádban fürdés. Ne folyasd feleslegesen a vizet, a fogmosáshoz használj poharat! Ha csöpögő csapot látsz, szólj a felnőtteknek! A mosógépet rakjuk tele ruhával, ha beindítjuk, egy-két pólóért pazarlás beindítani. De azzal is vizet spórolunk meg, ha vigyázunk a ruháink tisztáságára. Ha kevesebb ruhát piszkolunk össze, kevesebb lesz a mosnivalónk is. Ügyeljünk arra, hogy sáros lábbal ne menjünk be a lakásba, mert úgy is megspórolhatunk vizet, ha nem kell naponta többször felmosnunk. A kertet reggel és este locsold, ilyenkor kevésbé párolog a víz. De locsolásra használhatjuk az összegyűjtött esővizet is. A vizet a növények gyökeréhez juttasd!”
    A folyadékáram jellemző adata a folyadék áramlási sebessége (v). Az áramló folyadék mennyiségét a térfogatárammal fejezzük ki. A térfogatáram egy adott keresztmetszeten időegység alatt átáramló folyadék térfogata. A térfogatáram számítása: V = v × A
    ahol: V az adott keresztmetszeten időegység alatt átáramló folyadék térfogata, mértékegysége: m3/s  ,
    v a folyadék áramlási sebessége, mértékegysége: m/s ,
    A a folyadékáram keresztmetszete, mértékegysége: m2.</p>"
    ?>

    <form action="viz.php" method="post">
        <label for="V">V folyadék áramlási sebessége: </label>
        <input type="number" name="V" id="V" value="1">
        <br>
        <label for="A">A folyadék keresztmetszete (m2): </label>
        <input type="number" name="A" id="A">
        <input type="submit" value="Számol" name="szamol" value="szamol">
    </form>
</body>
</html>