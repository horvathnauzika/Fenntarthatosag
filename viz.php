<?php
if (isset($_POST['szamol'])) {
    $v = $_POST['v'];
    $a = $_POST['A'];
    $w = $A * $v;
    echo "<p>Az adott keresztmetszeten időegység alatt átáramló folyadék térfogata: " . $w . "</p>";
}
