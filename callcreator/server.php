<?php
	
	$js = urlencode(json_encode($_POST));	
	$vx = 'https://api.voximplant.com/platform_api/StartScenarios/?account_id=551920&api_key=1ad7708c-a8dc-42f8-aba2-9385c494a8de&rule_id=229924&script_custom_data=';
	$vx .= $js;
	// $vx .= 'fuckThisWorlds';
	
	// file_get_contents($vx);
	// header('Location: ' . $_POST['back_url']);
	var_dump($_POST, PHP_EOL, $vx);
?>