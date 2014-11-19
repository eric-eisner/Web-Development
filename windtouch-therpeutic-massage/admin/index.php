<?php

// database connect script.

require 'db_connect.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Login</title>
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
	font-size: 9pt;
	color: #000077; 
	border-style: solid;
	border-color: #000077;
}
font {
	font-size: 12pt;
	color: #000077
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
	color: #ffffff;
}
a:hover {
	text-decoration: underline;
	color: #000077;
}
a:hover.copy {
	text-decoration: underline;
	color: #ffffff;
}
a:hover.nav {
	text-decoration: none;
	color: #000000;
}
</style>

</head>

<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0">

<?php

if (isset($_POST['submit'])) { // if form has been submitted

	/* check they filled in what they were supposed to and authenticate */
	if(!$_POST['uname'] | !$_POST['passwd']) {
		die('You did not fill in a required field.');
	}

	// authenticate.

	if (!get_magic_quotes_gpc()) {
		$_POST['uname'] = addslashes($_POST['uname']);
	}

	$check = $db_object->query("SELECT username, password FROM users WHERE username = '".$_POST['uname']."'");

	if (DB::isError($check) || $check->numRows() == 0) {
		die('That username does not exist in our database.');
	}

	$info = $check->fetchRow();

	// check passwords match

	$_POST['passwd'] = stripslashes($_POST['passwd']);
	$info['password'] = stripslashes($info['password']);
	$_POST['passwd'] = md5($_POST['passwd']);

	if ($_POST['passwd'] != $info['password']) {
		die('Incorrect password, please try again.');
	}

	// if we get here username and password are correct, 
	//register session variables and set last login time.

	$date = date('m d, Y');

	$update_login = $db_object->query("UPDATE users SET last_login = '$date' WHERE username = '".$_POST['uname']."'");

	$_POST['uname'] = stripslashes($_POST['uname']);
	$_SESSION['username'] = $_POST['uname'];
	$_SESSION['password'] = $_POST['passwd'];
	$db_object->disconnect();
	
?>

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
<font face="tahoma">Thank you <?php echo $_SESSION['username']; ?>, you are now logged in.</font>

<?php

} else {	// if form hasn't been submitted

?>

<table border="0" align="left" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="5"><img src="login_top.gif" alt="ACP - Admin Control Panel" border="0"></td>
	</tr>
	<tr>
		<td><img src="login_spacer1.gif" alt="" border="0"></td>
		<td><a href="/"><img src="home.gif" alt="Goto the homepage" border="0"></a></td>
		<td><img src="login_spacer2.gif" alt="" border="0"></td>
		<td><a href=""><img src="login.gif" alt="Login to ACP" border="0"></a></td>
		<td><img src="login_spacer3.gif" alt="" border="0"></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>
<font face="tahoma" class="int">Login</font>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table border="0" cellspacing="0" cellpadding="2">
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;username:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="text" name="uname" size="25" maxlength="40" class="m"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;password:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="password" name="passwd" size="20" maxlength="50" class="m"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" name="submit" value="login"></td>
	</tr>
</table>
</form>
<?php

}

?>
</body>
</html>