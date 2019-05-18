<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];

$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];



$filetmp = $_FILES["file_img"]["tmp_name"];
$filename = $_FILES["file_img"]["name"];
$filetype = $_FILES["file_img"]["type"];
$filepath = "../LMS/".$filename;
if(!getimagesize($_FILES['file_img']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}


$filefiletmp = $_FILES["file_file"]["tmp_name"];
$filefilename = $_FILES["file_file"]["name"];
$filefiletype = $_FILES["file_file"]["type"];
$filefilepath = "../knigi/".$filefilename;

$status='a';
								

 mysqli_query($mysqli,"update ebooks set book_title='$book_title',book_author='$author',category_name='$category_id'
,img_path = '$filepath',img_type = '$filetype',file_name = '$filefilename',file_path = '$filefilepath',file_type = '$filefiletype',copyright_year = '$copyright_year',isbn = '$isbn',img_name = '$filename',status='$status' where book_id='$id'")or die(mysqli_error($mysqli));
 
move_uploaded_file($filetmp,$filepath);
move_uploaded_file($filefiletmp,$filefilepath);

								
								
 header('location:e_knigi.php');
}
?>	