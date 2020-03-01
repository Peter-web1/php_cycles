<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    
  </head>
  <body>
  
        <div class="container">
            <h1>Hello, world!</h1>
        </div>
		
		<p>Сегодня <?php echo date('d.m.Y h:i');
		?></p>

		<?php

		//Вывести переменную variable

		echo '<hr><hr><hr>';
		echo 'Вывести переменную variable';
		echo '<hr>';
		$my_variable = 100;
		
		echo ' Вывести переменную'.' $my_variable ='. $my_variable;
		echo '<br>';
	
		$_x =101;
		$_y = 150;
		
		echo ' Вывести переменную x ='.$_x;
		echo '<br>';
		echo ' Вывести переменную y ='.$_y;

		
		//Типы переменных

		echo '<hr><hr><hr>';
		echo 'Типы переменных';
		echo '<hr>';
		$a = 102; // 1) integer, (int)  Целое числовое значение
		echo 'Типы variables: '.$a . ' -1) integer, (int)  Целое';
		echo '<br>';
		$b = 14.17; // float дробное число с плавающей точкой
		echo 'Типы variables: '.$b . ' -2) (float) дробное';
		echo '<br>';
		$c = 'Howdy Ho'; // string, (str) строка
		echo 'Типы variables: '.$c . ' -3) string, (str) строка';
		echo '<br>';
		$d = array(1,2,3,4,5); // array масив
		echo 'Типы variables: '.$d[0] .' (array) цыфровой масив';
		echo '<br>';
		$e = array(
		'jon',//0
		'fan',//1
		'wol',//2
		'ker'//3
		); // array масив
		
		echo 'Типы variables: '.$e[0] .' (array) значения в масиве<br>';

		$j = false; // boolean, (bool) булевое значение
		echo 'Типы variables: '.$j .' boolean, (bool) булевое значение';

		// Ассоциативный массив - можно самостоятельно присвоить индекс
		echo '<hr><hr><hr>';
		echo 'Ассоциативный массив $x=array("name"=>"Vasja","surname" => array("девичья"=>"wan","настоящая"=>"Dam"));';
		echo '<br>';
		echo ' и многомерный массив';
		echo '<hr>';

		$f = array(
		'name' => 'Vasja',//0
		'surname' => 'Wan',//1
		'age' => 20,//2
		'byear' => 1996,//3
		//Многомерный массив
		'education' => array(
			'school in 2003',//0
			'college in 2013'//1
		),
		'married' => false,//4
		'smoking' => false,//5
		'geek' => true //6
		); // array массив
		
		echo $f['name'];
		echo '<br>';
		echo $f['education'][1];
		

		echo '<hr><hr><hr>';
		//разница 'и"
		echo 'Разница ковычки и апострофы <hr>';
		$__a = 100;
		
		echo 'test: $__a<br>';// выведется  "test: $__a"
		echo "test: $__a<br>";// выведется $__a = "test: 100"
		
		$_a = 100;
		echo '$_a = 100<br>';
		$_b = 15;
		echo '$_b = 15<br>';
		
		echo 'Ответ: $_a + $_b=';echo "Ответ: $_a + $_b";
		
		//коткантенация -склеивание строк
		echo '<hr><hr><hr>';
		echo 'Коткантенация -склеивание строк<hr>';
		$name = 'Abraham';
		$surname = 'Tugalov';
		
		echo $name;
		echo ' ';
		echo $surname;
		
		echo '<br>или<br> '; // или
		echo $name. ' ' . $surname;
		
		// + - * / %
		echo '<hr><hr><hr>';
		echo 'Операнты + - * / % <hr>';
		echo '5+10=';
		echo 5+10;
		echo ' , ';
		echo '5-10=';
		echo 5-10;
		echo ' , ';
		echo '5*10=';
		echo 5*10;
		echo ' , ';
		echo '5/10=';
		echo 5/10;
		echo ' , ';
		echo '1080 % 2=' ;
		echo 1081 % 2 ;// деление по модулю: если равно 0 то чётное, если есть остаток 1 -нечётное
		echo '<br><br>';
		echo '(5+5) + (3 + (2 * 3))=';
		echo (5+5) + (3 + (2 * 3));
		
		// условия 1)Оператор сравнения и 2) логические операторы
		
		echo '<hr><hr><hr>';
		echo 'Условия 1)Оператор сравнения(<,>,<=,>= ==,!=) и 2) логические операторы или(or)  или и (and)<hr>';
		$weater ='ясно'; // снег, дождь, ясно, облачно

		if($weater == 'дождь') {
			echo 'Погода плохая, лучще не куда не ехать';
		}
		if($weater == 'снег') {
			echo 'Погода плохая, лучще не куда не ехать ОПЯТЬ';
		}
		if($weater == 'ясно') {
			echo 'Всё круто, кеп можно ехать';
		}
		if($weater == 'облачно') {
			echo 'Ехать можно, но погода может ухудшиться';
		}

		//Пропуск в клуб
		echo '<hr>';
		echo 'Пропуск в клуб<hr>';

		$age = 24;

		if( $age < 24){
			echo 'Вы еще слишком малы для клуба';
		}

		if( $age >= 24){
			echo 'Проходи в клуб!';
		}


		echo '<hr>';
		$key = 10;
		if($key != 100500){
			echo 'Обычное цыфра ...';
		}

		if($key == 100500){
			echo 'Необычная цыфра ...';
		}
		echo '<hr>';
		$key = 10;
		if($key == 100500){
			echo 'Обычное цыфра ...';
		}
		// Иначе
		else {
			echo 'Необычная цыфра ...';
		}
   

		echo '<hr>';
		$name = 'Jonny' ;
		if($name == 'Abraham'){
			echo 'Привет мой господин!!!';
		}
		// Иначе
		else {
			echo 'Ты кто?';
		}


		//Логические операторы или(or)  или и (and)
		echo '<hr><hr>2) Логические операторы или(or)  или и (and)<hr>';

		$name = 'Abra';
		$age = 21;

		if( $age < 20 and $name != 'Abraham')
		{
			echo 'Тебе сюда нельзя слишком маленький!<hr>';
		} else{
			echo 'Привет!<hr>';
		}

		$rating = '39';

		if( $rating >= 25 and $rating <= 75)
		//if(true and true) and обязывает true в обеих условиях
		{
			echo 'Ты преуспивающий человек!';
		} else{
			echo 'Тебе еще есть к чему стремиться!';
		}



		// Цыклы 4-х видов!-чтобы определённый код повторялся несколько раз
		//for повторить один и тот же код заданое количевство раз
		echo '<hr><hr><hr>';
		echo 'Цыклы: 1) for,2) while, 3) foreach';
		echo '<hr/><br/>';
		echo 'for повторить один и тот же код заданое количевство раз <hr/>';
		for( $i = 1; $i <= 10; $i++)
		//i 1) -секция обьявления, присваивается начальное значение, i - переменная цыкла
		// $i < 10; -2) секция условие по которой цыкл будет повторяться
		//$i = $i +1 $i++;) 3)-секция изменения как $i будет изменятсся 
		{
			echo 'Привет мир!<hr/>';
		}
		//{} ТЕЛО ЦЫКЛА
		for( $i = 1; $i <= 10; $i++)
		{
			echo $i. ' , ';
		}

		echo '<hr/><br/>';
		for( $i = 1; $i <= 10; $i++)
		{
			echo $i;
			if( $i % 2 == 0)
			{
				echo '- Чётное число';
			}else
			{
				echo '- Не чётное число';
			}

			echo '<br>';
		}

		//wile в отличии от for пишутся не секции а условия, потом идёт тело кодо, и это условие будет исполнятс до тех пор пока в ваил условия будет истина
		echo '<hr/><hr/>';
		echo 'wile';
		echo '<hr/>';

		$test =10;
		while( $test <= 15 )
		{
			echo 'Тест '.$test.'<br/>';// если запустить то будет исполнятся до бесконечности, глюк
			$test++;
		}
		//foreach
		echo '<hr/><hr/>';
		echo 'foreach';// для массива по которому нужно пройтись
		echo '<hr/>';

		$names = array(
			'Jonny',
			'abracham',
			'Wisker',
			'Walker',
			'Alex',
		);
			//(название масива ключевое слово as- как  и название переменной которое будет хранить каждая операция из масива)
		foreach( $names as $value )
		{
			echo $value . '<br/>';
		}
		echo '<hr/><hr/>';

		$numbers = array(5,10,25,50); //куб числа, само на себя

		foreach( $numbers as $num )
		{
			echo 'куб числа ' . $num . ': ' .($num * $num) . '<br/>';
		}


		
		?>
    
  </body>
</html>