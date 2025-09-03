<?php
    $prd = [
        "arroz" => 20,
        "feijão" => 10,
        "macarrão" => 5,
        "leite" => 8,
        "pão" => 6,
    ];

    foreach ($prd as $produto => $preço){
        echo "<p>produto: $produto  --  preço: $preço</p>";
    }

    $total = 0;

    foreach ($prd as $produto => $preço){
        $total += $preço;
    }

    echo "<p>Valor total da compra: $total</p>";
?>