
<?php 

$url='';

if(isset($_POST['submit'])){ 
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "online_ide_user";            //Database User Name 
    $dbPass = "vanika";            //Database Password 
    $dbDatabase = "online_ide";    //Database Name 
     $url=$_POST['url'];
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase)or die("Error connecting to database."); 
    //Connect to the databasse 
    //mysqli_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $usr = mysqli_real_escape_string($conn,$_POST['username']); 
    //$pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
	$pas = mysqli_real_escape_string($conn,$_POST['password']); 
    $sql = mysqli_query($conn,"SELECT * FROM users_login  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysqli_num_rows($sql) == 1){ 
        $row = mysqli_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['fname'] = $row['first_name']; 
        $_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
		
       // header("Location: user_home.php?".$url); // Modify to go to the page you would like 
	   if($_POST['url']){
		 header("Location:".$url); // Modify to go to the page you would like 
        exit; 
	   }else {
		   header("Location:user_type_selection.php"); // Modify to go to the page you would like 
        exit;
	   }
    }else{ 
        header("Location: login_page.php"); 
		
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: login_page.php");     
    exit; 
} 
?> 
