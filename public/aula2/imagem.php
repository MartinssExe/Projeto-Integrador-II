<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="index.php" method="post">

    <body>
        <img src="exercicio2/pngwing.com.png" alt="teste" widht="250" height="200">
        <br>
        <label for="nome">Nome do filme:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="genero">Escolha o gênero do filme:</label><br>
        <select id="genero" name="genero">
            <option value="" disabled selected>--Selecione--</option>
            <option value="Ação">Ação</option>
            <option value="Comédia">Comédia</option>
            <option value="Drama">Drama</option>
            <option value="Terror">Terror</option>
            <option value="Ficcao">Ficção Científica</option>
            <option value="Romance">Romance</option>
        </select>
        <br><br>
        <button type="submit">Cadastrar</button>
        <br><br><br>
    </body>
    
    <?php
    $nome = $_POST['nome'] ?? '';
    $genero = $_POST['genero'] ?? '';
    ?>

    <p>filme cadastrado: <?php echo $nome ?> (<?php echo $genero ?>)</p>
    <?php
    if ($genero == "Terror") {
        echo "<p style='color: red;'>Atenção! Filme de terror cadastrado.</p>";
    }

    ?>

    <?php
    if ($genero == "Comédia") {
        echo "<p style='color: green;'>Esse filme promete boas risadas.</p>";
    }
    ?>
    <?php
include'rodape.php';
?>
</html>