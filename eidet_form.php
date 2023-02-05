
<?php require_once("bd_connect.php") ?>






<?php

  if ($_GET["id"]) {
     $edit = $_GET["id"];
     
     $select  =  "SELECT * FROM all_student WHERE ID=  $edit";

     $db_update =  mysqli_query($connect , $select);


if ($db_update==true) {
    

     while ($conform = mysqli_fetch_array($db_update)) {
         
        $F_name     =     $conform["F_name"];
        $L_name     =     $conform["L_name"];
        $pass       =     $conform["pass"];
        $email      =     $conform["email"];
        $id         =     $conform["id"];

 


     };

  };

}else{
header("location:student_show.php");

}


?>

<body>

<h1>update student</h1>
    <form action="update_code.php" method="post">
        <input type="text" name="F_name" placeholder="Fast name" value="<?php echo  $F_name ?>"><br><br>
        <input type="text" name="L_name" placeholder="Last name" value="<?php echo  $L_name ?>"><br><br>
        <input type="text" name="pass" placeholder="passowrd" value="<?php    echo  $pass ?>"><br><br>
        <input type="text" name="email" placeholder="name"    value="<?php    echo  $email ?>"><br><br><br>
        <input type="file" name="file"><br><br><br>
     <input type="hidden" name="edit_id" value="<?php   echo  $id ?>">

        <button type="submit" name="btn_update" > student update</button>
    </form>
</body>

</html> 

