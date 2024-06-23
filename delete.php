<?php
include "conn.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM data WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:show.php?msg=Record deleted successfully"); 
      }else{
        echo "no it's not possible";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete Data</title>
</head>
</html>
