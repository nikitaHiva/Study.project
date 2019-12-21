<?php

$table = '<table border="2"  >';
$table .= '<th>Список</th>';
for ($i= 1 ; $i < 50; $i= $i + 2) {

  $count = $i;

$table.='<tr> <td align="center">'. $count. '</td> </tr>';
}

$table .= '</table>';
echo $table;







