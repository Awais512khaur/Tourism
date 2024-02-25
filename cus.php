<?php
if(isset($_POST["back_btn"]))
{
  header('Location:packages.php');
}

?>
<?php

// Create the HTML page.
$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
<title>Tour Hub</title>
<style>
body {
  margin-top: 10%;
  margin-left: 15%;
}
table {
  margin-left: 20%;
  margin-right: auto;
  border: 3px solid black;
  border-collapse: collapse
}
div {
 
  margin: auto;
  width: 50%;
  height: 100%;
  padding-bottom: 50px;
 
}


</style>
<link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
  <div>
<form action="connect.php" method="post">

<table style="background:none; border-radius: 10px;backdrop-filter: blur(50px);width:30%;  ">
<tr><td  colspan="2">
<h1 style="text-align: center;">Custom Tour Packages</h1><br><br></td></tr>

  <tr>
<td><b style="font-size: 25px;">Location:&nbsp;</b></td><td><select name="location" style="font-size: 18px;">
  <option value="Hunza">Hunza</option>
  <option value="Hajj">Hajj</option>
  <option value="Umrah">Umarh</option>
</select>&nbsp;&nbsp;</td></tr>
<tr>
<td><b style="font-size: 25px;">Hotel:&nbsp;</b></td><td><select name="hotel" style="font-size: 18px;">
  <option value="Lexus">Luxus Resort</option>
  <option value="Royal Hotal">Dorrar Hotel</option>
  <option value="Makkah Hotel & Towers">Makkah Hotel</option>
  <option value="Dallah Taibah Hotel">Dallah Hotel</option>
</select>&nbsp;&nbsp;</td></tr>
<tr><td>
<b style="font-size: 25px;">Transportation:&nbsp;</b></td><td><select name="rider" style="font-size: 18px;">
  <option value="Car">Car</option>
  <option value="Bus">Bus</option>
  <option value="Plane">Plane</option>
  <option value="Limousine">Limousine</option>
</select>&nbsp;&nbsp;</td></tr>
<tr>
<td><b style="font-size: 25px;">Duration:&nbsp;</b></td><td><select name="duration" style="font-size: 18px;">
  <option value="7-9 day">7 days</option>
  <option value="10-12 days">15 days</option>
  <option value="20 days">20 days</option>
  <option value="1 month">1 month</option>
</select>&nbsp;&nbsp;</td></tr>

<br><br>
<tr><td  colspan="2">
<button>Submit</button></td></tr>
<tr><td  colspan="2">
<button name="back_btn"><a href="index.php" style="text-decoration: none; color: white; font-family: sans-serif;">Back</a></button>
</td></tr>
</table>

</form>
</div>
</body>
</html>
HTML;

// Output the HTML page.
echo $html;

?>
