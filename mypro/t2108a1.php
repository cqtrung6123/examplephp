<?php
require 'Student.php';
$objStudent=new Student();
//set
$objStudent ->id=1;
$objStudent->studentName='Trang';
//get
echo  $objStudent ->id;
echo  $objStudent -> studentName;

echo  $objStudent ->getStudentInfo();
?>
