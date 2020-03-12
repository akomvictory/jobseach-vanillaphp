<?php
include("dbcon.php");
@session_start();

function page(){
if (isset($_GET['s_'])){
$pg = $_GET['s_'];
switch ($pg):
case "employees":
$page = "employees.php";
break;
case "employers":
$page = "employers.php";
break;
case "vacancies":
$page = "vacancies.php";
break;
case "seeker_detail":
$page = "xseeker.php";
break;
case "employer_detail":
$page = "xemployer.php";
break;
default:
$page = "main.php";
endswitch;
}	
else{
$page = "main.php";
}
return $page;
}



function msgx(){
$query = "SELECT * FROM updates ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($query) or die('Error, query failed');
$sub = mysqli_fetch_array($result);
echo $sub['msg'];
}


function announce(){
$query = "SELECT * FROM `updates` ORDER BY id DESC LIMIT 10";
$messages = mysqli_query($query) or die("Record not found");
confirm($messages);
while ($sub = mysqli_fetch_array($messages)){
	$rid = ' <tr>
    <td>'.$sub['msg'].'</td>
    <td>'.$sub['rdate'].'</td>
    <td> <button class="btn btn-danger" onclick="mex(\'../lib/ff.php?fm=7&id='.$sub['id'].'\')">Delete</button></td>
  </tr>';
echo $rid;}
}



function aprok($var){
$id = $_GET["id"];
$query = "SELECT * FROM employer WHERE id = ". $id ;
$result = mysqli_query($query) or die('Error, query failed');
$sub = mysqli_fetch_array($result);
echo $sub[$var];
}


function employer_view(){
$query = "SELECT * FROM `employer` ORDER BY id DESC LIMIT 20";
$messages = mysqli_query($query) or die("Record not found");
confirm($messages);
while ($sub = mysqli_fetch_array($messages)){
	$rid = ' <tr>
    <td>'.$sub['biz'].'</td>
    <td>'.$sub['phone1'].'</td>
    <td>'.$sub['biztype'].'</td>
    <td>'.$sub['bizadd'].'</td>
    <td>'.$sub['state'].'</td>
    <td><button class="btn btn-success" onclick="location.assign(\'?s_=employer_detail&id='.$sub['id'].'\')">View</button> | <button class="btn btn-danger" onclick="mex(\'../lib/ff.php?fm=5&id='.$sub['id'].'\')">Delete</button></td>
  </tr>';
echo $rid;}
}


function logged(){
if(!isset($_SESSION['control'])){
	visit("../control/access");
}
		
}

function img($str){
$str1 = str_replace("../pume_pix/","",$str);
$str2 = str_replace("PNG","jpg",$str1);
return $str2;
}

function employ_view(){
$query = "SELECT * FROM `jobseeker` ORDER BY id DESC LIMIT 20";
$messages = mysqli_query($query) or die("Record not found");
confirm($messages);
while ($sub = mysqli_fetch_array($messages)){
	$rid = ' <tr>
    <td>'.$sub['name'].'</td>
    <td>'.$sub['phone'].'</td>
    <td>'.$sub['gender'].'</td>
    <td>'.$sub['soo'].'</td>
    <td>'.$sub['dob'].'</td>
    <td><button class="btn btn-success" onclick="location.assign(\'?s_=seeker_detail&id='.$sub['id'].'\')">View</button> | <button class="btn btn-danger" onclick="mex(\'../lib/ff.php?fm=4&id='.$sub['id'].'\')">Delete</button></td>
  </tr>';
echo $rid;}
}

	
function nxt(){
echo $_GET["qno"] + 1;	
}

function pre(){
	$id = $_GET["qno"] - 1;
	if($id < 1){echo 1;}else{echo $id;}
}

function tunnel(){
if (!isset($_SESSION['id'])){
visit("../login.php");
}}

function aprokoimg(){
if (isset($_SESSION["year"])){
$yr = $_SESSION["year"];
$qno = $_GET["qno"];
$query = "SELECT * FROM ques WHERE qno = ". $qno . " AND year = ". $yr;
$result = mysqli_query($query) or die('Error, query failed');
$sub = mysqli_fetch_array($result);
echo "<img src=\"".substr($sub["pix"],3)."\" height=\"100\" width=\"100\">";
}
else{echo "No year set";
}
}

function aproko($var){
$id = $_GET["id"];
$query = "SELECT * FROM jobseeker WHERE id = ". $id ;
$result = mysqli_query($query) or die('Error, query failed');
$sub = mysqli_fetch_array($result);
echo $sub[$var];
}



function faculty(){
$query = "SELECT * FROM faculty";
$result = mysqli_query($query) or die('Error, query failed');
while ($sub = mysqli_fetch_array($result)){
$info = "<option value= '";
$info .= $sub['code'] . "'>" . $sub['name'] . "</option>";
echo ($info);
}}

function inst(){
$query = "SELECT * FROM pume_inst";
$result = mysqli_query($query) or die('Error, query failed');
while ($sub = mysqli_fetch_array($result)){
$info = "<option value='";
$info .= $sub['code'] . "'>" . $sub['inst'] . "</option>";
echo ($info);
		}}
		
function escape_value( $data ) {
	    if( ini_get ( 'magic_quotes_gpc') ) {
	        $data = stripslashes($data);
	        }
	    return mysqli_real_escape_string($data);
	}
	 
function clean($value){
return htmlentities(escape_value($value));
}

function visit($link){
header("Location: {$link}");
exit;
}

function er(){
if (isset($_SESSION['er'])){
$var = $_SESSION['er'];
switch ($var){
case 1:
$error = "Saved. ";
break;
case 2:
$error = "Invalid login credentials";
break;
case 3:
$error = 'The passwords you entered do not match';
break;
case 4:
$error = 'Your data was submitted successfully';
break;
case 5:
$error = "Invalid password";
break;
case 6:
$error = "Your application size is more than 1mb";
break;
default:
$error = "";
break;
}$response = '<div style="color:green;" >';
$response .= $error;
$response .= '</div>';
echo $response; unset($_SESSION['er']);}
else {echo "";}
}

function confirm($result){
	if (!$result){
	die("Could not connect " . mysql_error());
	}}
	
function count_seeker(){
$result = mysql_query("SELECT * FROM jobseeker") or die("0");
$num_rows = mysql_num_rows($result);
echo $num_rows;
}


function count_giver(){
$result = mysql_query("SELECT * FROM employer") or die("0");
$num_rows = mysql_num_rows($result);
echo $num_rows;
}


function error(){
	if (isset($_GET["flg"])){
echo ("<p class=\"error\">Invalid Login credentials!</p>");}	
}



// fuction to fetch information
function fetch($tbl_name,$field,$id){
global $connection;
	$query = "SELECT * ";
		$query .= "FROM ";
		$query .= $tbl_name;
		$query .= " WHERE ";
		$query .= $field;
		$query .= " = ";
		$query .= $id;
		//$query .= " LIMIT 1";
		$result = mysql_query($query, $connection);
		confirm($result);
		$uname = mysql_fetch_array($result);
		return $uname;}
?>