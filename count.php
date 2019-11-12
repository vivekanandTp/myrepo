<?php
$arr = array(1,2,3,4,5,6,7,8,9,10,12,14,15,17,19);

function countArray($x){
	if(count($x)>0){
		$i = 0;
		foreach ($x as $key => $value) {
			$i++;
		}
		return $i;
	}else{
		return false;
	}
}




echo countArray($arr);

echo "<br/>";

echo count($arr);
echo "<br/>";
echo ucstring("viveka nand pathak");


function ucstring($el){
	$ex = explode(" ", $el);
	$ar = [];
	for($i=0;$i<countArray($ex);$i++){
		for($j=0;$j<strlen($ex[$i]);$j++){
			if($j==0){
				$n[] = strtoupper($ex[$i][$j]); 
			}else{
				$n[] = $ex[$i][$j];
			}
		}
	}

	return implode("", $n);
}
?>