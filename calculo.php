<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itens = $_POST['item'] ?? [];
    $quantidades = $_POST['quantidade'] ?? [];

    $valores = [
        "X-Burguer" => 8.30,
        "Misto Quente" => 7.00,
        "X-Salada" => 8.90,
        "Pepsi" => 6.00,
        "Sprite" => 5.00,
        "H2O" => 5.50
    ];

    $total = 0;
    
    echo "<h1 style='text-align:center;color:#e74c3c;'>Resumo do Pedido</h1>";

    foreach ($itens as $i => $item) {
        $quantidade = (int)$quantidades[$i];
        
        if ($quantidade > 0) {
            $subtotal = $quantidade * $valores[$item];
            echo "<li style='font-size:16px;margin-bottom:10px;'>$item: $quantidade x R$ " . number_format($valores[$item], 2, ',', '.') . " = R$ " . number_format($subtotal, 2, ',', '.') . "</li>";
            $total += $subtotal;
        }
    }

    echo "</ul>";
    echo "<p style='font-size:18px; text-align:right;'><strong>Total Geral: R$ " . number_format($total, 2, ',', '.') . "</strong></p>";
    echo "</div>";
}
?>