
<?php
require_once("functions.php");

$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //print_r($_POST);

    //$result = 'fsa';

    $firstNum = (int) $_POST['firstNum'];
    $secNum = (int) $_POST['secNum'];
    $select = $_POST['select'];

    if ($select === 'NOK') {
        $result = nok($firstNum, $secNum);
    } else {

        $listNod = nod($firstNum, $secNum);

        $num = $listNod['result'];
        $example = $listNod['example'];

        $result = "</br>
        Для вычисления наибольшего общего делителя (НОД) чисел $firstNum и $secNum, мы можем воспользоваться формулой:
        </br></br>
        НОД(a, b) = НОД(a, c), где с - остаток деления a на b.
        </br></br>
        Решение:</br>
        $example
        </br></br>
        Таким образом, НОД($firstNum, $secNum) = $num";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input name="firstNum" type="text">
        <input name="secNum" type="text">
        <select name="select" id="selectNokNod">
            <option value="NOK">НОК</option>
            <option value="NOD">НОД</option>
        </select>
        <button type="submit">Получить</button>
    </form>
    <?php 
    if ($result != '') {
        print_r($result);
    }
    ?>
</body>
</html>