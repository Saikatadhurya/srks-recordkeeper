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

$sql="SELECT ip FROM visitors WHERE ip='$ip'";
$Check=$DBH->prepare($sql);
$Check->execute();
$CheckIp=$Check->rowCount();
if ($CheckIp==0) {
$query="INSERT INTO visitors(id,ip) VALUES(NULL,'$ip')";
$insertIP=$DBH->prepare($query);
$insertIp=$DBH->prepare($query);
$insertIp->execute();

}
$number=$DBH->prepare("SELECT ip FROM visitors");
$number->execute();
$visitor=$number->rowCount();
echo $visitor;
 ?>