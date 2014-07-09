<!-- 
<head>
<link rel="stylesheet" type="text/css" href="./css/TableEdit.css" />
</head>
 -->
<?PHP	require_once("./include/membersite_config.php");
	if(!$fgmembersite->CheckLogin()){
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}
		$usrname = $fgmembersite->UsrName();

?>
<!-- Script -->

<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('Eid');
$("#Evename_"+ID).hide();
$("#Eaddress_"+ID).hide();
$("#Ecity_"+ID).hide();
$("#Estate_"+ID).hide();
$("#Ezip_"+ID).hide();
$("#EphoneNumber_"+ID).hide();
$("#Edescription_"+ID).hide();
$("#Ewebsite_"+ID).hide();
$("#Ehashtag_"+ID).hide();
$("#Efacebook_"+ID).hide();
$("#Etwitter_"+ID).hide();
$("#Egoogle_"+ID).hide();


$("#Evename_input_"+ID).show();
$("#Eaddress_input_"+ID).show();
$("#Ecity_input_"+ID).show();
$("#Estate_input_"+ID).show();
$("#Ezip_input_"+ID).show();
$("#EphoneNumber_input_"+ID).show();
$("#Edescription_input_"+ID).show();
$("#Ewebsite_input_"+ID).show();
$("#Ehashtag_input_"+ID).show();
$("#Efacebook_input_"+ID).show();
$("#Etwitter_input_"+ID).show();
$("#Egoogle_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('Eid');
var Evename=$("#Evename_input_"+ID).val();
var Eaddress=$("#Eaddress_input_"+ID).val();
var Ecity=$("#Ecity_input_"+ID).val();
var Estate=$("#Estate_input_"+ID).val();
var Ezip=$("#Ezip_input_"+ID).val();
var EphoneNumber=$("#EphoneNumber_input_"+ID).val();
var Edescription=$("#Edescription_input_"+ID).val();
var Ewebsite=$("#Ewebsite_input_"+ID).val();
var Ehashtag=$("#Ehashtag_input_"+ID).val();
var Efacebook=$("#Efacebook_input_"+ID).val();
var Etwitter=$("#Etwitter_input_"+ID).val();
var Egoogle=$("#Egoogle_input_"+ID).val();

var dataString = 'Eid='+ ID +'&Evename='+Evename+'&Eaddress='+Eaddress'&Ecity='+Ecity+'&Estate='Estate+'&Ezip='Ezip+'&EphoneNumber='
+EphoneNumber+'&Edescription='+Edescription+'&Ewebsite='+Ewebsite+'&Ehashtage='Ehashtag+'&Efacebook='+facebook+'&Etwitter='Etwitter+
'&Egoogle='+Egoogle;
$("#Evename_"+ID).html('<img src="./images/load.gif" />'); // Loading image

if(true)//Evename.length>0 || Ewebsite.length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#Evename_"+ID).html(Evename);
$("#Eaddress_"+ID).html(Eaddress);
$("#Ecity_"+ID).html(Ecity);
$("#Estate_"+ID).html(Estate);
$("#Ezip_"+ID).html(Ezip);
$("#EphoneNumber_"+ID).html(EphoneNumber);
$("#Edescription_"+ID).html(Edescription);
$("#Ewebsite_"+ID).html(Ewebsite);
$("#Ehashtage_"+ID).html(Ehashtag);
$("#Efacebook_"+ID).html(Efacebook);
$("#Etwitter_"+ID).html(Etwitter);
$("#Egoogle_"+ID).html(Egoogle);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>
<!-- End Script -->




//Table Records
<table>
<?php
include('db.php');
// 	$sql = "SELECT * FROM Events WHERE UuserName = '" . $usrname . "' ORDER BY EstartDate";
$sql=mysql_query("SELECT * FROM Events WHERE UuserName = '" . $usrname . "' ");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$Evename=$row['Evename'];
$Eaddress=$row['Eaddress'];
$Ecity=$row['Ecity'];
$Estate=$row['Estate'];
$Ezip=$row['Ezip'];
$EphoneNumber=$row['EphoneNumber'];
$Edescription=$row['Edescription'];
$Ewebsite=$row['Ewebsite'];
$Ehashtag=$row['Ehashtag'];
$Efacebook=$row['Efacebook'];
$$Etwitter=$row['Etwitter'];
$Egoogle=$row['Egoogle'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td">
<span id="Evename_<?php echo $id; ?>" class="text"><?php echo $Evename; ?>
</span>
<input type="text" value="<?php echo $Evename; ?>" class="editbox" 
id="Evename_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="Eaddress_<?php echo $id; ?>" class="text"><?php echo $Eaddress; ?>
</span> 
<input type="text" value="<?php echo $Eaddress; ?>" class="editbox" 
id="Eaddress_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="Ecity_<?php echo $id; ?>" class="text"><?php echo $Ecity; ?>
</span>
<input type="text" value="<?php echo $Ecity; ?>" class="editbox" 
id="Ecity_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="Estate_<?php echo $id; ?>" class="text"><?php echo $Estate; ?>
</span> 
<input type="text" value="<?php echo $Estate; ?>" class="editbox" 
id="Estate_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="Ezip_<?php echo $id; ?>" class="text"><?php echo $Ezip; ?>
</span>
<input type="text" value="<?php echo $Ezip; ?>" class="editbox" 
id="Ezip_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="EphoneNumber_<?php echo $id; ?>" class="text"><?php echo $EphoneNumber; ?>
</span> 
<input type="text" value="<?php echo $EphoneNumber; ?>" class="editbox" 
id="EphoneNumber_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="Edescription_<?php echo $id; ?>" class="text"><?php echo $Edescription; ?>
</span>
<input type="text" value="<?php echo $Edescription; ?>" class="editbox" 
id="Edescription_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="Ewebsite_<?php echo $id; ?>" class="text"><?php echo $Ewebsite; ?>
</span> 
<input type="text" value="<?php echo $Ewebsite; ?>" class="editbox" 
id="Ewebsite_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="Ehashtag_<?php echo $id; ?>" class="text"><?php echo $Ehashtag; ?>
</span>
<input type="text" value="<?php echo $Ehashtag; ?>" class="editbox" 
id="Ehashtag_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="Efacebook_<?php echo $id; ?>" class="text"><?php echo $Efacebook; ?>
</span> 
<input type="text" value="<?php echo $Efacebook; ?>" class="editbox" 
id="Efacebook_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="Etwitter_<?php echo $id; ?>" class="text"><?php echo $Etwitter; ?>
</span>
<input type="text" value="<?php echo $Etwitter; ?>" class="editbox" 
id="Etwitter_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="Egoogle_<?php echo $id; ?>" class="text"><?php echo $Egoogle; ?>
</span> 
<input type="text" value="<?php echo $Egoogle; ?>" class="editbox" 
id="Egoogle_input_<?php echo $id; ?>"/>
</td>

</tr>
<?php
}
?>
</table>