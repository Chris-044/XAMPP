
<?php
$datos = [
    "ID" => ["CDI001", "CDI002", "CDI003", "CDI004", "CDI005"],
    "NOMBRE" => ["SHORT", "BERMUDA", "CALCETAS", "PLAYERA", "PANTALON"],
    "COLOR" => ["AZUL", "ROJO", "AMARILLO","VERDE","ROSA"],
    "PRECIO" => [150, 235, 18.45, 179, 525],
    "TOTALES" => [] 
];

foreach ($datos["PRECIO"] as $index => $precio) {
    $datos["TOTALES"][$index] = $precio; 
}

$precioTotal = 0;
foreach ($datos["PRECIO"] as $precio) {
    $precioTotal += $precio;
}

$datos["TOTALES"][] = $precioTotal; 

echo "<table>";


echo "<tr>";
foreach ($datos as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";

foreach ($datos["ID"] as $index => $id) {
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<th>" . $datos["NOMBRE"][$index] . " </th>";
    echo "<td>" . $datos["COLOR"][$index] . " </td>";
    echo "<td>" . $datos["PRECIO"][$index] . "</td>";
    echo "<td>" . $datos["TOTALES"][$index] . "</td>"; 
    echo "</tr>";
}

echo "<tr>";
echo "<td></td>";
echo "<td></td>"; 
echo "<td></td>"; 
echo "<td>Total:</td>";
echo "<td>" . $datos["TOTALES"][count($datos["TOTALES"]) - 1] . "</td>";
echo "</tr>";

echo "</table>";

?>
