<?php

$precos = array(
    "X-Bacon" => 10.00,
    "Hambúrguer" => 8.50,
    "Hot Dog" => 7.00,
    "Coca-Cola" => 5.00,
    "Guaraná" => 4.50
);


if (isset($_POST['item']) && isset($_POST['quantidade'])) {
    $itensSelecionados = $_POST['item'];
    $quantidades = $_POST['quantidade'];
    $total = 0;

    echo "<h1>Resumo do Pedido</h1>";
    echo "<ul>";

    foreach ($itensSelecionados as $item => $valor) {
        $quantidade = $quantidades[$item];

        if ($quantidade > 0) {
            $subtotal = $quantidade * $precos[$item];
            $total += $subtotal;
            echo "<li>$quantidade x $item - R$ " . number_format($subtotal, 2, ',', '.') . "</li>";
        }
    }

    echo "</ul>";
    echo "<h2>Total: R$ " . number_format($total, 2, ',', '.') . "</h2>";
} else {
    echo "<h1>Nenhum item foi selecionado</h1>";
}
?>
