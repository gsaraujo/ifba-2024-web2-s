<?php
$produtos = $_POST['produtos'];//pegando os dados enviados do formulário

echo "<h1>Lista de Produtos</h1>";
echo "<table>";
echo "<tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Preço Unitário (R$)</th>
      </tr>";

foreach ($produtos as $produto) {
    // Exibir somente produtos preenchidos
    if (!empty($produto['nome'])) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($produto['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($produto['quantidade']) . "</td>";
        echo "<td>" . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "</tr>";
    }
}

echo "</table>";