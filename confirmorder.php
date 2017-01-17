<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(images/Website-Background-Christmas-2014-2.png);
}
-->
</style></head>

<body>
<form action=thankpage.php method="get">
 <table width="70%" border="0" align="center">
   <tr>
     <td bgcolor="#FF3399" style="text-align:center; font-size:24px; font-family:Georgia, 'Times New Roman', Times, serif"><p><a href="AnisshSandwiches.html">Anissh's Sandwiches</a></p>
       <p style="text-align:center; font-size:18px; font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif">&quot;Better than the best!&quot;</p></td>
   </tr>
 </table>
 <table width="70%" border="0" align="center">
   <tr>
     <td width="20%" bgcolor="#FF3399" style="text-align:center"><a href="SandwichOrderPage.html">Order UP</a></td>
     <td width="20%" bgcolor="#FF3399" style="text-align:center"><a href="RestaurantMenuPage.html">Restaurant Menu</a></td>
     <td width="20%" bgcolor="#FF3399" style="text-align:center"><a href="StoreFinder.html">Store Finder</a></td>
     <td width="20%" bgcolor="#FF3399" style="text-align:center"><a href="Promotions.html">Promotions</a></td>
     <td width="20%" bgcolor="#FF3399" style="text-align:center"><a href="LoginPage.html">Login</a></td>
   </tr>
 </table>
 <p>&nbsp;</p>
 <table width="50%" border="0" align="center">
   <tr>
     <td bgcolor="#FF66FF" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; text-align:center">Order Receipt</td>
   </tr>
 </table>
<table width="50%" border="0" align="center">
   <tr>
     <td width="50%" bgcolor="#FF9900" style="text-align:center"> Ingredients </td>
     <td bgcolor="#FF9900" style="text-align:center">Price</td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 $price = 3.00;
	 	$ketchup="";
	 	if (isset($_GET['chkketchup'])==1){
			$ketchup = $_GET["chkketchup"];
		}
		if ($ketchup =="on"){
			echo "Ketchup";
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkketchup'])==1){
			$ketchup = $_GET["chkketchup"];
		}
		if ($ketchup =="on"){
			echo "$1.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$beef="";
		if (isset($_GET['chkbeef'])==1){
			$beef = $_GET["chkbeef"];
		}
		if ($beef =="on"){
			echo "Beef";
			$price++;
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkbeef'])==1){
			$beef = $_GET["chkbeef"];
		}
		if ($beef =="on"){
			echo "$3.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$chicken="";
		if (isset($_GET['chkchicken'])==1){
			$chicken = $_GET["chkchicken"];
		}
		if ($chicken =="on"){
			echo "Chicken";
			$price++;
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkchicken'])==1){
			$chicken = $_GET["chkchicken"];
		}
		if ($chicken =="on"){
			echo "$3.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$bacon="";
		if (isset($_GET['chkbacon'])==1){
			$bacon = $_GET["chkbacon"];
		}
		if ($bacon =="on"){
			echo "Bacon";
			$price++;
			$price++;
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkbacon'])==1){
			$bacon = $_GET["chkbacon"];
		}
		if ($bacon =="on"){
			echo "$4.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$lettuce="";
		if (isset($_GET['chklettuce'])==1){
			$lettuce = $_GET["chklettuce"];
		}
		if ($lettuce =="on"){
			echo "Lettuce";
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chklettuce'])==1){
			$lettuce = $_GET["chklettuce"];
		}
		if ($lettuce =="on"){
			echo "$2.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$mustard="";
		if (isset($_GET['chkmustard'])==1){
			$mustard = $_GET["chkmustard"];
		}
		if ($mustard =="on"){
			echo "Mustard";
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkmustard'])==1){
			$mustard = $_GET["chkmustard"];
		}
		if ($mustard =="on"){
			echo "$1.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$jalapenos="";
		if (isset($_GET['chkjalapenos'])==1){
			$jalapenos = $_GET["chkjalapenos"];
		}
		if ($jalapenos =="on"){
			echo "Jalapenos";
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkjalapenos'])==1){
			$jalapenos = $_GET["chkjalapenos"];
		}
		if ($jalapenos =="on"){
			echo "$2.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$olives="";
		if (isset($_GET['chkolives'])==1){
			$olives = $_GET["chkolives"];
		}
		if ($olives =="on"){
			echo "Olives";
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkolives'])==1){
			$olives = $_GET["chkolives"];
		}
		if ($olives =="on"){
			echo "$2.00";
		}
	 ?>
     </td>
   </tr>
   <tr>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$onions="";
		if (isset($_GET['chkonions'])==1){
			$onions = $_GET["chkonions"];
		}
		if ($onions =="on"){
			echo "Onions";
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkonions'])==1){
			$onions = $_GET["chkonions"];
		}
		if ($onions =="on"){
			echo "$2.00";
		}
	 ?>
     </td>
    </tr>
    <tr>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php
	 	$cheese="";
		if (isset($_GET['chkcheese'])==1){
			$cheese = $_GET["chkcheese"];
		}
		if ($cheese =="on"){
			echo "Cheese";
			$price++;
			$price++;
		}
	 ?>
     </td>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php
	 	if (isset($_GET['chkcheese'])==1){
			$cheese = $_GET["chkcheese"];
		}
		if ($cheese =="on"){
			echo "$2.00";
		}
	 ?>
     </td>
    </tr>
    <tr>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php 
	 echo "Preparation Charges"
	 ?>
     </td>
     <td width="50%" bgcolor="#FF9900" style="text-align:center">
     <?php 
	 echo "$3.00"
	 ?>
     </td>
    </tr>
 </table>
 <table width="50%" border="0" align="center">
   <tr>
     <td bgcolor="#FF6600" style="text-align:center">
     <?php
		echo "Your total cost is $".$price.".00";
	 ?>
     </td>
   </tr>
</table>
 <p>
 <center>
   <label>
      <input type="submit" name="btnconfirmorder" id="btnconfirmorder" value="Confirm Order" />
   </label>
 </center>
 </p>
</body>
</html>​