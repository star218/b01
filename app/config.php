<?
header("Content-Type: application/x-javascript");
$hash = "bx_random_hash";
$config = array("appmap" =>
	array("main" => "app",
		"left" => "/app/left.php",
		"right" => "/app/right.php",
		"settings" => "/app/settings.php",
		"hash" => substr($hash, rand(1, strlen($hash)))
	)
);
echo json_encode($config);
?>