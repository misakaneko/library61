<?php
function land($land, $value){
	$cars = array(
		'th' => '1',
		'jp' => '2',
	);
	  
	$cars = json_encode($cars);
	$cars = json_decode($cars, true);
	return $cars['th'];
}
$land = 'en';
$value = '3';

	$cars = array(
		 array('f' => 'th','th' => '1'),
		 array('f' => 'jp','jp' => '2'),
	);
	
	$cars = json_encode($cars);
	echo $cars;
$cars = json_decode($cars, true);
for($i=0,$f='';$i<5;$i++){
	if(isset($cars[$i]['f'])){
		if($cars[$i]['f'] != $land){
			echo $cars[$i]['f'];
		} else {
			$i = 9999999;
		}
	} else {
		$i = 9999999;
	}
} 
for($i=0,$f='';$i<5;$i++){
	if(isset($cars[$i]['f'])){
		$f = $f.json_encode(array(	'f' => $cars[$i]['f'],
								$cars[$i]['f'] => $cars[$i][$cars[$i]['f']])
		);
								
	} else {
		$l = $i;
		$i = 5;
	}
} 
echo $f.json_encode(array(	'f' => $l,));