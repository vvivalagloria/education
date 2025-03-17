<html>
  <?php
	
   ?>

  <head>
      <title>Lesson 3.2</title>
  </head>
<body>
 <div>
<?php
	//9 Анонимные (лямбда) функции
	/*	Анонимные функции позволяют передавать 
		в качестве параметров функции другие функции 
		или 
		присваивать их переменным.
        Анонимная функция определяется как обычная функция 
		за тем исключением, что она не имеет имени. 
	*/
	//9 - 1 - простая анонимная функция
	$hello = function($string){
			echo "$string"."<br>";
	};
	
	$hello("PHP");
	echo gettype($hello)."<br>";  //object
 			
	//9 - 2 - анонимные функции могут возвращать некоторое значение
	//1
	$sum = function($a,$b){
		return $a + $b;
	};
	
	$number = $sum(10,15); //25
	echo $number."<br>";
	
	//2  
	$square = function($x) {
    return $x * $x;
    };
    
	echo $square(4); //16
  
	//9 -3 callback function
	/*	Распространенным случаем применения анонимных функций 
		является передача их параметрам других функции. 
		Таким анонимные функции еще называют функциями 
		обратного вызова или коллбеками (callback function).
	*/
	function welcome($message){ $message();	}
	
	welcome(function(){ echo "Hello"; } );
	
	$str1 = function(){ echo "<h3>Hello</h3>";};
	
	welcome($str1);
	
	$str2 = function(){ echo "<h3>Перерыв</h3>"; };
	
	welcome($str2);
	
	welcome(function(){echo "Привет!"."<br>";});
  
    //===============================================
    
	//10 - 1  строгая типизация 
	//в новых версиях (PHP 7.x–8.x) акцент сделан на строгую типизацию и 
	//чистый код. 
	function square(int $number)
	{ 
	    return $number * $number; 
	}
	
	echo square(3)."<br>";   	  //9
	echo square(3.9)."<br>"; 	  //9
	
	//10 - 2
	function sum(int $a , float $b)
	{
	    return $a + $b;
	}
		
	echo sum(1.5 , 2.5)."<br>";	  //3.5 !!!
	var_dump(sum(1.5 , 2.5));	  //float
			
	echo sum(1 , 2)."<br>";	 	  //3
	var_dump(sum(1 , 2));	  	  //float
    
	// 
	function summa($a , $b)
	{
	    return $a + $b;
	}
		
	echo summa(1.5 , 2.5)."<br>"; //4
	var_dump(summa(1.5 , 2.5));   //float
	
	//=========================================

	//11 указание типа возвращаемого значения
	//1
	function supply():array
	{
		return array(75, 3.14159, "PHP", true);
	}
	
	//2
	//Строгая типизация параметров и возвращаемого значения
    function getSum(int $a, int $b): int 
	{
		return $a + $b;
    }

	
	//=========================================

	//12 - проверка существования функции
	function  subscript($txt)
	{
		return "<sub>$txt</sub>";
	}
	
	function tagWrap($tag, $txt, $func = "")
	{
		if(function_exists($func)){
			$txt = $func($txt);
		}
		
		return "<$tag>$txt</$tag><br>";
	}
	
	print tagWrap('b', 'Полужирный',);
	print tagWrap('i', 'Подстрочный',);
	print tagWrap('i', 'Подстрочный',"subscript");
	                               //"subscript" -имя функции
	echo "<br><br>";
	
	//=========================================
	
	//13 PHP7 - функция с переменным количеством аргументов
	function summaN()
	{
	/*
		func_num_args(): int
		Возвращает количество аргументов, 
		переданных текущей пользовательской функции.

        Эта функция также может быть использована совместно с 
		func_get_arg() и func_get_args() 
		для создания функций с переменным количеством аргументов.
	*/
	   
	    if(func_num_args()==0){
		    echo "Необходимы параметры!<br>";
			return;
		}
		
		$summa =0;
		
		for($i = 0; $i<func_num_args();$i++ ){
			
			$arg = func_get_arg($i);
			
			if(!is_numeric($arg)){
				echo "Необходимы числа!<br>";  
				return;
			}
			
			$summa+=$arg;
		}
		
		return $summa;
	}
	
	// проверяем работу всех операторов if в коде
	echo "<br>".summaN()."<br>";
	echo "<br>".summaN(1,3,"string",5)."<br>";
	echo "<br>".summaN(1,3,5, -15)."<br>";
	echo "<br>".summaN(1, 3, 0.5, -15.5)."<br>";
	
	echo "<br>Проверка <br>";	
	$s = summaN(1,3,5, -15);        var_dump($s); //int(-6)	
	echo "<br>";
	$s = summaN();	                var_dump($s); //NULL
	echo "<br>";
	
	$s = summaN(1,5,"ssssssss",3.5); var_dump($s); //NULL
	echo "<br>";
		
	//=========================================
	
	//14 PHP 5.6  - аргументы будут переданы в виде массива,
	function summaNew(...$numbers)
	{
		$summa =0;
		
		foreach($numbers as $n){
			$summa +=$n;
		}
		
		return $summa;
	}
	
	echo "<br>".summaNew(1)."<br>";
	echo "<br>".summaNew(1, 3, 0.5, -15.5)."<br>";
	
	//=========================================
	
	// 15 Условные функции 
	/*
	  Cначала должна определяться функция,
	  а затем она вызывается. 
	  Но также можно сделать наоборот:

		hello();    // вызов функции
		 
		function hello()
		{
			echo "Hello PHP";
		}

		Тем не менее есть исключения. 
		В частности, 
		при определении функции при определенном условии.
		// hello();     // здесь будет ошибка
	*/
	
	$flag = True;
	
	function hello()
	{
		echo "Hello PHP!<br><br>";
	}

	if($flag){
			hello(); 
	}
	
	//=========================================
	
	//16 (PHP 7.4+)	стрелочная функция - arrow function
	/*
	Стрелочные функции (arrow function) позволяют 
	упростить запись анонимных функций, 
	которые возвращают некоторое значение. 
	Стрелочные функции автоматически имеют доступ 
	к переменным из внешнего окружения.

	Стрелочная функция определяется с помощью оператора fn:
	*/
	
    $a = 8; $b = 10;
	
	$myfunction = fn($c)=> $a+$b+$c;
	
	$result = $myfunction(22); 
	echo "$result";  			  //40
	
    echo "<br>";
	//=========================================	

	//	17	Замыкания / Closure
	/*
	Замыкания в PHP представляют анонимную функцию, 
	которая может использовать переменные из своего
	локального окружения. 

	В отличие от обычных анонимных функций 
	замыкания в PHP применяют выражение use.

	Выражение use() получает внешние переменные, 
	которые анонимная функция собирается использовать.
	*/
	
	$myfunctionNew = function($c) use ($a,$b){
			return $a+$b+$c;
	};
	
	$result = $myfunctionNew(9);
	echo "$result";  			  //27
	
?>
 </div>
</body>
</html>
