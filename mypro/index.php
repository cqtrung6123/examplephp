
<?php
    include_once ('Config.php');
    $result=mysqli_query($mysqli,'SELECT*FROM student ORDER BY id DESC');
?>
<html>
<body>
<h3><a href="create.php"> Add student</a></h3>
<table width="80%" border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>mobile</th>
        <th>Option</th>
    </tr>
    <?php
    while ( $stu_data=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $stu_data["name"]."</td>";
        echo "<td>". $stu_data["email"]."</td>";
        echo "<td>". $stu_data["mobile"]."</td>";
        echo "<td><a href=edit.php?id=$stu_data[id]>Edit</a><a href=delete.php?id=$stu_data[id]>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

