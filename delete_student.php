<?php require_once("bd_connect.php") ?>
<?php 

if (isset($_GET["id"])) {
   $delete_id =  $_GET["id"];

$delete = "DELETE FROM all_student WHERE all_student . id = $delete_id";
$delete_conf =  mysqli_query($connect, $delete);
if ($delete_conf == true) {

    header("location:student_show.php");
}

}

header("location:student_show.php");

?>

