<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
<?php
	function lga_slip(){
require_once 'classes\PHPExcel\IOFactory.php';
include'../lib/conn.php';
$sn = 0;
$query = "SELECT * FROM `lgas` LIMIT 5"; 
$result = mysql_query($query) or die('Error, query failed');
while ($sub = mysql_fetch_array($result)){
$sn = $sn + 1;
$id = $sub['STATE'];
if ($sn % 2 == 0){$cl = "<tr style=\"background-color:#f0f0f0;\">";}else {$cl = "<tr style=\"background-color:#ffffff;\">";}
$data = $cl . "<td width=\"20\">".$sn."</td>
    <td width=\"350\">".$sub['NAME']."</td>
    <td width=\"34\"><a href=\"slip.php?sort=".$sub['STATE']."&status=VTS\" target=\"_blank\">".countwrklga("VTS",$id)."</a></td>
    <td width=\"39\"><a href=\"slip.php?sort=".$sub['STATE']."&status=FTS\" target=\"_blank\">".countwrklga("FTS",$id)."</a></td>
    <td width=\"35\"><a href=\"slip.php?sort=".$sub['STATE']."&status=NOM\" target=\"_blank\">".countwrklga("NOM",$id)."</a></td>
    <td width=\"58\"><a href=\"slip.php?sort=".$sub['STATE']."&status=Permanent\" target=\"_blank\">".countwrklga("Permanent",$id)."</a></td>
    <td width=\"88\">".count_wrklga($id)."</td>
    <td width=\"109\"><a href=\"slip.php?sort=".$sub['STATE']."\" target=\"_blank\">Generate Payslip</a> </td>";
  echo $data;
 
}
echo "<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table><p>&nbsp;</p>";
}	
	
       
	// include("../header.php");

        $filename = 'accounting.xlsx'; // create a new file if you prefer a different name
       
        //connect to database
        $con = mysql_connect($host, $user, $password, $database_name) or die();
        mysql_select_db($database_name, $con) or die();
        
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($filename);
		$objworksheet = $objPHPExcel->getActiveSheet();
		$objworksheet = $objPHPExcel->setActiveSheetIndex(0);

$query = "SELECT * FROM `lgas` LIMIT 5"; 
$result = mysql_query($query) or die('Error, query failed');
$col = 1;
while ($sub = mysql_fetch_array($result)){
	$row = 1;
	
	;}
        ?>
    </body>
</html>
