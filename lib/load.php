<?php
require_once('f.php');

$c = $_POST['count'];
$query = "SELECT * FROM `subclass` WHERE CLASS = '"."$c'";
$messages = mysql_query($query) or die("Record not found");
confirm($messages);
while ($sub = mysql_fetch_array($messages)){
	$rid = "<option value=\"".$sub['subclass']."\">".$sub['subclass']."</option>";
echo $rid;
}
?>