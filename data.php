<!DOCTYPE html>
<?php
        $conn = mysqli_connect('localhost', 'root', '', 'second');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $sample_no = $_POST['sample_no'];
            $registration_date = $_POST['registration_date'];
            $name = $_POST['name'];
            $father_name = $_POST['father_name'];
            $cnic = $_POST['cnic'];
            $age = $_POST['age'];
            $phone = $_POST['Phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $sample_sent_to = $_POST['sample_sent_to'];
            $result_date = $_POST['result_date'];
            $report_status = $_POST['report_status'];

            $sql = "INSERT INTO `project` ( sample_no , registration_date ,name, father_name, cnic , age , phone, address , email, sample_sent_to, result_date,report_status) VALUES (' $sample_no', '$registration_date', '$name', '$father_name', '$cnic' , '$age', '$phone', '$address', '$email','$sample_sent_to',' $result_date','$report_status' )";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('$name $father_name added successfully !!')</script>";
                header('location:http://localhost/tayyab/database.php');
            }
            else{
                echo "Error".mysqli_error($conn);
            }

        }

        ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Data</title>
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

#navbar1{
  width: 50%;
  margin-left: 610px;
  margin-top:30px;
  
}
#navbar1 button{
  margin: 15px;
}
#main_div{
  margin-top: 1%;
}


</style>
<body>


  <div id="main_div" class="container-fluid">
  <div  id="navbar1" style="width:100%; " >
    
      
   <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">VIEW DATA</button></a>
   <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">EDIT DATA</button></a>
   <a href="database.php"><button type="submit" name="button" class="btn btn-outline-primary">DELETE DATA</button></a>
   
   

  </div>

   



  <div id="full" >
   
 <div style="height: 10%;"></div>
  <img src="pexels-cdc-3992933.jpg" alt="img" class="bg1">
	<div class="container-fluid " style="width: 50%;" id="data">
    <h1 style="text-align: center;">Covid-19 Patient Report</h1>
	<P style="text-align: center; border-bottom:2px solid black;">Primary And Secondary Health Care Department Government Of Punjab </p>
	<b></b>





		<h4 style="text-align: center; text-decoration:underline;">Insert Data</h4>
<form method="post">
  <div class="form-group">
    <label>Sample No:</label>
    <input type="number" name="sample_no" class="form-control" placeholder="Enter Sample No">
  </div>
  <div class="form-group">
    <label>Registration Date:</label>
    <input type="date" name="reg_date" class="form-control" >
  </div>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="first_name" class="form-control" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Father Name</label>
    <input type="text" name="father_name" class="form-control" placeholder="Enter father Name" >
  </div>
  <div class="form-group">
    <label>CNIC</label>
    <input type="number" name="cnic" class="form-control"placeholder="Enter CNIC">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" name="age" class="form-control" placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Sample Sent To:</label>
    <input type="text" name="blood_group" class="form-control" placeholder="Enter Lab Name">
  </div>
  <div class="form-group">
    <label>Result date:</label>
    <input type="date" name="blood_group" class="form-control" >
  </div>
  
 <br><br>
 <div style="border-bottom:2px solid black;"></div>
  <h1 style="text-align: center;">Covid-19 PCR Test Result:</h1>
  <div style="border-bottom:2px solid black;"></div><br>
  <label><b>Report Status:</b></label>
  <input type="text" name="rep_status"  style="font-weight: bold;"><br><br>
  <div>
		
	<table>
		<tr >
			<th style="width: 20px;">Description:</th>
			<td>Viral Nucleic acid(RNA) was isolated employing Feverprep Viral Nucleic Acid Extraction Kit L viral RNA detection was conducted employing TaqMan 2019-nCoV Assay Kit v To on QuantStudio Five Real Time PCR instrument.</td>
		</tr>
		<tr></tr>
	</table>

</div><br>
  
  

<button type="submit" name="button" class="btn btn-outline-primary form-control">ADD</button>

</form>
 
	</div><br><br>
</div>
</div>
	
</body>
</html>