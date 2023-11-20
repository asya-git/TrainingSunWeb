<?php
require_once('./MyFunctions.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    if (empty($_POST['rowLenth'])) {
        echo  json_encode([
            'status' => false,
            'message' => 'Не все поля заполнены!'
        ]);
        die;
    } elseif ((int)$_POST['rowLenth'] != $_POST['rowLenth']) {
        echo  json_encode([
            'status' => false,
            'message' => 'Введите корректное число!'
        ]);
        die;
    }

    echo showFibonacciNumbers($_POST['rowLenth']);
}