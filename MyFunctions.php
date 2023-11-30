<?php

function showFibonacciNumbers(int $rowLenth)
{
    $result = [];

    if ($rowLenth < 0) {
        return json_encode([
            'status' => false,
            'message' => 'Длинна не может быть отрицательной!'
        ]);
    }

    for ($i = 0; $i < $rowLenth; $i++) {
        if (count($result)>1) {
            $result[$i] = $result[$i - 1] + $result[$i - 2];
        } else {
            $result[$i] = $i;
        }
    }

    return json_encode([
        'status' => true,
        'message' => $result
    ]);
}