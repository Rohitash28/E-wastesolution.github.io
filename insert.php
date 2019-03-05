<?php 
echo "<script>alert('Successfully Rajistered'); window.location='indexc.html';</script>";
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$mobile= $_POST["mobile"];
$con= pg_connect("host=localhost port=59206 dbname=A9bkrwN3f0pMQXEc user=postgre password=cse123");
$statment = "insert into register (name,email,mobile,password,repassword) values ('$name','$email','$mobile','$password','$repassword')";
$res = pg_query($statment);


?>


