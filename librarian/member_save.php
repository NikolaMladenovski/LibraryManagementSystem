<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type=$_POST['type'];



								
mysqli_query($mysqli,"insert into member(firstname,lastname,email,contact,type) values('$firstname','$lastname','$email','$contact','$type')")or die(mysql_error());
 
 
header('location:member.php');
}
?>	