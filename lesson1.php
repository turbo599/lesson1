<?php

	
 echo "exercise 1=";
 echo (7%3);
 echo "<br>";

 $a1=7;
 $a2=(integer)7.15;
 echo "exercise 2=";
 echo $a1+$a2;
 echo "<br>";

 $a3=sqrt(25);
 echo "exercise 3=";
 echo $a3;
 echo "<br>";

 print_r( mb_split("\s", "Десять негритят пошли купаться в море") );
 echo "<br>";	

 $b5 = 'Десять негритят пошли купаться в море';
 echo mb_strlen($b5); 
 echo "<br>";

 $str = 'Десять негритят пошли купаться в море';
 print_r(preg_split('//u', $str, null,PREG_SPLIT_NO_EMPTY));
 echo "<br>";

 if (1==true)
 {
	 echo "true";
 }
 echo "<br>";

 if (0===false)
 {
	 echo "true";
 }
 else 
 {
    // echo "false";
 }
 echo "<br>";

 $с1 = 'tree';
 $с2 = 'три';
 if (mb_strlen($c1)>mb_strlen($c2))
 {
	 echo "Первая строка больше второй";
 }
 else
 {
	 echo "Вторая строка больше первой";
 }		 
 echo "<br>";

 $d1 = 125*12+7;
 $d2 = 223+28*2;
 if ($d1>$d2)
 {
	 echo "Первое число больше второго";
 }
 else
 {
	 echo "Второе число больше первого";
	
 )
echo "<br>";

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr);

echo "<br>";

$array = [1, 2, 3, 7, 31, 4, 1, 8, 6];
array_splice($array,9,0,array_shift($array));
array_splice($array,9,1,array_shift($array));
array_splice($array,9,2,array_shift($array));
array_splice($array,9,3,array_shift($array));
 echo implode(',',$array);

echo "<br>";

$s=$array[4]+$array[5]+$array[6];
echo $s;

echo "<br>";

$firstArr = [

  'one' => 1,

  'two' => 2,

  'three' => 3,

  'foure' => 5,

  'five' => 12,

];


$secondArr = [

  'one' => 1,

  'seven' => 22,

  'three' => 32,

  'foure' => 5,

  'five' => 13,

  'six' => 37,

];

$result = array_intersect($firstArr, $secondArr);
print_r($result);

echo "<br>";

$firstArr = [

  'one' => 1,

  'two' => [

    'one' => 1,

  'seven' => 22,

  'three' => 32,

  ],

  'three' => [

'one' => 1,

'two' => 2,

  ],

  'foure' => 5,

  'five' => [

   'three' => 32,

   'foure' => 5,

   'five' => 12,

],  

];

function myCounter(array $firstArr) {
	 $counter = 1;
	 foreach($firstArr as $key => $value)
	 {
		 if (is_array($value))
		 {
			 myCounter($value);
		 }
		 else 
		 {
			 if ($counter == 2)
			 {
				 echo '<br>';
				 var_export($value);
			 }
		 }
	 $counter++;
	 }
 }

 myCounter($firstArr);

echo '<br>';


$sum = 0;
array_walk_recursive($firstArr, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum;



?>




