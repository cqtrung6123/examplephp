<?php
 include_once ("Config.php");
 if (isset($_POST['update'])){
     $id=$_POST['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     //update
     $result=mysqli_query($mysqli,"update student set name='$name',email='$email',mobile='$mobile' where id='$id'");
//quay lai index neu up thanh cong
     header("location:index.php");
 }
?>

<?php
$id=$_GET['id'];
echo $id;
$result=mysqli_query($mysqli,"select*from student where id=$id");
while($stu_data=mysqli_fetch_array($result)){
    $name=$stu_data['name'];
    $email=$stu_data['email'];
    $mobile=$stu_data['mobile'];
}
?>
<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        input{
            width: 100%;
        }
    </style>
</header>
<body>
<title>Update student information</title>
    <div class="container">
        <form name="updateStudent" method="post" action="edit.php">
            <table class="table table-bordered border-primary">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?php echo $name?>></td>
                    <td style="display: none"><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $email?>></td>
                    <td style="display: none" ><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value=<?php echo $mobile?>></td>
                    <td style="display: none"><input type="hidden"  name="id" value=<?php echo $_GET['id'];?>></td>
                </tr>
                <td><input type="submit" name="update" value="update"></td>
            </table>
        </form>
    </div>
</body>

</html>
