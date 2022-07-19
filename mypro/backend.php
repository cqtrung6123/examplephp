<?php
$connect=mysqli_connect("localhost","root","","myprocrud");
//check connection
if($connect===false){
    die("ERROR:could not connect.".mysqli_connect_error());
}
if(isset($_REQUEST["term"])){
    //prepare a select statement
    $sql="select*from student where name like ?";
    if ($stmt=mysqli_prepare($connect,$sql)){
        //blind variable to the perpared statement as parameters
        mysqli_stmt_bind_param($stmt,"s",$param_term);
        //set parameters
        $param_term=$_REQUEST["term"].'%';
        //attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            //check number of row in the result set
            if(mysqli_num_rows($result)>0){
                //fetch result row as an associative array
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<p>".$row["name"]."</p>";

                }
            }else{
                echo "<p>no matches found </p> ";

            }
        }else{
            echo "ERROR: could not able to execute $sql.".mysqli_error();
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($connect);

?>

