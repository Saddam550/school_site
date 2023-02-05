 
<?php require_once("bd_connect.php") ?>


<?php


if (isset($_REQUEST["btn_update"])) {

   $F_name =   $_REQUEST["F_name"];
   $L_name =   $_REQUEST["L_name"];
   $pass   =   $_REQUEST["pass"];
   $email  =   $_REQUEST["email"];
   $editid =  $_REQUEST["edit_id"];

   $student = " UPDATE all_student SET  F_name = '$F_name' ,  L_name= '$L_name',  pass= '$pass' , email= '$email'
    WHERE id  =  '$editid'";




   $update =  mysqli_query($connect, $student);
}
if ($update == true) {


   header("location:student_show.php");
} else {
   header("location:eidet_form.php");
}


?>

