<?php
header('Access-Control-Allow-Origin: *');
require_once "configDB.php";
$sql="SELECT * FROM todos order by timestamp desc";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());

?>