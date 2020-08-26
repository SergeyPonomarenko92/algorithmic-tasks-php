<?php
ini_set('display_errors', '1');

/*0) Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result*/
	$arr = [1, 2, 3, 4, 5];
	$result = 0;
	foreach ($arr as $elem) {
		$result += pow($elem, 2);
	}
	echo $result  . '<br/><br/>';

/*1) Дан массив $arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'синий', 'black' => 'черный', 'white' => 'белый']. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.*/
	$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'синий', 'black' => 'черный', 'white' => 'белый'];
	foreach ($arr as $key => $elem) {
		echo $key . ' ' . '-' . ' ' . $elem . '<br/>'; 
	}
	echo '<br/>';

/*2) Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.*/
	$days = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($days as $key => $elem) :
		if ($key < 5) {
		echo $elem  . ' ';
		}
		else {
?>
			<strong><?php echo $elem;?></strong>
<?php		
		};
	endforeach;
	echo '<br/><br/>';

/*3) Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day*/
	$day = 'пятница';
	$arr = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($arr as $key => $elem) {
		if ($elem !== $day) {
			echo $elem . ' ';
		}
		else {
?>
			<i><?php echo $elem . ' ';?></i>
<?php
		}
	}
	echo '<br/><br/>';

/*4) С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100].*/
	$arr = [];
	echo '[';
	for ($i = 1; $i <= 100; $i++) {
		$arr[] = $i;
		echo $i . ' ';
	}
	echo ']';
	//var_dump($arr);
	echo '<br/><br/>';

/*5) Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'*/
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr as $key => $elem) {
		if ($key == 0) {
			echo '-' . $elem . '-';
		}
		else {
			echo $elem . '-';
		}
	}
	echo '<br/><br/>';

/*6) Выведите столбец чисел от 1 до 100, используя цикл while*/
	$k = 1;
	while ($k <= 100) {
		echo $k . '<br/>';
		$k++;
	}
	echo '<br/>';

/*7) Выведите столбец чисел от 11 до 33, используя цикл while*/
	$k = 11;
	while ($k <= 33) {
		echo $k . '<br/>';
		$k++;
	}
	echo '<br/><br/>';

/*8) Решите нижеприведенные задачи через цикл for. Выведите столбец четных чисел в промежутке от 0 до 100.*/
	for ($n = 0; $n <= 100; $n++) {
		if ($n%2 == 0) {
		echo $n . '<br/>';	
		}
	}
	echo '<br/>';

/*9) С помощью цикла for найдите сумму чисел от 1 до 100.*/
	$sum = 0;
	for ($n = 1; $n <=100; $n++) {
		$sum += $n;
	}
	echo 'Сумма чисел от 1 до 100 равна ' . $sum;
	echo '<br/><br/>';

/*10)* Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for*/
//через цикл while
	$num = 1000;
	$i = 0;
	while ($num >= 50) {
		$num /= 2;
		$i++;
	}
	echo $num . '<br/>';
	echo $i . '<br/>';
	echo '<br/>';
//через цикл for	
	for($num = 1000, $i = 0; $num >= 50; $num/2, $i++){
		$num /= 2;
	}
	echo $num . '<br/>';
	echo $i. '<br/>';

/*11) Найдите корень из числа 1000. Округлите его в большую и меньшую стороны. В массив $arr запишите первым элементом корень из числа, вторым элементом - округление в меньшую сторону, третьим элементом - в большую.*/
//с помощью цикла for
	$arr = array();
	$arr[] = sqrt(1000);
	$arr[] = floor(sqrt(1000));
	$arr[] = ceil(sqrt(1000));
	var_dump($arr);
	echo '<br/>';

/*12) Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b. Если это так - выведите 'Делится' и результат деления, иначе выведите 'Делится с остатком' и остаток от деления. (значения в переменные $a и $b вставляйте любые)*/
		$a = 65;
		$b = 12;
		if ($a%$b == 0) {
		echo 'Делится, результат деления ' . $a/$b;
		}
		else {
		 echo 'Делится с остатком ' . $a%$b;
		}
	echo '<br/><br/>';

/*13) Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach*/
	$arr = [4, 2, 5, 19, 13, 0, 10];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += pow($elem, 2);
	}
	echo sqrt($sum) . "<br/><br/>";

/*14) Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число*/
	echo min(4, -2, 5, 19, -130, 0, 10) . '<br/>';
	echo max(4, -2, 5, 19, -130, 0, 10);
	echo '<br/><br/>';

/*15) Выведите на экран случайное число от 1 до 100*/
	echo 'Случайное число от 1 до 100 : ' . mt_rand(1, 100);
	echo '<br/><br/>';

/*16)* Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.*/
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		for ($sum = 0, $i = 0; $sum <= 10; $i++) {
			$sum += $arr[$i];
		}
	echo $i . '<br/>';
	echo '<br/>';
/*17)*Даны ящики. Длина каждого ящика 1.5 метра. Узнайте, сколько ящиков может поместиться вдоль стены длиной 20 метров. Ответом должно быть целое число*/
	$l = 1.5;
	$L = 20;
	$n = $L/$l; 
	echo floor($n) . '<br/>';
	echo '<br/>';
//2 способ - с помощью цикла for
//$L - общая длина, которую занимают все ящики
	for($l = 1.5, $L = 1.5, $i = 0; $L <= 20; $i++) {
		$L += $l;
	}
	echo $i . '<br/>';
?>