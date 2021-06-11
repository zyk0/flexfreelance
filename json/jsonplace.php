<?php

$schedulejson = file_get_contents("https://gist.githubusercontent.com/justinvyu/2daec11de37217160aaf/raw/07ee682b7e4d7afb95bb02936b473d6ffe31f0da/schedule.json");
$scheduleobj = json_decode($schedulejson,true); 
$i = 0; 
foreach($scheduleobj as $schedule ){
	
	$i++;
	if($i > 14){
		
		if($schedule["tag"] != "food"){
			echo "<li> &Prime;" .$schedule['event']."&Prime; <small>".$schedule['location']."</small></li>";
		}
		
	}
}
echo "<hr><small>count( $ scheduleobj): ".count($scheduleobj)."</small>";




?>