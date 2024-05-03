<?php

$datos = array(
    ["ID", "DESCRIPCION", "EXISTENTES", "PRECIO"],
    ["ID" => "CDI001R", "TENIS", 2, 300],
    ["ID" => "CDI002R", "PANTALON", 5, 250],
    ["ID" => "CDI003R", "BALON", 10, 400],
    ["ID" => "CDI004R", "CALCETAS", 2, 30],
    ["ID" => "CDI005R", "VENDAS", 5, 25],
    ["ID" => "CDI006R", "GUANTES", 10, 400],
);

echo "<table>";
foreach ($datos as $fila) {
    echo "<tr>";
    foreach ($fila as $dato) {
        echo "<td>" . $dato . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>