<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $alunos = [

        "Ana" => 8,
        "João" => 6,
        "Maria" => 9,

    ];
    $quantidadealunos = count($alunos);
   
    $notatotal = 0;

    foreach ($alunos as $aluno => $nota){

            $notatotal += $nota;

            if ($nota < 7 ){
                $aprov = "Reprovado";
            }
            else {
                $aprov = "Aprovado!";
            }
            echo "<br> Aluno: $aluno tirou $nota - situaçao $aprov <br>";
            $media = $notatotal / $quantidadealunos;
        }

        echo "<br><br> Média da turma: " . number_format($media, 2) . "";
        
    ?>
</body>
</html>