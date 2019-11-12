<?
header("Content-Type: application/x-javascript");
$config = array(
   "appmap" => array(
      "main"=>"/myfirst_app/index.php",
      "left"=>"/myfirst_app/left.php"
      )
   );
echo json_encode($config);
?>