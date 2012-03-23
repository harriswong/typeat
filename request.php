<?php
	$friends = array();
	$returnFriends = array();
	$_GET['term'] = urldecode(strtolower($_GET['term']));
	
	if ($_GET['term']) {
		$friends = array (
			'h1' => 'harris1', 
			'h2' => 'harris2', 
			'h3' => 'harris3'
		);
		foreach ($friends as $k => $v) {
			if (strpos($k, $_GET['term']) === 0) {
				$returnFriends[] = $v;
			}
		}
	}
	echo json_encode($returnFriends);
	exit;
?>