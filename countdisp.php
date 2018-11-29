<?php $host='localhost';
$user='root';
$pass='';
$dbs='registration';
try{
	$DBH=new pdo("mysql:host=$host;dbname=$dbs",$user,$pass);
}catch(PDOException $e){
	echo"Not Connected..".$e->getMessage();
}

$ip = $_SERVER['REMOTE_ADDR'];
$number=$DBH->prepare("SELECT visitorid FROM visitors where userid='$username'");
$number->execute();
$visitor=$number->rowCount();
?>
