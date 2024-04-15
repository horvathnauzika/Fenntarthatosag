<?php
    if (isset($_POST['szemetem'])) {
        $kivalasztottSzemet = $_POST['szemetem'];
        if ($kivalasztottSzemet == "papír" || $kivalasztottSzemet == "tejes doboz") {
            echo "Kék színű gyűjtő";
        } elseif ($kivalasztottSzemet == "bab konzerv" || $kivalasztottSzemet == "nylon csomagolás") {
            echo "Sárga színű gyűjtő";
        } else {
            echo "Nem háznál gyűjtendő szemét!";
        }
    } else {
        echo "Még nem érkezett adat az űrlapról.";
    }
?>