<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];

$name=$_POST['name'];
$DSCR=$_POST['DSCR'];
$date=$_POST['date'];
$caption=$_POST['caption'];



$filetmp = $_FILES["file_img"]["tmp_name"];
$filename = $_FILES["file_img"]["name"];
$filetype = $_FILES["file_img"]["type"];
$filepath = "../sliki/nastani/".$filename;
if(!getimagesize($_FILES['file_img']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}



$status='a';
								
								
mysqli_query($mysqli,"update events set event_name='$name',event_dscr='$DSCR',event_date='$date',date_added=NOW(),img_path='$filepath',img_type='$filetype',img_name='$filename',img_caption='$caption',status='$status' where event_id ='$id'")
 or die(mysqli_error($mysqli));
 
move_uploaded_file($filetmp,$filepath);

								
								
 header('location:nastani.php');
}
?>	