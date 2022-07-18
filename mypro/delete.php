<?php
 include_once ('Config.php');
 $id=$_GET['id'];
    $result=mysqli_query($mysqli,"DELETE FROM student where id='$id'");
    header('location:index.php');
?>
