<?php

require 'db_connect.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Wind Touch Therapeutic Massage</title>
<link rel="SHORTCUT ICON" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Wind Touch Therapeutic Massage is dedicated to providing the highest quality therapy service while still making it easy for the client to schedule an appointment around their schedule.  Helping each client achieve their optimal health by increasing their Mind-Body awareness is our motto.  We are a small privately owned business in the Milwaukee area.  This company is owned and operated by Cassandra Wind a registered massage therapist with the state of Wisconsin and a B.S. degree in Health Arts.  She performs many different procedures but one noteable type of therapy that she uses is Craniosacral Therapy for pediatrics and adults.">
<meta name="keywords" content="Wind Touch Therapeutic Massage,therapy,milwaukee area business,Cassandra Wind,Craniosacral Therapy">
<meta name="language" content="English">
<meta name="copyright" content="2004 e2-inc">

<style type="text/css">
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
}
a {
	text-decoration: none;
	color: #000077;
}
a.nav {
	text decoration: none;
	color: #000000;
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
	text-decoration: underline;
	color: #000000;
}
</style>

</head>

<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" bgcolor="#ffffff">
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td border="0" colspan="4"><img src="/images/banner.gif" alt="Wind Touch Therapeutic Massage - Helping each client achieve their optimal health by increasing their Mind-Body awareness">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="173" height="130">
        <param name="movie" value="/wind.swf">
        <param name="quality" value="high">
        <embed src="/wind.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="173" height="130"></embed>
			</object>
		</td>
	</tr>
	<tr>
		<td valign="top" bgcolor="c0c0c0">
			<table width="150" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td height="22"><font face="tahoma" class="nav"><b>Navigation</b></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="index.php" class="nav">Home</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="services.php" class="nav">Services</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="newsletter.php" class="nav">Newsletter</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="faqs.php" class="nav">Faq's</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="products.php" class="nav">Products</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="events.php" class="nav">Events</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="healthhist.php" class="nav">Health History</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="contactus.php" class="nav">Contact Us</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="policies.php" class="nav">Policies</a></font></td>
				</tr>
				<tr>
					<td height="22" onMouseOver="style.backgroundColor='#818181';" onMouseOut="style.backgroundColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav"><a href="sitemap.php" class="nav">Site Map</a></font></td>
				</tr>
				<tr>
					<td height="138"></td>
				</tr>
			</table>
		</td>
		<td width="25"></td>
		<td width="788" valign="top">
			<table width="788" align="center">
				<tr>
					<td align="center"><font face="tahoma" class="int"><b>Products Available</b></font></td>
				</tr>
				<tr>
					<td>
						<table cellpadding="0" width="600" cellspacing="0" align="center" border="0">
							<tr>
								<td height="15"></td>
							</tr>
<?php

$total = $db_object->query("SELECT * FROM products ORDER BY id ASC");
$num = $total->numRows();
if($num > 0) {
	while($n = $total->fetchRow()) {
		$id = $n["id"];
		$nameup = $n["name"];
		echo ("
							<tr>
								<td width=\"25\"><img src=\"/images/record-bullet.gif\" border=\"0\" alt=\"\"></td>
								<td><font face=\"tahoma\"><font face=\"tahoma\">$nameup</font></td>
							</tr>
							<tr>
								<td height=\"7\"></td>
							</tr>");
	}
}

?>

						</table>
					</td>
				</tr>
				<tr>
					<td height="50"></td>
				</tr>						
			</table>
		</td>
		<td width="25"></td>
	</tr>
	<tr>
		<td bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
	<tr>
		<td bgcolor="#c0c0c0" colspan="4"><font face="tahoma" class="copy">&nbsp;&nbsp;<a href="contactus.php" class="copy">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="policies.php" class="copy">Policies</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sitemap.php" class="copy">Site Map</a></font></td>
	</tr>
	<tr>
		<td bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
	<tr>
		<td bgcolor="#c0c0c0" colspan="4"><font face="tahoma" class="copy">&nbsp;&nbsp;&copy; 2004 <a href="http://e2-inc.com" class="copy">e&sup2;-inc.</a> All Rights Reserved.</font></td>
	</tr>
	<tr>
		<td bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
</table>
</body>
</html>

<?php

$db_object->disconnect();
// when you are done.

?>