<?php require_once("bd_connect.php") ?>


<center>search Student</center>
<a href="student_show.php" > Go To Back </a>

<center>
  <form action="" method="post">
    <input type="text" name="search">
    <input type="submit" value="search">

  </form>
</center>

<table>
  <tr>
    <td>id</td>
    <td>photo</td>
    <td>F_name</td>
    <td>L_name</td>
    <td>pass</td>
    <td>Email</td>
    <td>Date_time</td>
    <td>Add Student</td>
    <td>Update</td>
    <td>Delete</td>
  </tr>
                

  <?php


  $student_show = "SELECT id , student_photo, F_name , L_name ,  pass , email , date_time FROM all_student";
  if(isset($_REQUEST["search"])){
  
    $search_btn = $_REQUEST["search"];
   $student_show  =  "SELECT * FROM all_student WHERE F_name LIKE '%$search_btn%' ORDER BY student_photo ASC";

  
  $connect_show = mysqli_query($connect, $student_show);
  if ($connect_show == true) {
    while ($show = mysqli_fetch_assoc($connect_show)) {
      $id         =   $show["id"];
   $student_photo =   $show["student_photo"];
      $F_name     =     $show["F_name"];
      $L_name     =   $show["L_name"];
      $pass      =      $show["pass"];
      $email      =     $show["email"];
      $date_time  =     $show["date_time"];

  ?>
      <tr>
        <td><?php echo $id; ?></td>
        <td>
          <center> <img src="student profile/<?php echo $student_photo  ?>" width="30px" alt=" <?php echo $student_photo ?>"> </center>
        </td>
        <td> <?php echo $F_name; ?> </td>
        <td><?php echo $L_name; ?></td>
        <td><?php echo $pass; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $date_time; ?></td>
        <td><a href='stdn_insert_form.php'></> Add student</td>
        <td><a href='eidet_form.php?id=<?php echo $id  ?>'>Update</a></td>
        <td><a onclick=' return confirm("are you sure")' href="delete_student.php?id=<?php echo  $id ?>"> Delete</a></td>

      </tr>
  <?php
    }
  };}else{
    echo "Sorry Not a Student";
  }



  ?>

</table>

