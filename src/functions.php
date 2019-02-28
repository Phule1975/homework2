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
    var_dump($oper);
    $operation = func_get_arg(0);
    print_r($operation);
    $arguments = func_get_args();
    print_r($arguments);
    $result = 0;
    if(in_array($operation, $oper)) {
        echo "YES";
    }
    //foreach (func_get_args() as $key => $value) {
      //  if ($key > 0) {
        //    $arguments[] = $value;
            //print_r($arguments);
          //  echo "<br>";
            //print_r($value);
            //switch ($operation) {
              //  case '+':
                    //$result = $result+$value;
//
  //                  break;
    //            case '-':
      //              $result = $value-$result;
        //            var_dump($value);
          //          echo "<br>";
            ///        var_dump($result);
               //     break;
                //case '*':
                  //  $result = $result*$value;
                    //break;
                //case '/':
                  //  $result = $result/$value;
                    //break;
            //}
        //}
    //}
//
    //echo implode(" $operation ", $arguments)." = $result";*/
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
