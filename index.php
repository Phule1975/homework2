<?php
require ("src/functions.php");

echo "<p style='font-size: 16px; font-weight: 700;'>Задание 1:</p>";
$myString = ['Функция',' должна',' принимать',' массив',' строк',' и выводить',' каждую строку в отдельном
параграфе'];
echo task1($myString, true);
echo "<p style='font-size: 16px; font-weight: 700;'>Задание 2:</p>";
task2('f', 1, 2, 3, 4, 5);
//echo "<br>";
//task2("-", 5, 1, 1, 1, 1);
//echo "<br>";
//task2("/", 16, 4, 2, 1, 1);
//echo "<br>";
//task2("*", 2, 2, 2, 2, 2);
echo "<p style='font-size: 16px; font-weight: 700;'>Задание 3:</p>";
task3(5, 4);
echo "<p style='font-size: 16px; font-weight: 700;'>Задание 4:</p>";
task4("24.02.2016 00:00:00");
echo "<p style='font-size: 16px; font-weight: 700;'>Задание 5:</p>";
echo task5("Карл у Клары украл Кораллы", "К", "");
echo "<p style='font-size: 16px; font-weight: 700;'>Задание 6:</p>";
echo task6("test.txt", "Hello again!");
