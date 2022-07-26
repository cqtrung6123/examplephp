<?php
include_once ('Config.php');
session_start();
if (isset($_SESSION['loggedin'])==false){
    header("location:login.php");
}else{
    $result=mysqli_query($mysqli,'SELECT*FROM student ORDER BY id DESC');
}
?>

<html>
<header>
    <!-- CSS only -->
    <style>
        body{
            font-family: Arial,sans-serif;
        }
        .container{
            margin-top:5% ;
        }
        .search-box{
            width: 100%;

            margin-bottom: 20px;
        }
        .result{
            position: relative;
            z-index: 999;
            top: 100%;
            left: 0;
        }
        .result p:hover{
            border: aqua;
            background: #f2f2f2;
        }
        i{
            width: 40px;
            height: auto;
            margin-top: -25px;
        }
        button{
            margin-bottom: 60px;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script>
        $(document).ready(function (){
            $('.search-box input[type="text"]').on("keyup input",function (){

                /* get input value on change */
                var inputVal=$(this).val();
                var resultDropdown=$(this).siblings(".result");
                if (inputVal.length){
                    $.get("backend.php",{term:inputVal}).done(function (data){
                        //display the return data in browser
                        resultDropdown.html(data);
                    });
                }else {
                    resultDropdown.empty();
                }
            });
            //set search input value on click of result item
            $(document).on("click",".result p",function (){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
</header>

<body>
<div class="container">

        <div class="search-box">
            <button class="btn btn-info float-start" style="margin-bottom: 15px ;background-color: saddlebrown"><a href="create.php"> Add student</a></button>
            <input class="form-control border-success" type="text" autocomplete="off" placeholder="search student....">
            <i class="bi bi-search float-end"></i>
            <div class="result" ></div>
        </div>

    <table  class="table table-bordered border-primary">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Update</th>
        </tr>
        <?php
        while ( $stu_data=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $stu_data["name"]."</td>";
            echo "<td>". $stu_data["email"]."</td>";
            echo "<td>". $stu_data["mobile"]."</td>";
            echo "<td><a href=edit.php?id=$stu_data[id]>Edit</a><a style='margin-left: 4px' href=delete.php?id=$stu_data[id]>Delete</a></button></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <button class="btn btn-primary"><a href="logout.php" style="color: black">Log out</a></button>
</div>
</body>
</html>

