<?php

require 'db_connect.php';

// require our database connection
// which also contains the check_login.php
// script. We have $logged_in for use.

if ($logged_in == 0) {
	die('Sorry you are not logged in, this area is restricted to registered members. <a href="index.php">Click here</a> to log in.');
}
   /*
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

exit(print_r($_POST)); 

}
   */

if (isset($_POST['submit'])) {       // if form has been submitted for update   
	if (!empty($_POST['delete'])) { 
		foreach ($_POST['delete'] as $id) {
			$del = $db_object->query("DELETE FROM products WHERE id = '$id'");
			$opt = $db_object->query("OPTIMIZE TABLE products");
		}
	}

//	$nameup = mysql_escape_string($_POST['name']);
//	$nameupdt = $db_object->query("UPDATE products SET name = '$nameup'"); 

	if (!empty($_POST['name_add'])) {
		$add = $db_object->query("INSERT INTO products (name) VALUES ('".$_POST['name_add']."')");
		$opt = $db_object->query("OPTIMIZE TABLE products");
	}
	
	header("Location: product_list.php");
		
} if (isset($_POST['deleteall'])) {      // if form has been submitted for delete
	$delall = $db_object->query("TRUNCATE products");
	header("Location: product_list.php");
	
} else {           	// if form hasn't been submitted

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Product List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
body {
	scrollbar-face-color: #ffffff;
  scrollbar-highlight-color: #000000;
  scrollbar-3dlight-color: #000000;
  scrollbar-darkshadow-color: #000000;
  scrollbar-shadow-color: #000000;
  scrollbar-arrow-color: #000000;
  scrollbar-track-color: #ffffff;
}
input.m {
	background-color: #ffffff;
	font-family: Tahoma;
	font-size: 10pt;
	color: #000077; 
	border-style: solid;
	border-color: #000077;
}
font {
	font-size: 12pt;
	color: #000077
}
font.p {
	font-size: 10pt;
	color: #000077;
}
font.int {
	font-size: 14pt;
	color: #000000
}
font.nav {
	font-size: 11pt;
	color: #000000
}
font.copy {
	font-size: 9pt;
	color: #000000
}
font.spacer {
	font-size: 4pt;
}
font.desc {
	font-size: 11pt;
	color: #000077
}
a {
	text-decoration: none;
	color: #000077;
}
a.copy {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #000077;
}
a:hover.copy {
	text-decoration: underline;
	color: #000000;
}
a:hover.nav {
	text-decoration: none;
	color: #000000;
}
</style>

</head>

<body bgcolor="#ffffff" bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0">

<table border="0" align="left" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="7"><img src="top.gif" alt="ACP - Admin Control Panel" border="0"></td>
	</tr>
	<tr>
		<td><img src="spacer1.gif" alt="" border="0"></td>
		<td><a href="product_list.php"><img src="products.gif" alt="Product List" border="0"></a></td>
		<td><img src="spacer2.gif" alt="" border="0"></td>
		<td><a href="event_list.php"><img src="events.gif" alt="Event List" border="0"></a></td>
		<td><img src="spacer3.gif" alt="" border="0"></td>
		<td><a href="logout.php"><img src="logout.gif" alt="Logout" border="0"></a></td>
		<td><img src="spacer4.gif" alt="" border="0"></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>
<font face="tahoma" class="int">Product List</font><br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table cellspacing="0" cellpadding="2" border="1" bordercolor="#000000" align="center">
	<tr>
		<td align="center"><font face="tahoma">&nbsp;&nbsp;delete&nbsp;&nbsp;</font></td>
		<td align="center"><font face="tahoma">&nbsp;&nbsp;product&nbsp;&nbsp;</font></td>
	</tr>

<?php

$total = $db_object->query("SELECT * FROM products ORDER BY id ASC");
$num = $total->numRows();
if($num > 0) {
	while($n = $total->fetchRow()) {
		$id = $n["id"];
		$nameold = $n["nameold"];
		$nameup = $n["name"];
		echo ("
		<tr>
			<td align=\"center\"><input type=\"checkbox\" name=\"delete[]\" value=\"$id\"></td>
			<input type=\"hidden\" name=\"nameold[]\" value=\"$nameold\">
			<td><input type=\"text\" name=\"name[]\" value=\"$nameup\" class=\"m\" size=\"80\"></td>
		</tr>");
	}
}

?>

	<tr>
		<td>&nbsp;</td>
		<td><input type="text" name="name_add" class="m" size="80"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" name="submit" value="Update">&nbsp;<input type="submit" name="deleteall" value="Delete All"></td>
	</tr>
</table>
</form>
<br><br>

<!-- <table cellpadding='0' width='600' cellspacing='0' align='center' border='0'> -->
<!-- <tr> -->
<!-- <td height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#c0c0c0' align='center' colspan='2'><font face='tahoma'>Massage Oils</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi 8oz Vata & Pitta Body Oils</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi 8oz Premium Body Oil</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi 8oz Neem Oil</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi Facial Cleanser Vata & Pitta</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi Facial Oil  Vata & Pitta</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi Rejuvanting Oil</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi 8oz Hand Lotion with either of the following scents:<br></font><font face='tahoma' class='desc'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sweet Orange, Jasmine, Lavendar, Ylang ylang, Sandalwood, Rose</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$6.95</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Bindi Rejuvanting Oil</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>Still Point Inducer</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$20.00</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#c0c0c0' align='center' colspan='2'><font face='tahoma'>Bindi Aromatherapy Candles</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Jasmine & Lavendar</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$3.50</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;Sandalwood & Sweet Blossom</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$2.50</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' align='center' colspan='2'><font face='tahoma'>Essential Oils and Blends - price varies on quality & quantity requested</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>Ice Packs for Neck</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$9.00</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff' height='15'></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#c0c0c0' align='center' colspan='2'><font face='tahoma'>Gift certificates</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;30 minute</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$45.00</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;55 minute</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$75.00</font></td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;&nbsp;&nbsp;90 minute</font></td> -->
<!-- <td bgcolor='#ffffff'><font face='tahoma'>&nbsp;$110.00</font></td> -->
<!-- </tr> -->
<!-- </table> -->
<!-- </td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td height='50'></td> -->
<!-- </tr> -->
<!-- </table> -->


<?php

}

$db_object->disconnect();
// when you are done.

?>
</body>
</html>
