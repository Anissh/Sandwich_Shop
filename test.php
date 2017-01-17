<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>tbone doesnt sux</p>
<?php
$nme= array();
for ($i=1;$i<10;$i++){
	echo "This is line ".$i."<br>";
}
$nme[1]="Fred";
$nme[2]="Barney";
$nme[3]="Wilma";
$nme[4]="Betty";
for ($i=1;$i<=4;$i++){
	echo $nme[$i]."<br>";
}
for ($i=1;$i<=4;$i++){
	echo "<p style='font-size:24px; color:#03; font-weight:bold;'>".$nme[$i]."</p><br>";
}
?>
</body>
</html>