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

if (isset($_POST['submit'])) {         // if form has been submitted for update
	if (!empty($_POST['delete'])) {
		foreach ($_POST['delete'] as $id) {
			$del = $db_object->query("DELETE FROM events WHERE id = '$id'");
			$opt = $db_object->query("OPTIMIZE TABLE events");
		}
	}

	if (!empty($_POST['date_add']) && !empty($_POST['desc_add'])) {
		$datefinal = date("Y-m-d", strtotime($_POST['date_add']));
		$add = $db_object->query("INSERT INTO events (date, description) VALUES ('$datefinal', '".$_POST['desc_add']."')");
		$opt = $db_object->query("OPTIMIZE TABLE events");
	}
	
	header("Location: event_list.php");
		
} if (isset($_POST['deleteall'])) {      // if form has been submitted for delete
	$delall = $db_object->query("TRUNCATE events");
	header("Location: event_list.php");
	
} else {           	// if form hasn't been submitted

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Event List</title>
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
.m {
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
<font face="tahoma" class="int">Event List</font><br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table cellspacing="0" cellpadding="2" border="1" bordercolor="#000000" align="center">
	<tr>
		<td align="center"><font face="tahoma">&nbsp;&nbsp;delete&nbsp;&nbsp;</font></td>
		<td align="center"><font face="tahoma">&nbsp;&nbsp;date&nbsp;&nbsp;</font></td>
		<td align="center"><font face="tahoma">&nbsp;&nbsp;description&nbsp;&nbsp;</font></td>
	</tr>

<?php

$total = $db_object->query("SELECT id, date, description FROM events ORDER BY date ASC");
$num = $total->numRows();
if($num > 0) {
	while($n = $total->fetchRow()) {
		$id = $n["id"];
		$dateup = $n["date"];
		$descup = $n["description"];
		echo ("
		<tr>
			<td align=\"center\"><input type=\"checkbox\" name=\"delete[]\" value=\"$id\"></td>
			<td><input type=\"text\" name=\"date[]\" value=\"$dateup\" class=\"m\" size=\"9\"></td>
			<td>
				<table width=\"414\" cellspacing=\"1\" cellpadding=\"1\" border=\"0\">
					<tr>
						<td>
						<font face=\"tahoma\" class=\"p\">$descup</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>");
	}
}

?>

	<tr>
		<td>&nbsp;</td>
		<td valign="top" align="center"><input type="text" name="date_add" class="m" size="9"><br><font face="tahoma" class="p">Format:<br>mm/dd/yyyy</font></td>
		<td><textarea name="desc_add" class="m" rows="3" cols="65" wrap="physical"></textarea></td>
	</tr>
	<tr>
		<td colspan="3" align="right"><input type="submit" name="submit" value="Update" checked>&nbsp;<input type="submit" name="deleteall" value="Delete All"></td>
	</tr>
</table>
</form>
<br><br>

<?php

}

$db_object->disconnect();
// when you are done.

?>
</body>
</html>
