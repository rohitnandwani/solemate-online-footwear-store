<?php

session_start();

$con = mysql_connect("localhost","root","rna2");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  
mysql_select_db("newfin", $con);

$email_check = mysql_query("SELECT * FROM Customer WHERE Email_address= '".$_POST['email_address']."'");
$do_email_check = mysql_num_rows($email_check);

if($do_email_check > 0)
{
die("Email address is already in use!<br>");
}


$insert = mysql_query("insert into Customer(First_Name, Last_Name, Email_address, Password, Phone_No, Shipping_Address, City) values('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email_address']."','".$_POST['password']."','".$_POST['phone_no']."','".$_POST['shipping_address']."','".$_POST['city']."')");

if(!$insert){
die("There's a little problem: ".mysql_error());
}

echo $_POST['first_name']; 
echo ", you are now registered. Thank you!<br>";
echo " Please sign in <a href = http://localhost/SoleMate/temp.php>here</a>";

mysql_close($con);
?>
