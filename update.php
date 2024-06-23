<?php
include "conn.php";
$id=$_GET['updateid'];
$sql=" SELECT * FROM student WHERE id=$id ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$year=$row['year'];
$department=$row['department'];
$college=$row['college'];
$contact=$row['contact'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $year=$_POST['year'];
  $department=$_POST['department'];
  $college=$_POST['college'];
  $contact=$_POST['contact'];
  $sql=" UPDATE data SET id ='$id',name='$name',year='$year',department='$department',college='$college',contact='$contact' WHERE id=$id ";
  $result =mysqli_query($con,$sql);
  if($result){
    header("Location:show.php?msg=Record created successfully");
  }
  else{
    echo "Failed...";
  }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<div class="container text-center bg-light "> 
  <h2 class="text-primary">Student Information</h2>
  <form  id="formAction" method="post">
    <div class="col-4 m-auto">
      <div class="input-group mt-3"> 
        <span class="input-group-text">Name</span>
        <input type="text" class="form-control border-secondary" id="name" name="name" value=<?php echo $name;?> >
      </div>
      <div class="input-group  border-secondary mt-3">
        <span class="input-group-text">Year</span>
        <select class="form-select border-secondary" id="year" name="year" value=<?php echo $year;?>>
          <option selected>Select year</option><hr>
          <option value="1" 
            <?php
              if($year=='1') 
              {echo "selected";}
            ?>
         >1</option>
          <option value="2"
            <?php
              if($year=='2') 
              {echo "selected";}
            ?>
          >2</option>
          <option value="3"
            <?php
              if($year=='3') 
              {echo "selected";}
            ?>
          >3</option>
          <option value="4"
            <?php
              if($year=='4') 
              {echo "selected";}
            ?>
            >4</option>
        </select>
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">Department</span>
        <input type="text" class="form-control border-secondary" id="department" name="department" value=<?php echo $department;?>>
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">College</span>
        <input type="text" class="form-control border-secondary" id="college" name="college" value=<?php echo $college;?>>
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">Contact</span>
        <input type="text" class="form-control border-secondary" id="contact" name="contact" value=<?php echo $contact;?>>
      </div>
      <button type="submit" class="btn btn-info mt-3 rounded-pill w-25"  id="submit" name="submit" onclick="myFunction()">Update</button>
    </div> 
 </form>
</div>
<script type="text/javascript">
  function myFunction()
  {
    alert("Well done data updated successfully");
  }
</script>
</body>
</html>