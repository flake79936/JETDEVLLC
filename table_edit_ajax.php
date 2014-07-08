<?php
include("db.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$Uusername=mysql_escape_String($_POST['Uusername']);
$Evename=mysql_escape_String($_POST['Evename']);
$Eaddress=mysql_escape_String($_POST['Eaddress']);
$Ecity=mysql_escape_String($_POST['Ecity']);
$Estate=mysql_escape_String($_POST['Estate']);
$Ezip=mysql_escape_String($_POST['Ezip']);
$EphoneNumber=mysql_escape_String($_POST['EphoneNumber']);
$Edescription=mysql_escape_String($_POST['Edescription']);
$Ewebsite=mysql_escape_String($_POST['Ewebsite']);
$Ehashtag=mysql_escape_String($_POST['Ehashtag']);
$Efacebook=mysql_escape_String($_POST['Efacebook']);
$Etwitter=mysql_escape_String($_POST['Etwitter']);
$Egoogle=mysql_escape_String($_POST['Egoogle']);


// $Eaddress=$row['Eaddress'];
// $Ecity=$row['Ecity'];
// $Estate=$row['Estate'];
// $Ezip=$row['Ezip'];
// $EphoneNumber=$row['EphoneNumber'];
// $Edescription=$row['Edescription'];
// $Ewebsite=$row['Ewebsite'];
// $Ehashtag=$row['Ehashtag'];
// $Efacebook=$row['Efacebook'];
// $$Etwitter=$row['Etwitter'];
// $Egoogle=$row['Egoogle'];


$sql = "UPDATE Events SET Evename='$Evename',
Eaddress='$Eaddress',Ecity='$Ecity',
Estate='$Estate',Ezip='$Ezip',
EphoneNumber='$EphoneNumber',Edescription='$Edescription',
Ewebsite='$Ewebsite',Ehashtag='$Ehashtag',
Efacebook='$Efacebook',Etwitter='$Etwitter',
Egoogle='$Egoogle' 
WHERE Uusername='$Uusername'";
mysql_query($sql);
}
?>