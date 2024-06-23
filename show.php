<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student display</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <button class="btn btn-primary mt-5 "><a href="indexform.php" class="text-light">Add Student Data</a></button>
      <div class="row">
         <div class="col-8 m-auto">
            <table class="table table-bordered mt-3">
               <thead class="text-center bg-warning text-black"> 
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Year</th>
                     <th>Department</th>
                     <th>College</th>
                     <th>Contact</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody id="tableBody">
                    <?php
                      $sql1="SELECT * FROM data ";
                      $res=mysqli_query($con,$sql1);
                      if($res){
                         while($row=mysqli_fetch_assoc($res)){
                             $id=$row['id'];
                             $name=$row['name'];
                             $year=$row['year'];
                             $department=$row['department'];
                             $college=$row['college'];
                             $contact=$row['contact'];
                             echo ' <tr>
                             <th scope="row">'.$id.'</th>
                             <td>'.$name.'</td>
                             <td>'.$year.'</td>
                             <td>'.$department.'</td>
                             <td>'.$college.'</td>
                             <td>'.$contact.'</td>
                             <td>
                                &nbsp;<button class="btn btn-info"><a href="update.php?updateid='.$id.' " class="text-light">Update</a></button>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger" onclick="return fnDelete()"><a href="delete.php?deleteid='.$id.' " class="text-light">Delete</a></button>
                              </td>
                           </tr>';
                            }
                        } 

                    ?> 

        
                </tbody>
            </table>
         </div> 
     </div>

   </div> 
</body>  
<script type="text/javascript">
        function fnDelete(){
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
 </html>     