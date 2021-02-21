<html> 
<head> 
<title>Datos.</title> 
</head> 

<body> 

<?php
$nombretxt = $_POST['nombretxt'];
$Apellidotxt = $_POST['Apellidotxt'];
$Emailtxt = $_POST['Emailtxt'];
$Teléfonotxt = $_POST['Teléfonotxt'];
$Origentxt = $_POST['Origentxt'];
$Destinotxt = $_POST['Destinotxt'];
$Descripciontxt = $_POST['Descripciontxt'];

echo $nombretxt; 
echo "<br/>";
echo $Apellidotxt; 
echo "<br/>";
echo $Emailtxt;
echo "<br/>"; 
echo $Teléfonotxt;
echo "<br/>"; 
echo $Origentxt;
echo "<br/>"; 
echo $Destinotxt;
echo "<br/>"; 
echo $Descripciontxt; 

?>

</body>
</html>
