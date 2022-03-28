<?php

switch ($_GET['array']) {
    case '1':
        $datos = array(
            '0' => array(
                '0' => 'O',
                '1' => 'I',
                '2' => 'E'

            ),
            '1' => array(
                '0' => 'I',
                '1' => 'I',
                '2' => 'X'
            ),
            '2' => array(
                '0' => 'E',
                '1' => 'X',
                '2' => 'E'
            ),
        );
        break;
    case '2':
        $datos = array(
            '0' => array(
                '0' => 'E',
                '1' => 'I',
                '2' => 'O',
                '3' => 'I',
                '4' => 'E',
                '5' => 'I',
                '6' => 'O',
                '7' => 'E',
                '8' => 'I',
                '9' => 'O'

            ),

        );
        break;
    case '3':
        $datos = array(
            '0' => array(
                '0' => 'E',
                '1' => 'A',
                '2' => 'E',
                '3' => 'A',
                '4' => 'E'

            ),
            '1' => array(
                '0' => 'A',
                '1' => 'I',
                '2' => 'I',
                '3' => 'I',
                '4' => 'A'
            ),
            '2' => array(
                '0' => 'E',
                '1' => 'I',
                '2' => 'O',
                '3' => 'I',
                '4' => 'E'
            ),
            '3' => array(
                '0' => 'A',
                '1' => 'I',
                '2' => 'I',
                '3' => 'I',
                '4' => 'A'
            ),
            '4' => array(
                '0' => 'E',
                '1' => 'A',
                '2' => 'E',
                '3' => 'A',
                '4' => 'E'
            ),
        );
        break;
    case '4':
        $datos = array(
            '0' => array(
                '0' => 'O',
                '1' => 'X'
              

            ),
            '1' => array(
                '0' => 'I',
                '1' => 'O'
              
            ),
            '2' => array(
                '0' => 'E',
                '1' => 'X'
              
            ),
            '3' => array(
                '0' => 'L',
                '1' => 'L'
               
            ),
            '4' => array(
                '0' => 'O',
                '1' => 'X'
              
            ),
            '5' => array(
                '0' => 'I',
                '1' => 'E'
              
            ),
            '6' => array(
                '0' => 'E',
                '1' => 'X'
              
            ),
        );
        break;
    default:
        $datos = array(
            '0' => array(
                '0' => 'O',
                '1' => 'I',
                '2' => 'E'

            ),
            '1' => array(
                '0' => 'I',
                '1' => 'I',
                '2' => 'X'
            ),
            '2' => array(
                '0' => 'E',
                '1' => 'X',
                '2' => 'E'
            ),
        );
        break;
}

$y = count($datos);
$x = count($datos[0]);

echo "<table border=1><tr>
<th>x</th>";

for ($i = 0; $i < $x; $i++) {
    echo "<td>" . ($i+1) . "</td>";
}

$contador = 0;
foreach ($datos as $value) {
$contador++;
  
    echo "<tr>";
    echo "<td>".$contador."</td>";
    for ($i = 0; $i < $x; $i++) {
        echo "<td>" . $value[$i] . "</td>";
    }



    echo "</tr>";
}
