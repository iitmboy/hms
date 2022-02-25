


<?php

if ($_GET['url'])
{
	
 $req=$_GET['url'];
 //echo $req;
}

?>

<html><head><title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<style>
.login{
   border-style: solid;
    border-width: 1px;
	width:190px;
	margin:200px;
	margin-left:500px;
	padding:20px;
	background-color:lightblue;
}

.login input{
width:190px;

}
@media (max-width: 600px) {
    .login{
    width: 100%;  
    margin-left:0px; 
     
    }
    
}

</style>
</head>
<body>
<div class='login' value='Login'>
<form action="verify.php" method="post"> 
    User Name:<br> 
    <input type="text" name="username"><br><br> 
    Password:<br> 
    <input type="password" name="password"><br><br> 
	<input type="hidden" name="url" value='<?php echo $req;?>'>
    <input type="submit" name="submit" value="Login"> 
</form>
</div>
</body>
</html>