<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $v1 = $_POST['v1'];
     $v2 = $_POST['v2'];
    $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'Suma':
                $result = suma($v1, $v2);
                break;
            case 'Resta':
                $result = resta($v1, $v2);
                break;
            case 'Multiplicación':
                $result = multiplicacion($v1, $v2);
                break;
            case 'División':
                $result = division($v1, $v2);
                break;
            default:
                $result = "Operación no válida.";
                break;
        }

        echo "<p>Resultado: $result</p>";
    }
    function suma($v1, $v2) {
        return $v1 + $v2;
    }

    function resta($v1, $v2) {
        return $v1 - $v2;
    }

    function multiplicacion($v1, $v2) {
        return $v1 * $v2;
    }

    function division($v1, $v2) {
        if ($v2 == 0) {
            return "<p>No se puede dividir por cero.</p>";
        } else {
            return $v1 / $v2;
        }
    }
    ?>