<?php
header('Access-Control-Allow-Origin: *');
require_once "configDB.php";
extract($_GET);
$sql="update todos set status=not status where id={$id} ";
$stmt=$db->exec($sql);

//refresh:
$sql="SELECT * FROM todos order by timestamp desc";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
//echo json_encode(["msg"=>$stmt]);
?>