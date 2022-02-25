<html><head><title></title></head>
<body>
<?php 
session_start(); 

session_destroy();

    header("Location: login_page.php"); 
    exit;  
?> 

<body>
</html>