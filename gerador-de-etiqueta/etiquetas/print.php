<?php
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
date_default_timezone_set( 'America/Sao_Paulo' );


$servidor = "localhost";
$usuario = "root";
$senha = "Darth.Vader99@";
$dbname = "aubicon";
// Criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cod = $_POST['cod'];

$sql = mysqli_query($conn, "SELECT * FROM itens WHERE (codigo LIKE '%" . $cod . "%')");

$row = mysqli_num_rows($sql);

// if ($row > 0) {
//     while ($linha = mysqli_fetch_array($sql)) {
//         $codigo = $linha['codigo'];
//         echo "<br/>";
//         echo @$codigo;
//     }
// }
// else {
//     echo "Código inválido";
// }

?>
<DOCTYPE html>
    <br>
    <table border="1">
        <tbody style="font-family: 'Oswald', sans-serif; font-size: 12px";>
            <tr>
                <th>ITEM</th>
                <td>
                    <?php
                    $cod = $_POST['cod'];
                    if (empty($cod)) {
                        echo "Vazio";
                    } else {
                        echo strtoupper($cod);
                    }
                    ?>
                </td>
                <th>DESCRIÇÃO</th>
            </tr>
            <tr>
                <th>OP</th>
                <td>
                    <?php
                    $op = $_POST['op'];
                    if (empty($op)) {
                        echo "Vazio";
                    } else {
                        echo $op;
                    }
                    ?>
                </td>
                <td style="text-align:center; font-size:10px" rowspan="4">
                    <?php
                        if ($row > 0) {
                            while ($linha = mysqli_fetch_array($sql)) {
                                $descricao = $linha['descricao'];
                                echo "<br/>";
                                echo @$descricao;
                            }
                        }
                        else {
                            echo "Código inválido";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <th>m²</td>
                <td>
                    <?php
                    $qntd = $_POST['qntd'];
                    if (empty($qntd)) {
                        echo "Vazio";
                    } else {
                        echo $qntd;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th style="font-size: 12px;">OPERADOR</td>
                <td>
                    <?php
                    $operator = $_POST['operator'];
                    if (empty($operator)) {
                        echo "Vazio";
                    } else {
                        echo strtoupper($operator);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th style="font-size: 12px;">
                    <?php
                        echo date('d-m - H:i:s');
                    ?>
                </th>
                <td>
                    <?php
                    $obs = $_POST['obs'];
                    if (empty($obs)) {
                        echo "Vazio";
                    } else {
                        echo strtoupper($obs);
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</html>