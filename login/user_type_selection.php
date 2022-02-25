


<?php
include './control/session.php';
include './control/db.php';
include './control/common.php';
session_check();
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
Dear <?php echo $_SESSION['fname']; ?>, you have multiple role assigned to you, please choose one to proceed.<br>
<form action='home.php' method='post'>
<?php


    
    $result_out="";

    echo "<br><br><select name='user_role' id='user_role' style='width: 190px;'>";


    $sql = "SELECT * FROM users_login where username='".$_SESSION['username']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            //  $name=$row["name"];
            // $season=$row["season"];
            // $episode=$row["episode"];
            $result_out=$row["user_roles"];

                        
        }
    }else
    {
        echo 'ERROR:Cant Set role';
    }
	$user_roles_array=explode('|',$result_out);
	$user_roles_array_size=sizeof($user_roles_array);
	if ($user_roles_array_size > 1)
	{
	for ($i=0;$i<$user_roles_array_size;$i++)
	{
  echo "<option value='".$user_roles_array[$i]."'>".$user_roles_array[$i]."</option>";
	}
			  
echo "</select><br><br><br>";
echo "<input type='submit' value='Set Role'><br><br>"; 
echo "</form>"; 
	}else{
		
		
	}
?>
</div>
</body>
</html>
