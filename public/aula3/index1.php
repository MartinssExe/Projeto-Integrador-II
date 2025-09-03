<?php
$divisor = 5;
$contador = 1;

for ($contador = 1; $contador <= 50; $contador++) {
    if ($contador % $divisor == 0) {
        echo "<p>$contador<br></p>";
    }
}
?>