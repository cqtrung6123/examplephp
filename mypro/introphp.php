<?php
//comment
#comment
/*
 * line
 */
$myData='php code';//$bien
$myVar=200;
$nameOfVar=23.3;
$content='myShop';
echo $content;
echo 'The data of variable'.$myData.'<br>';
echo gettype($myData).'<br>';
echo gettype($myVar);
//display with html
echo "<h1>this is content h1</h1>";
echo "<h1 style='color: blue'>this is content h1 blue</h1>";
//display with variable
$student=array("Thao","Bac","Son");
echo $student[2].'<br>';
print_r($student);
print "<h1 style='color: rebeccapurple'>this is content h1 blue</h1>";//chi sd voi string
$mark=array('thao'=>10,'bac'=>12);
print_r($mark);
$mark1['Thao']=10;
//sort
echo '<br>';
sort($student);//tang dan
rsort($student);//giam dan
print_r($student);

//loop:for while do{} while()
for ($i=0; $i<=10;$i++){
    echo 'The result is'.$i.'<br>';
}
//forech
$employee=array('Linh','trung','thao','duc');
foreach ($employee as $emp) {
    echo $emp.'<br>';
}
?>
