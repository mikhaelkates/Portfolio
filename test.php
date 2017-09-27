<?php
$a = file_get_contents('https://liquid.fish/fishes.json');
$a = json_decode($a, true); 
$g = [];
foreach($a as $b){
	$e = 0;
	sort($b['fish_caught']);
	foreach($a as $key=>$c){
		sort($c['fish_caught']);
		if($b['fish_caught'] === $c['fish_caught']){
			unset($a[$key]);
			$e++;
		}
	}
	$h = array("number of times caught"=>$e,"fish caught"=>$b['fish_caught']);
	array_push($g, $h);
}
	sort($g);
	rsort($g);
	array_splice($g, 20);
	foreach($g as $i){
		$j = "";
		foreach($i['fish caught'] as $key=>$k){
			if(($key+1) == count($i['fish caught'])){
				$j .= "and ".$k;
			} else {
				$j .= $k.", ";
			}
		}
		$j .= " have been caught ".$i['number of times caught']." times!";
		echo $j."<br />";
	}
?>