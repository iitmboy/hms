

<?php

//include 'ext_functions.php';

//$user_ip=getRealIpAddr();







function getRealIpAddr()

{

    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet

    {

      $ip=$_SERVER['HTTP_CLIENT_IP'];

    }

    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy

    {

      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

    }

    else

    {

      $ip=$_SERVER['REMOTE_ADDR'];

    }

    return $ip;

}

function log_web_info(){

	include 'db.php';

if ($_SESSION['username'])

{

//print('user '.$_SESSION['username']." from ".getRealIpAddr());

$header=str_replace('"',"'",(implode(" ",$_SERVER)));

$sql = "insert into web_log(username,ip,header) values(\"".$_SESSION['username']."\",\"".getRealIpAddr()."\",\"".$header."\");";

}else

{

//print('user Not logged in'.$_SESSION['username']." from ".getRealIpAddr());

$sql = "insert into web_log(username,ip,header) values(\"".$_SESSION['username']."\",\"".getRealIpAddr()."\",\"".implode(" ",$_SERVER)."\");";	

}







if ($conn->query($sql) === TRUE) {

   // echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

}	



function session_check()

{

session_start(); 

log_web_info();

if(!$_SESSION['logged']){ 



//print('user '.$_SESSION['username']." from ".getRealIpAddr());

   header("Location: "."http://".$_SERVER['SERVER_NAME']."/login_page.php?url=".$_SERVER[REQUEST_URI]); 

    exit; 

	

	

}









}

?>