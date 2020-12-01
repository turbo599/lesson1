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
    echo "false";
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
}	



?>