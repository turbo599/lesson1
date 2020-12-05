<?php

$list = [1,2,3];
$list[1];
 
// for ($i=0; $i<=count($list); $i++)
// {	
// echo $list[$i];
// }

$arr=[
'red'=>1,
'blue'=>2,
'green'=>3,
];

// foreach($arr as $key=>$value)
// {
// var_export($key);
// var_export($value);	
// }
// $end=false;
// while(!$end)
// {
// if ($current)

// {
// $end=true;
// }
// else 
// {
// $current=array_pop($arr);
// var_export ($current);
// }
// }


// $arr =
// [ '1'=> 1 , 
// '2' => 2 , 
// '3'=> [ 
// '1'=> 1 ,
// '2'=> 2 ,
// ]];

// $arr1 = [ 
// '1' => 10 , 
// '2' =>[
// '1' =>20, 
// '2' =>30,
// '3' =>10,],
// '3' =>20,];

// function arSum(array $arr1):int 
// {
	// return array_sum($arr1);
// }

// function arSumRec(array $arr1):int 
// {
	// $sum=arSum($arr1);
	// foreach($arr1 as $key => $value) 
	// {
		// if (is_array ($value))
		// { 
			// $sum+=arSumRec($value);
		// }
	// }
	// return $sum;
// }




 
// function myCounter(array $arr) {
	// $counter = 1;
	// foreach($arr as $key => $value)
	// {
		// if (is_array($value))
		// {
			// myCounter($value);
		// }
		// else 
		// {
			// if ($counter == 2)
			// {
				// echo '<br>';
				// var_export($value);
			// }
		// }
	// $counter++;
	// }
// }

// myCounter($arr);

echo '<br>';

function test ($a=10)
{
	
	return $a;
}

function test1($b)
{
	echo test($b);
}

test1(20)	













































// echo "exercise 1=";
// echo (7%3);
// echo "<br>";

// $a1=7;
// $a2=(integer)7.15;
// echo "exercise 2=";
// echo $a1+$a2;
// echo "<br>";

// $a3=sqrt(25);
// echo "exercise 3=";
// echo $a3;
// echo "<br>";

// print_r( mb_split("\s", "Десять негритят пошли купаться в море") );
// echo "<br>";	

// $b5 = 'Десять негритят пошли купаться в море';
// echo mb_strlen($b5); 
// echo "<br>";

// $str = 'Десять негритят пошли купаться в море';
// print_r(preg_split('//u', $str, null,PREG_SPLIT_NO_EMPTY));
// echo "<br>";

// if (1==true)
// {
	// echo "true";
// }
// echo "<br>";

// if (0===false)
// {
	// echo "true";
// }
// else 
// {
    // echo "false";
// }
// echo "<br>";

// $с1 = 'tree';
// $с2 = 'три';
// if (mb_strlen($c1)>mb_strlen($c2))
// {
	// echo "Первая строка больше второй";
// }
// else
// {
	// echo "Вторая строка больше первой";
// }		 
// echo "<br>";

// $d1 = 125*12+7;
// $d2 = 223+28*2;
// if ($d1>$d2)
// {
	// echo "Первое число больше второго";
// }
// else
// {
	// echo "Второе число больше первого";
	
// )

?>
