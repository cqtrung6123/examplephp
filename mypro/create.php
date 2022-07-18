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
<header>

</header>
<a href="index.php"> Go to home</a>
<body>
    <form name="create" method="post" action="create.php">
        <table width="80%" border=1px>

            <tr>
                <td>Name</td>
                <td><input type="text" name="name" ></td>
            </tr>

            <tr>

                <td>Email</td>
                <td><input type="text" name="email" ></td>
            </tr>

            <tr>

                <td>Mobile</td>
                <td><input type="text" name="mobile" ></td>
            </tr>
            <tr>

                <td></td>
                <td><input type="submit" name="create" value="create"></td>
            </tr>

        </table>
    </form>
</body>
</html>

