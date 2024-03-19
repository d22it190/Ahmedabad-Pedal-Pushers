<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
 
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');

if(isset($_POST['submit']))
{
 $ctype=$_POST['cats'];
 $fdate=$_POST['frmdate'];
 $todate=$_POST['todate'];
 
 $sql = "INSERT INTO cportal ( `ctype`, `fdate`, `tdate`) VALUES ('$ctype','$fdate ','$todate ')";
 
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
header("Location: http://localhost/nivea/cpickup.php"); 

}
 }
  
 ?>
