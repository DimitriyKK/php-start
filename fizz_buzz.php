<?php   

fizzbuzz ();
function fizzbuzz () {
echo "\n";
echo "Enter fizz number: ";
$fizz = (int)fgets(fopen("php://stdin", "r"));

echo "Enter buzz number: ";
$buzz = (int)fgets(fopen("php://stdin", "r"));

echo "Enter positive resulting number: ";
$sum1 = (int)fgets(fopen("php://stdin", "r"));

echo "\n";
	if ($fizz!=0 && $buzz!=0 && $sum1>0) {
	    for ($sum=1; $sum <= $sum1; $sum++) {
			if ($sum%($fizz*$buzz)==0) echo "FB ";
			elseif (!($sum%$fizz)) echo "F ";
			elseif (!($sum%$buzz)) echo "B ";
			else echo "$sum ";
		}
	}
	else {
		echo "You enter incorect numbers.\nTry again! \n"; 
		fizzbuzz ();
	}
}






/*
echo "Enter a fizz number: ";
$val1 = fopen("php://stdin", "r");
$fizz1 = fgets($val1);
echo $fizz1. "\n";
		
	if (!(is_int($fizz1))) {
		echo "Enter an integer fizz number: ";
		$val1 = fopen("php://stdin", "r");
		$fizz1 = (int)fgets($val1);
	}


	else {
		echo "Enter a buzz number: ";
		$val2 = fopen("php://stdin", "r");
		$buzz1 = (int)fgets($val2);
		echo $buzz1. "\n";

		echo "Enter a summary number: ";
		$val3 = fopen("php://stdin", "r");
		$sum1 = (int)fgets($val3);
		echo $sum1. "\n";

		for ($i=1; $i <= $sum1; $i++) {
			if (!($i%$fizz1) && !($i%$buzz1)) echo "FB ";
			elseif (!($i%$fizz1)) echo "F ";
			elseif (!($i%$buzz1)) echo "B ";
			else echo "$i ";
		}
	}


echo "\n";
*/




/*

echo "Enter a first integer number: ";
$val1= fgets(fopen("php://stdin", "r"));
echo "Enter a summary number: ";
$val2= fgets(fopen("php://stdin", "r"));



$sum1 = 0; // odd
$sum2 = 0; // even
$sum3 = 0; // simple
for ($i = 1; $i <= $val2; $i++) {
	if ($i%2) {  // нечет
		$sum1+=$i;
		// echo "$i, ";
		echo "$sum1 is odd, ";
	}
	else {   // чет
		$sum2+=$i;
		//echo "$i- ";
		echo "$sum2 is even, ";
	} 
}

/*
for ($j = 1; $j <= $val2; $j++) {
	while ($j>100) {
		$sum3+=$j;
		echo "$sum3, ";
	} 
} */

/*
echo "\n Summ of odd numbers is $sum1.";
echo "\n Summ of even numbers is $sum2.";
echo "\n Summ of simple numbers is $sum3.";

*/



/*
//const TWO = 200;
//echo TWO;

echo "Enter a number of the week day: ";
$day = fgets(fopen("php://stdin", "r"));
switch ($day) {
	case ($day>=1 && $day<=5): 
		echo "That's a working day \n";
		break;
	case ($day>=6 && $day<=7): 
		echo "That's a weekend \n";
		break;
	default: 
		echo "That's an unknown day \n";
	}

$arr = [
	1 => "model", 
	2 => "speed", 
	3 => "doors",
	4 => "year",
	5 => "owner"
	];

//echo "\n";
//echo count($arr);
echo "\n\n";
// echo var_dump($arr);
// echo print_r($arr);

$bmw = [
	"model" => "X5",
	"speed" =>"200",
	"doors" => 5,
	"year" => 2000,
	];
$toy = [
	"model" => "carina",
	"speed" =>"100",
	"doors" => 4,
	"year" => 2005,
	];
$opel = [
	"model" => "astra",
	"speed" => "80",
	"doors" => 6,
	"yar" => 2010,
	];

echo $bmw["model"]."\n";

echo $bmw["model"]."-".$bmw["speed"]."-".$bmw["doors"]."-".$bmw["year"]."\n";

$cars = [
	1 => $bmw,
	2 => $toy,
	3 => $opel
]; 

echo "print cars: \n\n\n";
echo print_r($cars);
echo "\n";
//echo $cars[$bmw]["year"]);
echo $cars[2]["speed"]. "\n\n";

/*
$juice = "apple";
echo "He drank some $juice juice.\n";

// Некорректно. '$' - верный символ для имени переменной, но переменная имеет имя $juice.
echo "He drank some juice made of $juices.\n";

// Корректно. Строго указан конец имени переменной с помощью скобок:
echo "He drank some juice made of ${juice}s.\n"; */


/*
$sum = 0;
for ($i=1; $i<= 50; $i++) {
	echo $i . "\n";
	$sum+=$i;
}
	echo $sum; */

?>