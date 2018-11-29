<?php 
$host='localhost';
$user='root';
$pass='';
$db='registration';
try{
	$DBH=new pdo("mysql:host=$host;dbname=$db",$user,$pass);
}catch(PDOException $e){
	echo"Not Connected..".$e->getMessage();
}

$ip = $_SERVER['REMOTE_ADDR'];
$sql="SELECT visitorid FROM visitors WHERE userid='$userid' AND visitorid='$visitorid'";
$Check=$DBH->prepare($sql);
$Check->execute();
$CheckIp=$Check->rowCount();
if ($CheckIp==0) {
$query="INSERT INTO visitors(userid,visitorid,ip) VALUES('$userid','$visitorid','$ip')";
$insertIP=$DBH->prepare($query);
$insertIp=$DBH->prepare($query);
$insertIp->execute();
}
?>