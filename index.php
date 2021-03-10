<?php
$resultado = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['op'] == 'som') {
        $resultado = $_POST['numA'] + $_POST['numB'];
    } else if ($_POST['op'] == 'sub') {
        $resultado = $_POST['numA'] - $_POST['numB'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Calculadora</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="numA">valor A:</label>
            <input type="number" name="numA" />
            <select name="op">
                <option value="som">+</option>
                <option value="sub">-</option>
                <option value="mult">*</option>
                <option value="div">/</option>
            </select>
            <label for="numB">valor B:</label>
            <input type="number" name="numB" />
            <input type="submit" value="Calcular" />
        </form>
        <hr />
        <?= $resultado ?>
    </body>
</html>