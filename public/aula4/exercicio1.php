<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $numero = 0;
    ?>

    <form action="formulario.php" method="post">
        <label for="numero"> Número: </label><br>
        <input type="text" id="numero" name="numero" required><br><br>
</form>

<?php
    $numero = $_POST['numero'];
?>
<?php 
$mult = 1;
for ($mult = 1; $mult < 11; $mult++) {
    $res = $mult * $numero;
    echo "<p>$mult x $numero = $res </p>";
} ?>
</body>
</html>