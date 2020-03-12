<?php
require_once('f.php');

if (isset($_GET['fm'])){
$pro = $_GET['fm'];
if ($pro == 1){
login();}
elseif ($pro == 2){
employer();}
elseif ($pro == 3){
jobseeker();}
elseif ($pro == 4){
del_employer();}
elseif ($pro == 5){
employer_del();}
elseif ($pro == 6){
msgs();}
elseif ($pro == 7){
del_update();}
elseif ($pro == 0){
logout();}
}else{}



function del_update(){
$query = "DELETE FROM updates WHERE id = '" . $_GET['id']."' LIMIT 1";
$sql = mysqli_query($query);
confirm($sql);
visit('../control/?s_=vacancies');
}


function msgs(){
$msg = clean($_POST['msg']);
$rdate = date("d/m/Y");
$query = "INSERT INTO updates(msg,rdate)VALUES('$msg','$rdate')";
$sql = mysqli_query($query);
confirm($sql);
@session_start();
visit('../control/?s_=vacancies');
}


function employer_del(){
$query = "DELETE FROM employer WHERE id = '" . $_GET['id']."' LIMIT 1";
$sql = mysqli_query($query);
confirm($sql);
visit('../control/?s_=employers');
}


function del_employer(){
$query = "DELETE FROM jobseeker WHERE id = '" . $_GET['id']."' LIMIT 1";
$sql = mysqli_query($query);
confirm($sql);
visit('../control/?s_=employees');
}


function employer(){
$fname = clean($_POST['fname']);
$oname = clean($_POST['oname']);
$phone1 = clean($_POST['phone1']);
$phone2 = clean($_POST['phone2']);
$email = clean($_POST['email']);
$agent = clean($_POST['agent']);
$biz = clean($_POST['biz']);
$biztype = clean($_POST['biztype']);
$bizadd = clean($_POST['bizadd']);
$phcn = clean($_POST['phcn']);
$cac = clean($_POST['cac']);
$bank = clean($_POST['bank']);
$bvn = clean($_POST['bvn']);
$accno = clean($_POST['accno']);
$accname = clean($_POST['accname']);
$state = clean($_POST['state']);
$lga = clean($_POST['lga']);
$town = clean($_POST['town']);
$locality = clean($_POST['locality']);
$street = clean($_POST['street']);
$landmark = clean($_POST['landmark']);
$ttpd = clean($_POST['ttpd']);
$countt = clean($_POST['countt']);
$volumee = clean($_POST['volumee']);
$neartobank = clean($_POST['neartobank']);
$rdate = date("d/m/Y");
	
$query = "INSERT INTO `employer` (`id`, `fname`, `oname`, `phone1`, `phone2`, `email`, `agent`, `biz`, `biztype`, `bizadd`, `phcn`, `cac`, `bank`, `bvn`, `accno`, `accname`, `state`, `lga`, `town`, `locality`, `street`, `landmark`, `ttpd`, `countt`, `volumee`, `neartobank`, `rdate`) VALUES (NULL, '$fname', '$oname', '$phone1', '$phone2', '$email', '$agent', '$biz', '$biztype', '$bizadd', '$phcn', '$cac', '$bank', '$bvn', '$accno', '$accname', '$state', '$lga', '$town', '$locality', '$street', '$landmark', '$ttpd', '$countt', '$volumee', '$neartobank', '$rdate');";
$sql = mysqli_query($query);
confirm($sql);
@session_start();
$_SESSION['er'] = 4;
visit('../employer.php');
}


function jobseeker(){
$name = clean($_POST['name']);
$phone = clean($_POST['phone']);
$addrss = clean($_POST['addrss']);
$gender = clean($_POST['gender']);
$idcard = clean($_POST['idcard']);
$idno = clean($_POST['idno']);
$nationality = clean($_POST['nationality']);
$soo = clean($_POST['soo']);
$lga = clean($_POST['lga']);
$hometown = clean($_POST['hometown']);
$dob = clean($_POST['dob']);
$pob = clean($_POST['pob']);
$mstat = clean($_POST['mstat']);
$sname = clean($_POST['sname']);
$addrss = clean($_POST['saddrss']);
$sphone = clean($_POST['sphone']);
$bvn = clean($_POST['bvn']);
$nok = clean($_POST['nok']);
$rela = clean($_POST['rela']);
$nokaddrss = clean($_POST['nokaddrss']);
$nokphone = clean($_POST['nokphone']);
$nokemail = clean($_POST['nokemail']);
$instattended = clean($_POST['instattended']);
$qual = clean($_POST['qual']);
$course = clean($_POST['course']);
$cert = clean($_POST['cert']);
$training = clean($_POST['training']);
$lang = clean($_POST['lang']);
$cname = clean($_POST['cname']);
$cphone = clean($_POST['cphone']);
$cemail = clean($_POST['cemail']);
$postt = clean($_POST['postt']);
$detailresp = clean($_POST['detailresp']);
$salary = clean($_POST['salary']);
$reason = clean($_POST['reason']);
$loan = clean($_POST['loan']);
$pplan = clean($_POST['pplan']);
$insubordination = clean($_POST['insubordination']);
$disciplinary = clean($_POST['disciplinary']);
$cash_shortage = clean($_POST['cash_shortage']);
$loss = clean($_POST['loss']);
$whathappened = clean($_POST['whathappened']);
$project = clean($_POST['project']);
$dur_project = clean($_POST['dur_project']);
$referee = clean($_POST['referee']);
$ofnmae = clean($_POST['ofnmae']);
$ofaddrss = clean($_POST['ofaddrss']);
$ofdept = clean($_POST['ofdept']);
$oftel = clean($_POST['oftel']);
// $illness = clean($_POST['illness']);
$duration = clean($_POST['duration']);
$illnesstype = clean($_POST['illnesstype']);
$email = clean($_POST['email']);
$checkup = clean($_POST['checkup']);
$hobby = clean($_POST['hobby']);
$notice = clean($_POST['notice']);
$rdate = date("d/m/Y");

$query = "INSERT INTO `jobseeker` (`id`, `name`, `phone`, `addrss`, `gender`, `idcard`, `idno`, `nationality`, `soo`, `lgaoo`, `hometown`, `dob`, `pob`, `mstat`, `spousename`, `spouseaddress`, `spousephone`, `bvn`, `nok`, `rela`, `nokadd`, `noktel`, `nokemail`, `instattended`, `quali`, `costudy`, `procert`, `trainingdetail`, `lang`, `employer`, `phoneno`, `compemail`, `postheld`, `respdetail`, `salary`, `leavereason`, `loan`, `repay`, `insobodination`, `discipl`, `cashshortage`, `lossclients`, `lossdetail`, `specialproject`, `duration`, `referee`, `officename`, `officeaddress`, `department`, `officetel`, `illness`, `illnesswhen`, `illnesstype`, `illnessdet`, `checkup`, `hobbies`, `requireemployer`, `rdate`) VALUES (NULL, '$name', '$phone', '$addrss', '$gender', '$idcard', '$idno', '$nationality', '$soo', '$lga', '$hometown', '$dob', '$pob', '$mstat', '$sname', '$addrss', '$sphone', '$bvn', '$nok', '$rela', '$nokaddrss', '$nokphone', '$nokemail', '$instattended', '$qual', '$course', '$cert', '$training', '$lang', '$cname', '$cphone', '$cemail', '$postt', '$detailresp', '$salary', '$reason', '$loan', '$pplan', '$insubordination', '$disciplinary', '$cash_shortage', '$loss', '$whathappened', '$project', '$dur_project', '$referee', '$ofnmae', '$ofaddrss', '$ofdept', '$oftel', '$illness', '$duration', '$illnesstype', '$email', '$checkup', '$hobby', '$notice', '$rdate');";
$sql = mysqli_query($query);
confirm($sql);
@session_start();
$_SESSION['er'] = 4;
visit('../employee.php');
}



function login(){
$uname = trim(clean($_POST['uname']));
$password = trim(clean($_POST['pword']));
$query = "SELECT * FROM `control` WHERE uname = '$uname' and pword = '$password'";
		$result = mysqli_query($query);
		confirm($result);
		$count = mysqli_num_rows($result);		
		@session_start();				
		$uname = mysqli_fetch_array($result);
		if ($count == 1){
		$_SESSION['control'] = $uname["id"];
		visit("../control");
		}else {	
		$_SESSION['er'] = 2;
		visit("../control/access");
		exit;
		} }
		
function start_jamb(){
$subj = $_SESSION['subj'] = $subj = clean($_POST['subj']);
$yr = $_SESSION['year'] = clean($_POST['year']);
visit('../?s_=manage_jamb&subj='.$subj."&yr=".$yr);
}




function jamb_edit(){
//$_SESSION['inst'] = $inst = clean($_POST["inst"]);
$subj = $_SESSION['subj'];
$year = $_SESSION['year'];
//$_SESSION['faculty'] = $faculty = clean($_POST["faculty"]);
$_SESSION['ques'] = $ques = clean(trim($_POST["ques"]));
$_SESSION['dep'] = $depn = clean(trim($_POST["dep"]));
$_SESSION['instr'] = $instr = clean(trim(clean($_POST["instr"])));
$_SESSION['qno'] = $qno = clean($_POST["qno"]);
$_SESSION['a'] = $a = clean($_POST["a"]);
$_SESSION['b'] = $b = clean($_POST["b"]);
$_SESSION['c'] = $c = clean($_POST["c"]);
$_SESSION['d'] = $d = clean($_POST["d"]);
$_SESSION['e'] = $e = clean($_POST["e"]);
$_SESSION['ans'] = $ans = clean($_POST["ans"]);
$_SESSION['solu'] = $solu = clean($_POST["solu"]);
$date = clean(date("d/m/Y"));
$id = $_POST["id"];
$pix = "../pume_pix/";
$pixname = basename($_FILES["pix"]["name"]);
if($pixname == ""){
$query = "UPDATE `".$subj."` SET  `ques` =  '$ques',`a` =  '$a', `b` =  '$b',`c` =  '$c', `d` =  '$d', `e` =  '$e', `ans` =  '$ans', `depn` =  '$depn', `instr` =  '$instr', `solu` =  '$solu'  WHERE `id` = ".$id;}
else{
$pix = $pix . $pixname;
move_uploaded_file($_FILES["pix"]["tmp_name"],$pix);

$query = "UPDATE `".$subj."` SET  `ques` =  '$ques',`a` =  '$a', `b` =  '$b',`c` =  '$c', `d` =  '$d', `e` =  '$e', `ans` =  '$ans', `depn` =  '$depn', `instr` =  '$instr', `solu` =  '$solu', `pix` =  '$pix'  WHERE `id` = ".$id;
	}
$sql = mysqli_query($query);
confirm($sql);
@session_start();
$_SESSION['state'] = 4;
visit('../?s_=manage_jamb&subj='.$subj."&yr=".$year);
}

function str($str){
//$str1 = str_replace("<p>","",$str);
//$str2 = str_replace("</p>","",$str1);
return $str;
}

// function jamb_new(){
// $subj = $_SESSION['subj'] = clean(trim($_POST["subj"]));
// $year = $_SESSION['year'] = clean(trim($_POST["year"]));
// $_SESSION['ques'] = $ques = clean(str(trim($_POST["ques"])));
// $_SESSION['dep'] = $depn = clean(str(trim($_POST["dep"])));
// $_SESSION['instr'] = $instr = clean(str(trim(clean($_POST["instr"]))));
// $_SESSION['qno'] = $qno = clean($_POST["qno"]);
// $_SESSION['a'] = $a = clean($_POST["a"]);
// $_SESSION['b'] = $b = clean($_POST["b"]);
// $_SESSION['c'] = $c = clean($_POST["c"]);
// $_SESSION['d'] = $d = clean($_POST["d"]);
// $_SESSION['e'] = $e = clean($_POST["e"]);
// $_SESSION['ans'] = $ans = clean($_POST["ans"]);
// $_SESSION['solu'] = $solu = clean(str($_POST["solu"]));
// $date = clean(date("d/m/Y"));
// $pix = "../pume_pix/";
// $pix = $pix . basename($_FILES["pix"]["name"]);
// move_uploaded_file($_FILES["pix"]["tmp_name"],$pix);

// $tbl = strtolower($subj);
// $query = "INSERT INTO ".$tbl." (sub,year,qno,ques,a,b,c,d,e,ans,pix,depn,instr,rdate,solu)VALUES('$subj','$year','$qno','$ques','$a','$b','$c','$d','$e','$ans','$pix','$depn','$instr','$date','$solu')";
// $sql = mysqli_query($query);
// confirm($sql);
// @session_start();
// visit('../?s_=add_jamb');
// }

function logout(){
header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();
	// Unset session data
	//$_SESSION=array();
	// or...
	session_unset();
	// Clear the session cookie
	unset($_COOKIE[session_name()]);
	// Destroy session data
	session_destroy();
	visit("../control/access");
}
?>