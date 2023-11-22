<?php

//Наименьшее общее кратное
function nok(int $firstNum, int $secNum) {

    //получение НОД
    $listNod = nod($firstNum, $secNum);
    $numNod = $listNod['result'];
    $exampleNod = $listNod['example'];

    $expression1 = $firstNum * $secNum;
    $resultNok =  $expression1 / $numNod;


    $result = "</br>
    Для вычисления наименьшего общего кратного (НОК) чисел $firstNum и $secNum, мы можем воспользоваться формулой:
    </br></br>
    НОК(a, b) = (a * b)/НОД(a, d)
    </br></br>
    Найдем сначала НОД($firstNum, $secNum):</br>
    $exampleNod
    </br></br>
    Теперь можем вычислить НОК($firstNum, $secNum):</br>
    НОК($firstNum, $secNum) = ($firstNum * $secNum)/НОД($firstNum, $secNum) = ($firstNum * $secNum)/$numNod = $expression1/$numNod = $resultNok
    </br></br>
    Таким образом, НОК($firstNum, $secNum) = $resultNok";

    return $result;
}

//Наибольший общий делитель
function nod(int $firstNum, int $secNum, $opt1 = 0) {

    $result = 0;

    $minNum = min($firstNum, $secNum);
    $maxNum = max($firstNum, $secNum);


    for ($i = $maxNum; $i > 0; $i--) {
        if ($minNum % $i === 0 && $maxNum % $i === 0) {

            $multiplierMax = round($maxNum / $minNum);
            $multiplierMin = round($minNum / $i);
            $expression1 = "$maxNum = $multiplierMax * $minNum + <span class='span--red'>$i</span>";
            $expression2 = "$minNum = $multiplierMin * <span class='span--red'>$i</span> + 0";
            $result = "$expression1</br>$expression2";

            return [
                'example' =>  $result,
                'result' => $i
            ];
        }
    }

    
}