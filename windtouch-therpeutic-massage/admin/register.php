<?php

require('db_connect.php');	// database connect script.

?>

<html>
<head>
<title>Register an Account</title>

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
input {
	background-color: #ffffff;
	font-family: Tahoma;
	font-size: 9pt;
	color: #000077; 
	border-style: solid;
	border-color: #000077;
}
input.but {
	background-color: #000077;
	font-family: Tahoma;
	font-size: 10pt;
	color: #ffffff; 
	border-style: dashed;
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

<body>

<?php

if (isset($_POST['submit'])) {    // if form has been submitted
	
	/* check they filled in what they supposed to, 
	passwords matched, username
	isn't already taken, etc. */

	if (!$_POST['uname'] | !$_POST['passwd'] | !$_POST['passwd_again'] | !$_POST['email']) {
		die('You did not fill in a required field.');
	}

	// check if username exists in database.

	if (!get_magic_quotes_gpc()) {
		$_POST['uname'] = addslashes($_POST['uname']);
	}



	$name_check = $db_object->query("SELECT username FROM users WHERE username = '".$_POST['uname']."'");

	if (DB::isError($name_check)) {
		die($name_check->getMessage());
	}

	$name_checkk = $name_check->numRows();

	if ($name_checkk != 0) {
		die('Sorry, the username: <strong>'.$_POST['uname'].'</strong> is already taken, please pick another one.');
	}

	// check passwords match

	if ($_POST['passwd'] != $_POST['passwd_again']) {
		die('Passwords did not match.');
	}

	// check e-mail format

	if (!preg_match("/.*@.*..*/", $_POST['email']) | preg_match("/(<|>)/", $_POST['email'])) {
		die('Invalid e-mail address.');
	}

	// no HTML tags in username, website, location, password

	$_POST['uname'] = strip_tags($_POST['uname']);
	$_POST['passwd'] = strip_tags($_POST['passwd']);
	$_POST['website'] = strip_tags($_POST['website']);
	$_POST['location'] = strip_tags($_POST['location']);



	// check show_email data

	if ($_POST['show_email'] != 0 & $_POST['show_email'] != 1) {
		die('Nope');
	}

	/* the rest of the information is optional, the only thing we need to 
	check is if they submitted a website, 
	and if so, check the format is ok. */

	if ($_POST['website'] != '' & !preg_match("/^(http|ftp):\/\//", $_POST['website'])) {
		$_POST['website'] = 'http://'.$_POST['website'];
	}

	// now we can add them to the database.
	// encrypt password

	$_POST['passwd'] = md5($_POST['passwd']);

	if (!get_magic_quotes_gpc()) {
		$_POST['passwd'] = addslashes($_POST['passwd']);
		$_POST['email'] = addslashes($_POST['email']);
		$_POST['website'] = addslashes($_POST['website']);
		$_POST['location'] = addslashes($_POST['location']);
	}



	$regdate = date('m d, Y');

	$insert = "INSERT INTO users (
			username, 
			password, 
			regdate, 
			email, 
			website, 
			location, 
			show_email, 
			last_login) 
			VALUES (
			'".$_POST['uname']."', 
			'".$_POST['passwd']."', 
			'$regdate', 
			'".$_POST['email']."', 
			'".$_POST['website']."', 
			'".$_POST['location']."', 
			'".$_POST['show_email']."', 
			'Never')";

	$add_member = $db_object->query($insert);

	if (DB::isError($add_member)) {
		die($add_member->getMessage());
	}

	$db_object->disconnect();

	
?>


<font face="tahoma" class="int">Registered</font>
<br><br>
<font face="tahoma">Thank you, your information has been added to the database, you may now <a href="index.php" title="Login">log in</a>.</font>

<?php

} else {	// if form hasn't been submitted

?>
<font face="tahoma" class="int">Register</font>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="0" cellspacing="0" cellpadding="2">
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;username*:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="text" name="uname" size="25" maxlength="40"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;password*:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="password" name="passwd" size="20" maxlength="50"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;confirm password*:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="password" name="passwd_again" size="20" maxlength="50"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;email*:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="text" name="email" size="50" maxlength="100"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;website:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="text" name="website" size="75" maxlength="150"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;location:&nbsp;&nbsp;</font></td>
		<td align="left"><input type="text" name="location" size="40" maxlength="150"></td>
	</tr>
	<tr>
		<td align="left"><font face="tahoma">&nbsp;&nbsp;show email?&nbsp;&nbsp;</font></td>
		<td>
			<select name="show_email">
			<option value="1" selected="selected">yes</option>
			<option value="0">no</option></select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" name="submit" value="sign up" class="but"></td>
	</tr>
</table>
</form>
<font face="tahoma">* indicates a required field</font>

<?php

}

?>
</body>
</html>