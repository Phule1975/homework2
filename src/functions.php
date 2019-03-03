<?php
function task1($arrayOfStrings, $toCombineStrings)
{
    $result = "";
    foreach ($arrayOfStrings as $value) {
        if ($toCombineStrings) {
            $result .= $value;
        } else {
            echo "<p>$value</p>";
        }
    }
    return $result;
}

function task2()
{
    $oper = ["+","-","*","/"];
    $arguments = func_get_args();
    $operation = array_shift($arguments);
    $result = 0;
    if(in_array($operation, $oper)) {
        foreach ($arguments as $key=>$value) {
            if ($key > 0) {
                switch ($operation) {
                case "+" :
                    $result = $result + $value;
                    break;
                case "-" :
                    $result = $result - $value;
                    break;
                case "*" :
                    $result = $result * $value;
                    break;
                case "/" :
                    if ($value == 0) echo "Ошибка, деление на 0";
                    else $result = $result / $value;
                    break;
            }
            } else $result = $value;
        }
        echo implode(" $operation ", $arguments)." = $result";
    } else echo "Первый элемент должен быть символом арефметической операции";
}

function task3($cols, $rows)
{
    echo "<table style='border: 1px solid grey; border-collapse: collapse; text-align: center;'>";
    for ($i = 1; $i<=$rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j<=$cols; $j++) {
            echo "<td style='border: 1px solid grey;'>".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function task4($dateString)
{
    echo date("d.m.Y H:i");
    echo "<br>";
    $date = explode(" ", $dateString)[0];
    $time = explode(" ", $dateString)[1];
    $day = explode(".", $date)[0];
    $month = explode(".", $date)[1];
    $year = explode(".", $date)[2];
    $dateStringConvert = "$year-$month-$day $time";
    $timestamp = strtotime($dateStringConvert);
    echo $timestamp;
}

function task5($string, $del, $add)
{
    $array = explode($del, $string);
    return implode($add, $array);
}

function task6($fName, $text)
{
    $file = fopen($fName, 'w+');
    $test = fwrite($file, $text);
    if ($test) {
        echo 'Данные занесены в файл.';
    } else {
        echo 'Ошибка';
    }
    fclose($file);
    $file = fopen($fName, "r");
    $myText = fgets($file, 999);
    echo "<br>Содержимое файла: $myText";
    fclose($file);
}
