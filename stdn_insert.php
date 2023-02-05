
<?php require_once("bd_connect.php") ?>

<?php


if (isset($_REQUEST["F_name"]) || isset($_REQUEST["L_name"]) || isset($_REQUEST["pass"]) || isset($_REQUEST["email"])) {

  $F_name  =  $_REQUEST["F_name"];
  $L_name  =  $_REQUEST["L_name"];
  $pass    =  $_REQUEST["pass"];
  $email   =   $_REQUEST["email"];
  $photo   =   $_FILES["file"]["name"];
  $tmp_name   =   $_FILES["file"]["tmp_name"];


  $location = "student profile/";
  move_uploaded_file($tmp_name, $location.$photo);

  if ($connect == true) {


    $insrt  = "INSERT INTO
   all_student(F_name , student_photo , L_name , pass , email) 
  VALUES('$F_name' ,  '$photo'  , '$L_name' , '$pass' , '$email' )";





    $student_insert  =   mysqli_query($connect, $insrt);

    header("location:student_show.php");
  }
}

header("location:student_show.php");

?>