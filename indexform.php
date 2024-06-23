<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body>

<div class="container text-center bg-light "> 
  <h2 class="text-primary">Student Information</h2>
  <form  id="formAction" method="post">
    <div class="col-4 m-auto">
      <div class="input-group mt-3"> 
        <span class="input-group-text">Name</span>
        <input type="text" class="form-control border-secondary" id="name" name="name">
      </div>
      <div class="input-group  border-secondary mt-3">
        <span class="input-group-text">Year</span>
        <select class="form-select border-secondary" id="year" name="year">
          <option selected>Select year</option><hr>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">Department</span>
        <input type="text" class="form-control border-secondary" id="department" name="department">
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">College</span>
        <input type="text" class="form-control border-secondary" id="college" name="college">
      </div>
      <div class="input-group mt-3">
        <span class="input-group-text">Contact</span>
        <input type="text" class="form-control border-secondary" id="contact" name="contact">
      </div>
      <button type="submit" class="btn btn-info mt-3 rounded-pill w-25"  id="submit" name="submit">Save</button>
    </div> 
 </form>
</div>
</body>
</html>   

<?php
include "conn.php";
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $year=$_POST['year'];
  $department=$_POST['department'];
  $college=$_POST['college'];
  $contact=$_POST['contact'];
  $sql="INSERT INTO `data`(`name`, `year`, `department`, `college`, `contact`) VALUES ('$name','$year','$department','$college','$contact')";
  $result =mysqli_query($con,$sql);
  if($result){
    header("Location:show.php?msg=Record created successfully");
  }
  else{
    echo "Failed...";
  }
}
?> 

  