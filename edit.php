<!DOCTYPE html>
<?php
session_start();
ob_start();
$conn = mysqli_connect("localhost" , "root" , "" , "second_sql");


 ?>

<?php
    $received_id = $_GET['userid'];

$show = "select * from project where id ='$received_id'";

$run = mysqli_query($conn, $show);

$fetch = mysqli_fetch_array($run);

     ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
.data{
	margin: auto;

}
label{
	font-weight: bold;
}
table,tr,th,td{
	border: 2px solid black;
  padding: 10px;
}
.bg1{
 width: 100%;
 position: absolute;
 z-index: -1;
 opacity: 0.2;
 height: 200%;
 
}
#full{
  margin-top: 2%;
  
}
.menu{
  margin-top: 1%;
  
}

/* #navbar1{
  width: 50%;
  margin-left: 425px;
  
}
#navbar1 button{
  margin: 4px;
} */
#main_div{
  margin-top: 1%;
}

    #navbar1{
  width: 50%;
  margin-left: 700px;
  margin-top:30px;
  
}
#navbar1 button{
  margin: 15px;
}
  


</style>
<body>

  <div id="main_div" class="container-fluid">
  <div  id="navbar1" style="width:100%; " >
    
      
    <a href="data.php"><button type="submit" name="button" class="btn btn-outline-primary">ADD DATA</button></a>
    <a href="index.php"><button type="submit" name="button" class="btn btn-outline-primary">VIEW DATA</button></a>
    <a href="index.php"><button type="submit" name="button" class="btn btn-outline-primary">DELETE DATA</button></a>
    
    
 
   </div>

  <br><br>
  <div id="full" >
   
 <div style="height: 10%;"></div>
  <img src="pexels-cdc-3992933.jpg" alt="img" class="bg1">
	<div class="container-fluid " style="width: 50%;" id="data">
    <h1 style="text-align: center;">Covid-19 Patient Report</h1>
	<P style="text-align: center; border-bottom:2px solid black;">Primary And Secondary Health Care Department Government Of Punjab </p>
	<b></b>





		<h4 style="text-align: center; text-decoration:underline;">Edit Data</h4>
<form method="post">
<div class="form-group">
    <label>Sample No:</label>
    <input type="number" name="sample_no" class="form-control" placeholder="Enter Sample No"  value="<?php echo $fetch['sample_no']; ?>">
  </div>
  <div class="form-group">
    <label>Registration Date:</label>
    <input type="date" name="registration_date" class="form-control"  value="<?php echo $fetch['registration_date']; ?>">
  </div>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $fetch['name']; ?>">
  </div>
  <div class="form-group">
    <label>Father Name</label>
    <input type="text" name="father_name" class="form-control" placeholder="Enter father Name"  value="<?php echo $fetch['father_name']; ?>" >
  </div>
  <div class="form-group">
    <label>CNIC</label>
    <input type="number" name="cnic" class="form-control"placeholder="Enter CNIC"  value="<?php echo $fetch['cnic']; ?>">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter Age"  value="<?php echo $fetch['age']; ?>">
  </div>
 
  <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control" value="<?php echo $fetch['phone']; ?>">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter Address"  value="<?php echo $fetch['address']; ?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo $fetch['email']; ?>">
  </div>
  
  <div class="form-group">
    <label>Sample Sent To:</label>
    <input type="text" name="sample_sent_to" class="form-control" placeholder="Enter Lab Name"  value="<?php echo $fetch['sample_sent_to']; ?>">
  </div>
  <div class="form-group">
    <label>Result date:</label>
    <input type="date" name="result_date" class="form-control"  value="<?php echo $fetch['result_date']; ?>">
  </div>
  <br><br>
 <div style="border-bottom:2px solid black;"></div>
  <h1 style="text-align: center;">Covid-19 PCR Test Result:</h1>
  <div style="border-bottom:2px solid black;"></div><br>
  <label><b>Report Status:</b></label>
  <input type="text" name="report_status"  style="font-weight: bold;"  value="<?php echo $fetch['report_status']; ?>"><br><br>
  <div>
  <table>
		<tr >
			<th style="width: 20px;">Description:</th>
			<td>Viral Nucleic acid(RNA) was isolated employing Feverprep Viral Nucleic Acid Extraction Kit L viral RNA detection was conducted employing TaqMan 2019-nCoV Assay Kit v To on QuantStudio Five Real Time PCR instrument.</td>
		</tr>
		<tr></tr>
	</table>

</div><br>
  
  

<button type="submit" name=project class="btn btn-outline-primary form-control">UPDATE</button>
</form>
  </body>
</html>

 <?php
if (isset($_POST['project'])) {

  $sample_no = $_POST['sample_no'];
  $registration_date = $_POST['registration_date'];
  $name = $_POST['name'];
  $father_name = $_POST['father_name'];
  $cnic = $_POST['cnic'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $sample_sent_to = $_POST['sample_sent_to'];
  $result_date  = $_POST['result_date'];
  $report_status  = $_POST['report_status'];

$update = "update project set sample_no = '$sample_no', registration_date = ' $registration_date',  name = '$name',  father_name = '$father_name',  cnic = '$cnic' , age = '$age',  phone = '$phone',  address = '$address',  email = '$email' ,  sample_sent_to = '$sample_sent_to'  ,  result_date = '$result_date',  report_status = '$report_status' where id = '$received_id'";

$run = mysqli_query($conn, $update);


  header("location:index.php");

if ($run) {
    $_SESSION['edit'] = "Data Edited Successfully";
    header("location:index.php");
  }
}
?> 
