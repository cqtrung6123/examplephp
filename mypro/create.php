<?php
include_once ("Config.php");
if(isset($_POST['create'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $result=mysqli_query($mysqli,"INSERT INTO student(name,email,mobile) VALUES ('$name','$email','$mobile')");
    echo "successful";
}
?>
<html>
<head>
    <link rel="stylesheet"
          href = "http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{font: 14px sans-serif}
    </style>
</head>
<h2><a href="index.php"> Go to home</a></h2>
<body>
    <form name="create" method="post" action="create.php">
        <table width="80%" border=1px>

            <tr>
                <td>Name</td>
                <td><input class="form-control" type="text" name="name" ></td>
            </tr>

            <tr>

                <td>Email</td>
                <td><input class="form-control" type="text" name="email" ></td>
            </tr>

            <tr>

                <td>Mobile</td>
                <td><input class="form-control" type="text" name="mobile" ></td>
            </tr>

        </table>
        <td><input class="btn btn-primary" type="submit" name="create" value="create"></td>
    </form>
</body>
</html>

