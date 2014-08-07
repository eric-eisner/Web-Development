<?php
include_once "/home/rebelsea/public_html/poll/poll_cookie.php";
?>

<html>
<head>
<title>POTM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function click(e){if (document.all) if (event.button == 2) return false;if
(document.layers) if (e.which == 3) return false;}
function click2(){event.returnValue=false;return false;}if (document.layers)
document.captureEvents(Event.MOUSEDOWN);document.onmousedown=click;document.oncontextmenu=click2;
</script>

<style type="text/css">
body {scrollbar-face-color: #000000;
scrollbar-highlight-color: #363636;
scrollbar-3dlight-color: #262626;
scrollbar-darkshadow-color: #363636;
scrollbar-shadow-color: #363636;
scrollbar-arrow-color: #CC0000;
scrollbar-track-color: #000000;}
</style>

<style type="text/css"> 
 a { text-decoration: none;} 
 a:hover { text-decoration: underline;} 
</style>

<body bgcolor="#000000" topmargin="0" leftmargin="0" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" oncontextmenu="return false">

<br>

<?php
include_once "/home/rebelsea/public_html/poll/booth.php";
echo $php_poll->poll_process(4);
?>

</body>
</html>