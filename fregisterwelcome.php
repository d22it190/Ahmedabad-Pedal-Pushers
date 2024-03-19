<?php
$con = mysqli_connect('localhost', 'ahm_p_p', 'Nivpari0#','ahm_p_p');
 if(isset($_POST['submit']))
 {
  $un=$_POST['uname'];
  $fn=$_POST['fname'];
  $ln=$_POST['lname'];
  $em=$_POST['email'];
  $mn=$_POST['mn'];
  $gender=$_POST['gender'];
  $operator=$_POST['operator'];
  
  $pass=$_POST['pass'];
  $rpass=$_POST['rpass'];
 
  
  echo "User name : $un <br><br>";
  echo "First name : $fn <br><br>";
  echo "Last name : $ln <br><br>";
  echo "Email : $em <br><br>";
  echo "Mobile-no. : $mn <br><br>";
  echo "Gender : $gender <br><br>";
  echo "<h3>Selected Operator Type</h3>";
 
  $i=0;
 
  while($i<sizeof($operator))
  {
   echo $operator[$i]."<br>";
 
   $i++;
  }
 }
?>

