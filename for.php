<?php

$table = '<table  border="1" cellpadding="14" cellspacing="0">';
for ($row = 1; $row <= 5; $row++) {
    $table .= '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        $sum = $row * $j;
        if ($row == 1 || $j == 1) {
            $table .= "<th > $sum </th>";
        } else {
            $table .= "<td align='center'> $sum </td>";
        }
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
