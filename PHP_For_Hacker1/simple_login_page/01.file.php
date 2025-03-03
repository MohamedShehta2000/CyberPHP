<?php
//$user = $_POST['username']; 
$user = htmlspecialchars($_POST['username']); // to avoid XSS vulnerability
//$pass = $_POST['password'];
$pass = htmlspecialchars($_POST['password']); 
    
echo "your username is : ".$user."<br>";
echo "your password is : ".$pass."<br>";
    
?>