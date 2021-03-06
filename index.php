<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SoleMate Home</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 
	padding-right: 15px;
	padding-left: 15px; 
}
a img {
	border: none;
}


a:link {
	color: #42413C;
	text-decoration: underline;
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}

/* ~~ This fixed width container surrounds all other divs ~~ */
.container {
	width: 960px;
	background: #FFFFFF;
	margin: 0 auto; 
}


.header {
	background: #ADB96E;
}


.sidebar1 {
	float: left;
	width: 180px;
	background: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 600px;
	float: left;
}
.sidebar2 {
	float: left;
	width: 180px;
	background: #EADCAE;
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}


ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the anchor block properties so it fills out the whole LI that contains it so that the entire area reacts to a mouse click. */
	width: 160px;  
	text-decoration: none;
	background: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #ADB96E;
	color: #FFF;
}


.footer {
	padding: 10px 0;
	background: #CCC49F;
	position: relative;
	clear: both; 
}

/* ~~ Miscellaneous float/clear classes ~~ */
.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat { 
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"><a href="http://localhost/SoleMate/temp.php"><img src="temologo.jpg" width="180" height="90" /></a></div>
  <div class="sidebar1">
    <ul class="nav">
      <li>Browse: </li>
      <li><a href="#">By Brand</a></li>
      <li><a href="#">By Purpose</a></li></ul>
  </div>
  <div class="content">
<ul id="MenuBar1" class="MenuBarHorizontal">
<li><a href="temp.php?pcg=Womens" class="MenuBarItemSubmenu">Womens</a>
  <ul>
    <li><a href="temp.php?pcg=Womens&amp;cg=Sandals">Sandals</a></li>
    <li><a href="temp.php?pcg=Womens&amp;cg=Flats">Flats</a></li>
    <li><a href="temp.php?pcg=Womens&amp;cg=Wedges">Wedges</a></li>
    <li><a href="temp.php?pcg=Womens&amp;cg=Slippers">Slippers</a></li>
    <li><a href="temp.php?pcg=Womens&amp;cg=Snickers">Snickers</a></li>
    <li><a href="temp.php?pcg=Womens&amp;cg=Boots">Boots</a></li>
  </ul>
</li>
<li><a href="temp.php?pcg=Mens" class="MenuBarItemSubmenu">Mens</a>
  <ul>
    <li><a href="temp.php?pcg=Mens&amp;cg=Sandals">Sandals</a></li>
    <li><a href="temp.php?pcg=Mens&amp;cg=Snickers">Snickers</a></li>
    <li><a href="temp.php?pcg=Mens&amp;cg=Slippers">Slippers</a></li>
    <li><a href="temp.php?pcg=Mens&amp;cg=Boots">Boots</a></li>
    <li><a href="temp.php?pcg=Mens&amp;cg=Loafers">Loafers</a></li>
  </ul>
</li>
<li><a href="temp.php?pcg=Kids" class="MenuBarItemSubmenu">Kids</a>
  <ul>
    <li><a href="temp.php?pcg=Kids&amp;cg=Sandals">Sandals</a></li>
    <li><a href="temp.php?pcg=Kids&amp;cg=Chappals">Chappals</a></li>
    <li><a href="temp.php?pcg=Kids&amp;cg=Snickers">Snickers</a></li>
    <li><a href="temp.php?pcg=Kids&amp;cg=Canvas">Canvas</a></li>
  </ul>
</li>
  <li><a href="#">Sports</a></li>
</ul>
<p>&nbsp;    </p>
    <p>&nbsp;</p>
    <!-- InstanceBeginEditable name="EditRegion3" -->
    <?php
 
require('includes/html_table.class.php'); 

$con = mysql_connect("localhost","root","rna2");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  
mysql_select_db("newfin", $con);


if(isset($_GET['pcg']))
{
	echo "<h5>".$_GET['pcg']."</h5>";
    $result = mysql_query("Select * from Product where Parent_Category = '".$_GET['pcg']."'  ORDER BY Name");
    if(isset($_GET['cg']))
    {
		echo "<h5>".$_GET['cg']."</h5>";
    	$result = mysql_query("Select * from Product where Parent_Category = '".$_GET['pcg']."' and Category = '".$_GET['cg']."' ORDER BY Name"); 
    }
    
}
else
{
echo '<h5>Featured Products</h5>';
$result = mysql_query("Select * from Product where Featured = True ORDER BY Name"); 
}

$count=mysql_num_rows($result);

$productsPerRow = 4; 
//$productsPerPage = 12;

//$columnWidth = (int)(100 / $productsPerRow);

$tbl = new HTML_Table(null, 'display', 0, 0, 20); 

if ($count > 0 ) 
{ 
    $i = 0; 
	while ($row = mysql_fetch_row($result)) 
	{ 
		
		if ($i % $productsPerRow == 0) 
		{ 
			$tbl->addRow(); 
		}
		$tbl->addCell('<a href="product.php?pid='.$row[0].'"><img src= http://localhost/SoleMate/image.php width="100" height="100"></a>'.'<br>'.'<a href="product.php?pid='.$row[0].'">'.$row[5].' '.$row[4].'</a> <br>'.'Rs. '.$row[3]);
		
		$i += 1; 
		
	}
	
	echo $tbl->display(); 
	
}

else
{
echo 'No products in this category';
}

?>
    <!-- InstanceEndEditable --></div>
  <div class="sidebar2">
    <?php

if(isset($_SESSION["valid_user"]))
{
   echo "<h4>";	
  	echo "Welcome ". $_SESSION["valid_user"] . "!<br />";
	
    echo "</h4>";

    	echo "<FORM METHOD=\"POST\" ACTION=\"http://ww7.aitsafe.com/cf/review.cfm\">";
        echo '<INPUT TYPE="HIDDEN" NAME="userid" VALUE="97248120">';
		echo '<INPUT TYPE="HIDDEN" NAME="return" VALUE="http://localhost/SoleMate/temp.php">';
		echo '<INPUT TYPE="SUBMIT" VALUE="Show Cart">';
		echo '</FORM>';
		
	
    echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"http://localhost/SoleMate/logout.php\">";
     echo "<input type=\"submit\" name=\"logout\" id=\"logout\" value=\"Logout\" />";
	echo '</form>';
}

else
{
    echo "<h4>Sign In  </h4>";
	?>
	
	
	    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p>
        <label for="email5">E-Mail Address:</label>
        <input name="email" type="text" id="email5" maxlength="40" />
        <label for="password5">Password</label>:
        <input name="password" type="password" id="password5" maxlength="20" />
      </p>
      <p>
        <input type="submit" name="submit_login" id="submit_login" value="Submit" />
      </p>
    </form>
    <p>Or <a href="register.php">Register</a></p>
	

	<?php
	
if(isset($_POST['email']))
{
$con = mysql_connect("localhost","root","rna2");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

  
mysql_select_db("newfin", $con);


$result = mysql_query("Select Email_address,Password from Customer where Email_address='".$_POST['email']."' and Password='".$_POST['password']."'");
$count=mysql_num_rows($result);


if($count==1)
{
		$FQuery = mysql_query("Select First_Name, CustomerID from Customer where Email_address='".$_POST['email']."' and Password='".$_POST['password']."'");
		$Fname = mysql_fetch_row($FQuery);
		$_SESSION["valid_user"] = $Fname[0];
		$_SESSION["valid_userid"] = $Fname[1];
        $_SESSION["valid_time"] = time()+3600;
		
}

else
{
echo "Inavalid E-mail address and/or password, ";
echo "Please click back and re-enter.";
}
}
}
?>

  </div>
  <div class="footer">
  <font size="2">
    <p align="center">Call us on 0120-6721900</p>
   </font>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>
