<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP vezérlési szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // fenntarthatóság
        // 1. feladat
        $elsoSzint = "Ökoszisztéma";
        $masodikSzint = "Társadalom";
        $harmadikSzint = "Gazdaság";
        $negyedikSzint = "Pénz";
        echo "<div class='fenntarthatosag'>";
        echo "<h2>A fenntarthatóság szintjei</h2>";
        echo "<div class='kep'>";
        echo "<img src='fenntarthatosag.jpg' alt='fenntarthatosag'>";
        echo "<ul>";
        echo "<li>$elsoSzint</li>";
        echo "<li>$masodikSzint</li>";
        echo "<li>$harmadikSzint</li>";
        echo "<li>$negyedikSzint</li>";
        echo "</ul>";
        echo "</div>";
        echo "</div>";

        // 2. feladat
        $elsoTomb = array("A megújuló erőforrások fogyasztása", "több, mint amit a természet újratermelni képes", "a természet újratermelő kapacitásával azonos mértékű", "kevesebb, mint amit a természet újratermelni képes");
        $masodikTomb = array("A környezet helyzete", "a környezet pusztul", "környezeti egyensúly", "a környezet megújul");
        $harmadikTomb = array("Fenntarthatóság", "nem fenntartható", "fenntartható, nem változó állapot", "fenntartható fejlődés");
        echo "<table>";
        echo "<tr>";
        echo "<th>$elsoTomb[0]</th>";
        echo "<th>$masodikTomb[0]</th>";
        echo "<th>$harmadikTomb[0]</th>";
        echo "</tr>";
        echo "<tr>";
        for ($i=1; $i < count($elsoTomb) ; $i++) { 
            echo "<td>$elsoTomb[$i]</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=1; $i < count($masodikTomb) ; $i++) { 
            echo "<td>$masodikTomb[$i]</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=1; $i < count($harmadikTomb) ; $i++) { 
            echo "<td>$harmadikTomb[$i]</td>";
        }
        echo "</tr>";
        echo "</table>";

        // 3. feladat
        echo "<h1>Megújuló energiaforrás</h1>";
        echo "<p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható a megújuló energiaforrások közé.</p>";

        echo "<table>";
        echo "<tr>";
        echo "<th>Ország</th>";
        echo "<th>EU cél 2020</th>";
        echo "</tr>";
        $megujAr = array("EU átlag"=>"20", "Belgium"=>"13", "Bulgária"=>"16", "Dánia"=>"20", "EU átlag"=>"30", "Németország"=>"18", "Észtország"=>"25", "Finnország"=>"36");
        foreach ($megujAr as $kulcs => $ertek){
            echo
            "
            <tr>
            <td>$kulcs</td>
            <td>$ertek</td>
            </tr>
            ";
        }
        echo "</table>";
        
    ?>
</body>
</html>