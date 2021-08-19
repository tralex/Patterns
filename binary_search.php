<?
/**
Функция бинарного поиска
**/
function binary_search(&$source_array, $search_value){
	$count = count($source_array);
	if($count < pow(2, 31) && is_int($search_value)){
		$start = 0;
		$end = $count — 1;
		while(true){
		$len = $end — $start ;
		if($len > 2){
			if($len % 2 != 0)$len++;
			$mid = (int) ($len/2 + $start);
		}elseif($len >= 0){
			$mid = $start;
		}else{
			return false;
		}
		if($source_array[$mid] == $search_value){
			while( ($mid != 0) && ($source_array[$mid — 1] == $search_value))
			$mid—;
			return $mid;
		}elseif($source_array[$mid] > $search_value){
			$end = $mid — 1;
		}else{
			$start = $mid + 1;
		}
	}
	}else{
		return false;
	}
}

$array = array(15,58,5954);
sort($array);
var_dump("Result id:" . $array);
$search_value = 15;
if(false !== $result = binary_search(&$array, $search_value)){
var_dump("Result id:" . $result);
var_dump("Result value:" . $array[$result]);
?>