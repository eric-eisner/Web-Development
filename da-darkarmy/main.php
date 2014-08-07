<html>
<head>
<title>Dark Army</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="javascript">
if (document.images) { 
image1on = new Image(); 
image1on.src = "home-over.gif"; 
image1off = new Image(); 
image1off.src = "home.gif";  
image2on = new Image(); 
image2on.src = "forums-over.gif"; 
image2off = new Image(); 
image2off.src = "forums.gif";
image3on = new Image(); 
image3on.src = "members-over.gif"; 
image3off = new Image(); 
image3off.src = "members.gif";       
}  
function changeImages() { 
if (document.images) { 
for (var i=0; i<changeImages.arguments.length; i+=2) { 
document[changeImages.arguments[i]].src = eval(changeImages.arguments[i+1] + ".src"); 
} 
} 
}
</script>

<style type="text/css">
 body {scrollbar-face-color: #000000;
  scrollbar-highlight-color: #c0c0c0;
  scrollbar-3dlight-color: #c0c0c0;
  scrollbar-darkshadow-color: #c0c0c0;
  scrollbar-shadow-color: #000000;
  scrollbar-arrow-color: #ff0000;
  scrollbar-track-color: #000000;}
</style>

</head>

<body bgcolor="#d0d0d0" bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0">
<br><br>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td colspan="4"><img src="top.gif" border="0"></td>
  </tr>
  <tr>
    <td>
      <a onMouseOver="changeImages('image1', 'image1on')" onMouseOut="changeImages('image1', 'image1off')" href="home.php" target="iframe">
			<img src="home.gif" border="0" alt="home" name="image1"></a></td>
    <td>
      <a onMouseOver="changeImages('image2', 'image2on')" onMouseOut="changeImages('image2', 'image2off')" href="forums/index.php" target="_parent">
			<img src="forums.gif" border="0" alt="forums" name="image2"></a></td>
    <td>
      <a onMouseOver="changeImages('image3', 'image3on')" onMouseOut="changeImages('image3', 'image3off')" href="members.php" target="iframe">
      <img src="members.gif" border="0" alt="members" name="image3"></a></td>
    <td><img src="botright.gif" border="0"></td>
  </tr>
  <tr>
    <td width="100%" colspan="5" nowrap>
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
			  <tr>
          <td align="left" width="8" height="437"><img src="outleft.gif" border="0"><br><img src="outleftcorn.gif" border="0"></td>
		      <td align="center"><iframe width="784" height="437" frameborder="0" name="iframe" src="home.php"></iframe><br><img src="outbot.gif" border="0"></td>
		      <td align="right" width="8" height="437"><img src="outright.gif" border="0"><br><img src="outrightcorn.gif" border="0"></td>
			  </tr>
			</table>
		</td>
  </tr>
	<tr>
	  <td colspan="4">
    <p align="center"><font size="1" color="#202020" face="tahoma">Copyright 2004
		e² inc. - All Rights Reserved</font></p></td>
	</tr>
</table>
<br><br>
</body>
</html>
