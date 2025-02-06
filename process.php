<?php 
include("connect.php");
IF(isset($_POST["create"] )){
    $title=mysqli_real_escape_string($conn,$_POST["title"]); 
    $author=mysqli_real_escape_string($conn,$_POST["author"]); 
    $type=mysqli_real_escape_string($conn,$_POST["type"]); 
    $description=mysqli_real_escape_string($conn,$_POST["description"]); 
    $sql="INSERT INTO books(title,author,type,description) VALUES('$title','$author','$type','$description')";
   if( mysqli_query($conn,$sql)){
     session_start();
     $_SESSION["create"]="New book added";
     header("Location:index.php");
   }else{
    die("Somethingwent wrong");
   }
}
IF(isset($_POST["edit"] )){
  $title=mysqli_real_escape_string($conn,$_POST["title"]); 
  $author=mysqli_real_escape_string($conn,$_POST["author"]); 
  $type=mysqli_real_escape_string($conn,$_POST["type"]); 
  $description=mysqli_real_escape_string($conn,$_POST["description"]); 
  $id=mysqli_real_escape_string($conn,$_POST["id"]); 

  $sql="UPDATE books SET title ='$title',author='$author',type='$type',description='$description' WHERE id=$id";
 if( mysqli_query($conn,$sql)){
  session_start();
  $_SESSION["update"]="New book added";
  header("Location:index.php");
 }else{
  die("Somethingwent wrong");
 }
}
?>