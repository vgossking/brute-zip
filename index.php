<?php 
	/*$unsortedArr = array(4,5,3);
	function bubbleSort($array){
		$arrLength = count($array);
		$step = 1;
		for($counterLoop = 0; $counterLoop < $arrLength - 1; $counterLoop ++){
			$Swapped = false;
			for($index = 0; $index < $arrLength - $counterLoop - 1; $index ++){
				if($array[$index] > $array[$index + 1]){
					//swap($array[$index], $array[$index + 1]);
					$temp = $array[$index];
					$array[$index] = $array[$index + 1];
					$array[$index + 1] = $temp;
					$Swapped = true;
				}
			}
			if($Swapped){
				echo $step;
				var_dump($array);
				$step ++;
			}else{
				break;
			}
		}
		return $array;
	}
	$sortedArr = bubbleSort($unsortedArr);
	var_dump($sortedArr);*/



	/*function emailGenerator($names){
		$emails = array();
		foreach($names as $name){
			$spilitName = explode(" ", $name);
			$firstName = end($spilitName);
			$firstName = ucfirst($firstName);
			$emailTail = "";
			for($i = 0; $i < count($spilitName)-1; $i++){
				$getName = $spilitName[$i];
				$getName = strtoupper($getName[0]);
				$emailTail .= $getName;
			}

			$email = $firstName.$emailTail."@yahoo.com";
			while(in_array($email, $emails)){
				$countEmail = 1;
				$email = $firstName.$emailTail.$countEmail."@yahoo.com";
				$countEmail ++;
			}
			array_push($emails, $email);
		}
		return $emails;
	}
	$listName = array("Vuong Minh Vu","Le Hoang Anh","Vuong Minh Vu","Le Hai Anh");
	$listEmail = emailGenerator($listName);
	print_r($listEmail);*/
	

	/*var_dump(chr(65));

	function playPass($s, $n) {
    // your code
		$str = explode(" ", $s);
		$result = "";
		var_dump($str);
		foreach($str as $devideStr){
			for($i = 0; $i <= strlen($devideStr); $i++){
				$char = substr($s, $i, 1);
				$ascii = ord($char);
				//echo $ascii." ";
				if($ascii >= 65 && $ascii <= 90){
					$ascii += $n;
					if($ascii >90){
						$ascii = 64 + ($ascii - 90);
					}
					$char = chr($ascii);
					if($i == strlen($devideStr)){
						$result.=$char." ";
					}
					$result.=$char;
				}
			}
		}
		
		echo $result;
	}*/

	//playPass("BORN IZ", 1);

	/*function shiftString($s, $n){
		$result = "";

		for($i = 0; $i <= strlen($s); $i++){
			$char = substr($s, $i, 1);
			$ascii = ord($char);
			if($ascii >= 65 && $ascii <= 90){
					$ascii += $n;
					if($ascii >90){
						$ascii = 64 + ($ascii - 90);
					}					
					if($i %2 != 0){
						$char = chr($ascii + 32);

					}else{
						$char = chr($ascii);
					}
					$result.=$char;
			}elseif($ascii >=48 && $ascii <=57){
				$char = 9 - $char;
				$result.=$char;
			}
			else{
				$result.=$char;
			}
		}
		return strrev($result);
	}
	shiftString("BORN IZ 2015!", 1);*/
/*function almostIncreasingSequence($sequence)
{
	$p = 0;
	$s = 0;
	$c = count($sequence);
	$ca = $c-1;
	$cb = $c-2;
	for ($i = 0;$i < $ca;$i++)
	{
		if($sequence[$i] >= $sequence[$i + 1])
		{
			$p++;
		}
	}
	for ($i = 0;$i < $cb;$i++)
	{
		if ($sequence[$i] >= $sequence[$i + 2])
		{
			$s++;
		}
	}
	if($p > 1 || $s > 1)
	{
		return false;
	}
	return true;
}

var_dump(almostIncreasingSequence([1, 2, 1, 2]));*/

/*function matrixElementsSum($matrix) {
	$result = 0;
	for ($i = 0; $i < count($matrix[0]); $i++) {
		for ($j = 0; $j < count($matrix); $j++) {
			if ($matrix[$j][$i] === 0) {
				break;
			}
			$result += $matrix[$j][$i];
		}
	}
	return $result;
}
$a = [[1,1,1],
	[2,0,2],
	[3,3,3]];
var_dump(matrixElementsSum($a));*/

/*function allLongestStrings($inputArray) {
	$max = strlen($inputArray[0]);
	$results = [];
	foreach($inputArray as $input){
		if(strlen($input) > $max){
			$max = strlen($input);
			$results = [];
			array_push($results, $input);
		}
		elseif(strlen($input) == $max){
			array_push($results, $input);
		}
	}
	return $results;
}*/


	function chooseBestSum($t, $k, $ls){


		$finalResults = [];
		$sums = [];

		$results = array(array( ));

	    foreach ($ls as $element)
	        foreach ($results as $combination){
	        	
        		array_push($results, array_merge(array($element), $combination));
        		if(count(array_merge(array($element), $combination)) == $k){
        			array_push($finalResults, array_merge(array($element), $combination));
	        	}
        
	        }
	    foreach($finalResults as $results){
	    	$sum = array_sum($results);
	    	if($sum <= $t)
	    		array_push($sums, $sum);
	    }
	    if($sums)
	    	return max($sums);
	    return null;
	}



/*function isLucky($n) {
	$firstPart = substr($n, 0, strlen($n)/2);
	$secondPart = substr($n, strlen($n)/2, strlen($n));
	if(sumNumber($firstPart) == sumNumber($secondPart))
		return true;
	return false;
}

function sumNumber($int){
	$sum = 0;

	while($int > 0){
		$sum += $int%10;
		$int = floor($int/10);
	}
	return $sum;
}
var_dump(sumNumber(123));
isLucky(1230);


*/

/*function sortByHeight($a) {
	for($i = 0; $i < count($a); $i++){
		if($a[$i] != -1){
			for($j = 0; $j < count($a); $j++){
				if($a[$i] < $a[$j]){
					$temp = $a[$i];
					$a[$i] = $a[$j];
					$a[$j] = $temp;
				}
			}
		}
	}
	return $a;
}

var_dump(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180]));

function reverseParentheses($s) {
	while (preg_match('/\(([^()]*)\)/', $s, $m))
		$s = str_replace($m[0], strrev($m[1]), $s);
	return $s;
}*/

/*function addBorder($picture) {
	$canh ="";
	for($i = 0; $i <  strlen($picture[0]) + 2; $i++){
		$canh.="*";
	}
	$border = [] ;
	array_push($border, $canh);
	for($i = 0; $i < count($picture); $i++){
		$sub = "*".$picture[$i]."*";
		array_push($border,$sub);
	}
	array_push($border, $canh);
	return $border;
}*/

/*function areSimilar($A, $B) {
	if($A==$B) return true;
	for($i = 0; $i < count($A)-1; $i++){
		for($j = 1; $j < count($A); $j++){
			$a = $A;
			$temp = $a[$i];
			$a[$i] = $a[$j];
			$a[$j] = $temp;
			if($a == $B){
				return true;
			}
		}

	}
	return false;
}
$A= [1,3,3,2];
$B= [3,1,2,3];
var_dump(areSimilar($A, $B));*/

/*function avoidObstacles($inputArray) {
	$step = 2;
	$i = 1;
	while($i < (max($inputArray)+1)/$step){
		if(in_array($step * $i, $inputArray)){
			$step ++;
			$i= 1;
		}
		else{$i++;}
	}
	return $step;
}

echo avoidObstacles([1, 4, 10, 6, 2]);*/

/*function boxBlur($image) {
	$blurImage = [];
	for($x = 1; $x < count($image) - 1; $x++){
		for($y = 1; $y < count($image[0]) -1; $y++){
			$sum = 0;
			for($dx = -1; $dx <= 1; $dx ++){
				for($dy = -1; $dy <=1; $dy++){
					$sum += $image[$x + $dx][$y + $dy];
				}
			}
			$blurImage[$x-1][$y-1] = floor($sum/9);
		}
	}
	return $blurImage;
}

var_dump(boxBlur([[36,0,18,9],
	[27,54,9,0],
	[81,63,72,45]]));*/

/*function arrayMaxConsecutiveSum($inputArray, $k) {
    $currentSum = 0;
    $result = 0;
    for($i = 0; $i < $k - 1; $i ++){
        $currentSum += $inputArray[$i];
    }

    for($i = $k - 1; $i < count($inputArray); $i++){
        $currentSum += $inputArray[$i];
        if($currentSum > $result) $result = $currentSum;
        $currentSum -= $inputArray[$i - $k +1];
    }
    return $result;
}

echo arrayMaxConsecutiveSum([2, 3, 5, 1, 6], 2);*//*
function digitsProduct($product) {
    $n = $product;
    $result = [];
    for($i = 9; $i>1; $i--){
        while($n%$i == 0){
            array_push($result, $i);
            $n = $n/$i;
        }
    }
    print_r($result);
}

echo chr(bindec('01001000'));*/
/*function tennisSet($score1, $score2) {
    if($score1 > 7 || $score2 > 7) return false;
    if($score1 == 6 || $score2 < 5) return true;
    if($score1 < 5 || $score2 == 6) return true;
    if($score1 == 7 && ($score2 >=5&&$score2<7)) return true;
    if($score2 == 7 && ($score1 >=5&&$score1<7)) return true;
    return false;
}

var_dump(tennisSet(6,5));*/

/*session_start();
require_once __DIR__.'/php-graph-sdk-5.0.0/src/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
    'app_id'=> '102450063574853',
    'app_secret' => '14d34f03ab78a0c0369a67bf94a8bc09',
    'default_graph_version' => 'v2.2'
]);

$helper = $fb->getRedirectLoginHelper();
$permission = ['email'];
$loginUrl = $helper->getLoginUrl('http://php.dev/fb-callback.php', $permission);
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';*/

//$zip = new ZipArchive();
//$zipStatus = $zip->open("test.zip");
//if($zipStatus === true){
//    if($zip->setPassword('123')){
//        if($zip->extractTo(__DIR__)) echo 'extracted';
//        else echo('failed');
//    }
//    $zip->close();
//}
//else{
//    die("Failed opening archive: ". @$zip->getStatusString() . " (code: ". $zipStatus .")");
//}


require_once "UnzipBrute.php";

$zip = new ZipArchive();
$zipBrute = new UnzipBrute($zip);
$zipBrute->setSource("test.zip");
//var_dump($zipBrute->unzip('123'));
$zipBrute->brute();

?>