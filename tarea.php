<!DOCTYPE html>
<html>
<head>
    <title>PHP Operaciones y Manipulación</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Declaración de Variables</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Variable</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$num1</td>
                <td>12</td>
            </tr>
            <tr>
                <td>$pvu</td>
                <td>3.75</td>
            </tr>
            <tr>
                <td>$nombre</td>
                <td>Paco</td>
            </tr>
            <tr>
                <td>$verificador</td>
                <td>false</td>
            </tr>
            <tr>
                <td>$array1</td>
                <td>2, 3, 1, 6, 234, 111, 12</td>
            </tr>
        </tbody>
    </table>

    <h1 class="mb-4">Operaciones Aritméticas</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Resta: (float)$num1 - $pvu</td>
                <td>
                    <?php
                        $num1 = 12;
                        $pvu = 3.75;
                        $resta = (float)$num1 - $pvu;
                        echo $resta;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Multiplicación: $num1 * $array1[4]</td>
                <td>
                    <?php
                        $array1 = array(2, 3, 1, 6, 234, 111, 12);
                        $multArray = $num1 * $array1[4];
                        echo $multArray;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h1 class="mb-4">Manipulación de Cadenas</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Cadena</th>
                <th>Longitud</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                        $cadena = "Hola amigo sapo";
                        $cadena .= " como estas?";
                        echo $cadena;
                    ?>
                </td>
                <td>
                    <?php
                        $longitud = strlen($cadena);
                        echo $longitud;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h1 class="mb-4">Uso de Condicionales</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Condición</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>!$verificador</td>
                <td>
                    <?php
                        $verificador = false;
                        if (!$verificador) {
                            echo "No estas verificado.";
                        } else {
                            echo "Estas verificado, muy bien.";
                        }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <h1 class="mb-4">Creación de un Array</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Índice</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>
                    <?php
                        $array2 = array(2, 3, 1, 2, 7);
                        echo $array2[2];
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>