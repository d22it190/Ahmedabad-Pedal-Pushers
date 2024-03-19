<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
 
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');

if(isset($_POST['submit']))
{
 $nm=$_POST['your-name'];
 $em=$_POST['your-email'];
 $phn=$_POST['phn-nmb'];
 $adr=$_POST['address'];
 $type=$_POST['checkbox-334'];
 $dur=$_POST['duration'];
 $frm=$_POST['frmdate'];
 $to=$_POST['todate'];
 
 $sql = "INSERT INTO customer ( `fullname`, `email`, `phoneno`, `address`, `type`, `duration`, `fromdate`, `todate`) VALUES ('$nm','$em','$phn','$adr','$type','$dur','$frm','$to')";
 
 // insert in database 
 $rs = mysqli_query($con, $sql);
  
 if($rs)
 {
  
    // PHP program to pop an alert
// message box on the screen

// Function definition
function function_alert($message) {
    
    // Display the alert box
    echo "<script>alert('$message');</script>";
}


// Function call
function_alert("Register Successfully");
// redirects to login page
$_SESSION["uname"] = $id1;
header("Location: http://localhost/nivea/cportal.php"); 


}
 }
  
 ?>

