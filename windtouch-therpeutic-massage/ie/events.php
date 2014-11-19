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
body {
	scrollbar-face-color: #ffffff;
  scrollbar-highlight-color: #000000;
  scrollbar-3dlight-color: #000000;
  scrollbar-darkshadow-color: #000000;
  scrollbar-shadow-color: #000000;
  scrollbar-arrow-color: #000000;
  scrollbar-track-color: #ffffff;
}
font {
	font-size: 12pt;
	color: #000077
}
font.desc {
	font-size: 12pt;
	color: #000077;
}
font.dt {
	font-size: 11pt;
	color: #000000;
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

<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" bgcolor="#ffffff">
<table cellpadding="0" cellspacing="0" border="1" bordercolor="#ffffff">
	<tr>
		<td border="0" bordercolor="ffffff" colspan="4"><img src="/images/banner.gif" alt="Wind Touch Therapeutic Massage - Helping each client achieve their optimal health by increasing their Mind-Body awareness">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="173" height="130">
        <param name="movie" value="/wind.swf">
        <param name="quality" value="high">
        <embed src="/wind.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="173" height="130"></embed>
			</object>
		</td>
	</tr>
	<tr>
		<td valign="top" bordercolor="#000000" bgcolor="c0c0c0">
			<table width="150" cellpadding="0" cellspacing="1" border="1" bordercolor="c0c0c0">
				<tr>
					<td height="22"><font face="tahoma" class="nav"><b>Navigation</b></font></td>
				</tr>
				<tr>
					<a href="index.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Home</font></td></a>
				</tr>
				<tr>
					<a href="services.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Services</font></td></a>
				</tr>
				<tr>
					<a href="newsletter.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Newsletter</font></td></a>
				</tr>
				<tr>
					<a href="faqs.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Faq's</font></td></a>
				</tr>
				<tr>
					<a href="products.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Products</font></td></a>
				</tr>
				<tr>
					<a href="events.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Events</font></td></a>
				</tr>
				<tr>
					<a href="healthhist.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Health History</font></td></a>
				</tr>
				<tr>
					<a href="contactus.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Contact Us</font></td></a>
				</tr>
				<tr>
					<a href="policies.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Policies</font></td></a>
				</tr>
				<tr>
					<a href="sitemap.php" class="nav"><td height="22" onMouseOver="style.backgroundColor='#818181'; style.borderColor='#000000';" onMouseOut="style.backgroundColor=''; style.borderColor='';">&nbsp;&nbsp;<font face="tahoma" class="nav">Site Map</font></td></a>
				</tr>
				<tr>
					<td height="147"></td>
				</tr>
			</table>
		</td>
		<td width="25"></td>
		<td width="788" valign="top">
			<table width="788" align="center">
				<tr>
					<td align="center"><font face="tahoma" class="int"><b>Events</b></font></td>
				</tr>
				<tr>
					<td>
						<table cellpadding="0" width="600" cellspacing="0" align="center" border="0">
							<tr>
								<td height="15"></td>
							</tr>
<?php

$total = $db_object->query("SELECT id, DATE_FORMAT(date, '%c-%d-%Y') as date, description FROM events ORDER BY date ASC");
$num = $total->numRows();
if($num > 0) {
	while($n = $total->fetchRow()) {
		$id = $n["id"];
		$dateup = $n["date"];
		$descup = $n["description"];
		echo ("
							<tr>
								<td>
								<font face=\"tahoma\" class=\"dt\"><b>$dateup</b></font>
								</td>
							</tr>
							<tr>
								<td height=\"7\"></td>
							</tr>
							<tr>
								<td>
								<font face=\"tahoma\" class=\"desc\">$descup</font>
								</td>
							</tr>
							<tr>
								<td height=\"15\"></td>
							</tr>
							<tr>
								<td align=\"center\"><img src=\"/images/record-spacer.gif\" alt=\"\" border=\"0\"></td>
							</tr>
							<tr>
								<td height=\"15\"></td>
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
		<td bordercolor="#c0c0c0" bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
	<tr>
		<td bordercolor="#c0c0c0" bgcolor="#c0c0c0" colspan="4"><font face="tahoma" class="copy">&nbsp;&nbsp;<a href="contactus.php" class="copy">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="policies.php" class="copy">Policies</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sitemap.php" class="copy">Site Map</a></font></td>
	</tr>
	<tr>
		<td bordercolor="#c0c0c0" bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
	<tr>
		<td bordercolor="#c0c0c0" bgcolor="#c0c0c0" colspan="4"><font face="tahoma" class="copy">&nbsp;&nbsp;&copy; 2004 <a href="http://e2-inc.com" class="copy">e&sup2;-inc.</a> All Rights Reserved.</font></td>
	</tr>
	<tr>
		<td bordercolor="#c0c0c0" bgcolor="#c0c0c0" colspan="4" height="5"><font class="spacer">&nbsp;&nbsp;</font></td>
	</tr>
</table>
</body>
</html>

<?php

$db_object->disconnect();
// when you are done.

?>