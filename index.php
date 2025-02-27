<?php

//Реализуйте функцию truncate(), которая обрезает переданный текст и добавляет в конце многоточие. Подобная логика часто используется на сайтах, чтобы отобразить длинный текст в сокращенном виде. Функция принимает два параметра:
//Строка, которую нужно обрезать
//Число символов, которые нужно оставить

$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$count = 10;

function truncate($str, $count) {
    $truncated_text = substr($str, 0, $count);
    $truncated_text .= "...";
    print_r("$truncated_text\n");
}

truncate($str, $count);

//Реализуйте функцию getHiddenCard(), которая принимает на вход номер кредитки, 
//состоящий из 16 цифр, в виде строки и возвращает его скрытую версию, которая может использоваться на сайте для отображения. 
//Если исходная карта имела номер 2034399002125581, то скрытая версия выглядит так ****5581. 
//Другими словами, функция заменяет первые 12 символов на звездочки. 
//Количество звездочек регулируется вторым необязательным параметром. Значение по умолчанию — 4.

$cardNumber = 2034399002125581;

function getHiddenCard($cardNumber, $starsCount = 4) {
    $visibleVersion = substr($cardNumber, 12);
    $result = str_repeat('*', $starsCount) . $visibleVersion;
    print_r("$result\n");
}

getHiddenCard($cardNumber);

//Реализуйте функцию getFormattedBirthday(), которая принимает на вход три параметра: день, месяц и год рождения. 
//Она возвращает их строкой в отформатированном виде, например: 20-02-1953.

$day = 4;
$month = 4;
$year = 1991;

function getFormattedBirthday($day, $month, $year) {
    $result = sprintf("%02d-%02d-%04d", $day, $month, $year);
    print_r("$result\n");
 }

 getFormattedBirthday($day, $month, $year);

//Реализуйте функцию normalizeUrl(), которая выполняет так называемую нормализацию данных. 
 //Она принимает адрес сайта и возвращает его с https:// в начале.
 //Функция принимает адреса в виде:
 //АДРЕС
//http://АДРЕС
//https://АДРЕС
//Но всегда возвращает URL в виде https://АДРЕС:

$adress = 'google.com';

function normalizeUrl($adress) {
    if (strpos($adress, 'http://') === 0) {
        $result = 'https://' . substr($adress, 7);
    } elseif (strpos($adress, 'https://') === 0) {
        $result = $adress;
    } else {
        $result = "https://{$adress}";
    }
    print_r("$result\n");
}

normalizeUrl($adress);
//Модифицируйте функцию printNumbers() так, чтобы она выводила числа в обратном порядке. 
//Для этого нужно идти от верхней границы к нижней. То есть, счетчик должен быть инициализирован максимальным значением, 
//а в теле цикла его нужно уменьшать до нижней границы. Нижняя граница равна единице:

$firstNumber = 4;
function printNumbers($firstNumber)
{
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r("finished!\n");
}

printNumbers($firstNumber);
//Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку. Функция должна вернуть полученную строку

$a = 2;
$b = 5;

function joinNumbersFromRange($a, $b) {
    $i = $a;
    $sum = 0;
    $res = '';
    while ($i <= $b) {
        $res = $res . $i;
        $sum = $sum + $i;
        $i = $i + 1;
    }
    print_r("$res\n");
}

joinNumbersFromRange($a, $b);
//Реализуйте функцию sumOfSeries(), которая считает сумму ряда целых чисел. Ряд задается двумя числами — начальным и конечным.
//Функция принимает два аргумента-числа и возвращает сумму ряда. Например, для аргументов 4 и 7 сумма будет 4 + 5 + 6 + 7 = 22. Если начальное и конечное числа равны, то результатом будет то же число:

$start = 5;
$end = 8;

function sumOfSeries($start, $end) {
    $sum = 0;
 
    for ($start; $start <= $end; $start += 1) {
        $sum += $start;
    }
 
    print_r("$sum\n");
}

sumOfSeries($start, $end);
//Реализуйте функцию getCustomDate(), которая принимает дату в формате timestamp и возвращает ее в формате 15/03/1985:

$timestamp = 1532435204;

function getCustomDate($timestamp) {
    $date = date('d/m/Y', $timestamp);
    print_r("$date\n");
}

getCustomDate($timestamp);


?>

