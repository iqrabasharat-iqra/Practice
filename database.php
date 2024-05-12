<!DOCTYPE html>
<?php
session_start();
ob_start();

$conn = mysqli_connect("localhost" , "root" , "" , "second");
// if (!isset( $_SESSION['user_id'])) {
//   header("location:login.php");
// }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
  </head>
  <style>
    #navbar1{
  width: 50%;
  margin-left: 600px;
  margin-top:30px;
  
}
#navbar1 button{
  margin: 15px;
}
  </style>
  <body>
    <?php
if(isset($_SESSION['del'])){ ?>

  <div class="alert alert-success alert-dismissible mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>

<?php
  echo $_SESSION['del'];

  unset($_SESSION['del']);



 ?>
</p>
</div>
<?php } ?>

<?php
if(isset($_SESSION['edit'])){ ?>

  <div class="alert alert-success alert-dismissible mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>

<?php
  echo $_SESSION['edit'];

  unset($_SESSION['edit']);



 ?>
</p>
</div>
<?php } ?>
<?php
$show = "select * from project";
$ren = mysqli_query($conn, $show);
?>



<div  id="navbar1" style="width:100%; " >
    
      
    <a href="data.php"><button type="submit" name="button" class="btn btn-outline-primary">ADD DATA</button></a>
    <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">VIEW DATA</button></a>
    <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">EDIT</button></a>
    <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">DELETE</button></a>

    
    
 
   </div>
  

<h2 class="text-center bg-primary">Database</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control"><br>
<table class="table table-border table-striped table-dark" id="myTable">
<tr>
<th>ID</th>
<th>Sample No</th>
<th>Registration Date</th>
<th>Name</th>
<th>Father Name</th>
<th>CNIC</th>
<th>Age</th>

<th>Phone</th>
<th>Address</th>
<th>Email</th>
<th>Sample Sent To</th>
<th>Result Date</th>
<th>Report</th>
<th>Edit</th>
<th>Delete</th>



</tr>
<?php while($fetch = mysqli_fetch_array($ren)) {?>
<tr>
<td><?php echo $fetch['id'];?></td>
<td><?php echo $fetch['sample_no'];?></td>
<td><?php echo $fetch['registration_date'];?></td>
<td><?php echo $fetch['name'];?></td>
<td><?php echo $fetch['father_name']; ?></td>
<td><?php echo $fetch['cnic'];?></td>
<td><?php echo $fetch['age'];?></td>
<td><?php echo $fetch['phone'];?></td>
<td><?php echo $fetch['address'];?></td>
<td><?php echo $fetch['email'];?></td>
<td><?php echo $fetch['sample_sent_to'];?></td>
<td><?php echo $fetch['result_date'];?></td>
<td><?php echo $fetch['report_status'];?></td>
<td><a href="edit.php?userid=<?php echo $fetch['id']; ?>">Edit</a></td>
<td><a href="delete.php?userid=<?php echo $fetch['id']; ?>">Delete</a></td>



</tr>
<?php } ?>
</table>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

  </body>
</html>
