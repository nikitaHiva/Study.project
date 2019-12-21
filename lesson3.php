<?php

$table = '<table border="1" width="100%"  cellspacing="0" cellpadding="3" bgcolor="#c0c0c0"  > ';

for ($row = 1; $row <= 3; $row++) {
    $table .= '<tr>';
    for ($j = 1; $j <= 4; $j++) {
        $table .= '<td height="50" align="center">1</td>';

    }
    $table .='</tr>';
}


$table .= '</table>';
echo $table;