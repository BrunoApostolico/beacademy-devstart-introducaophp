<?php
$bandas = [
    ['Oficina G3',20],
    ['Novo Som',15],
    ['Listen',12]
];

echo "<table border=1>";

echo "<th>Banda</th>";
echo "<th>Músicas</th>";
echo "<tr>";
echo "<td> {$bandas[0][0]} </td>";
echo "<td> {$bandas[0][1]} </td>";
echo "</tr>";
echo "<tr>";
echo "<td> {$bandas[1][0]} </td>";
echo "<td> {$bandas[1][1]} </td>";
echo "</tr>";
echo "<tr>";
echo "<td> {$bandas[2][0]} </td>";
echo "<td> {$bandas[2][1]} </td>";
echo "</tr>";

echo "</table>";