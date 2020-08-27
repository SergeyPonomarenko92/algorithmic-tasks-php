
//. Найдите корень из числа 1000. Округлите его в большую и меньшую стороны. В массив $arr запишите первым элементом корень из числа, вторым элементом - округление в меньшую сторону, третьим элементом - в большую.
<?php
$sqrt =  sqrt(1000);
echo $sqrt . "<br>";
echo floor($sqrt) . "<br>";
echo ceil($sqrt);
?>


//Задача. Заполните массив 30-ю случайными числами от 1 до 10.
<?php
$arr = [];
for ($i = 0; $i <= 30; $i++) {
    $arr[] = mt_rand(1, 10);
    print_r($arr);
}
?>


//  Даны переменные $a=10 и $b=3. Найдите остаток от деления $a на $b. Показать решение.
<?php

$a = 10;
$b = 3;

$c = fmod($a, $b);
?>

// Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b. Если это так - выведите 'Делится' и результат деления, иначе выведите 'Делится с остатком' и остаток от деления. Показать решение.

<?php
$a = 10;
$b = 3;

if ( fmod($a, $b) == 0){
    echo 'а делится без остатка';
}else{
    echo 'а делится с остатком';
}
?>


// Возведите 2 в 10 степень. Результат запишите в переменную $st.

<?php
$a = 2;
$st= pow(2, 5);
var_dump($st);
?>


// Найдите квадратный корень из 245.
<?php
$a = 245;
echo sqrt($a);
?>


// Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach.

<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value){
    $sum = $value * $value;
}
echo sqrt($sum);
?>



// Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых.

<?php
$a = 379;
$b = sqrt($a);

echo round($b);
echo ceil($b);
echo floor($b);
?>

//Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'.

<?php
$a = 587;
$b = sqrt($a);

$c = ceil($b);
$d = floor($b);

$arr = [$c, $d];

print_r($arr);
?>


// Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.
<?php
$arr = [4, -2, 5, 19, -130, 0, 10];
echo max($arr);
echo min($arr);
?>


// Выведите на экран случайное число от 1 до 100.

<?php
	echo mt_rand(1, 100);
?>

//Заполните массив 10-ю случайными числами. Подсказка: нужно воспользоваться циклами for или while
<?php
$arr = [];
for ($i=0; $i <= 10; $i++){
    $arr[] = mt_rand(1, 100);
}
?>


//Даны переменные $a и $b. Найдите найдите модуль разности $a и $b. Проверьте работу скрипта самостоятельно для различных $a и $b.

<?php

$a = -123;
$b = 332;
$a = abs($a);
$b = abs($b);

$e = $a - $b ;
echo $e;
?>

//Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3]. Создайте из него новый массив так, чтобы отрицательные числа стали положительными, то есть у нас должен получиться такой массив: [1, 2, 1, 2, 3, 3].

<?php
$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $value){
    if ($value < 0){
        $value = $value * -1;
    }
    print_r($value);
}
?>

<?php

$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $value){
    $value = abs($value);
    echo $value;
}
?>


//Дано число, например 30. У этого числа есть делители - числа, на которое оно делится без остатка. Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30. Задача: сделайте массив делителей нашего числа. Число может быть любым, не обязательно, 30.

<?php
$arr = [];
$y= 30;
    for ($i = 1; $i <= $y; $i++){
    if ($y % $i == 0){
        $arr[] = $i;
}
}
  print_r($arr);

?>


//Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.





$ arr= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$ sum = 0;
$ count = 0;
foreach ($ arr as $ elem) {
if ($ sum <= 10) {
$ sum + = $ elem;
$ count = $ count + 1;
}
}
echo $ count;















































