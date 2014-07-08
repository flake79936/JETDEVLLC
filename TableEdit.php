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
var ID=$(this).attr('Eevename');
$("#Evename_"+ID).hide();
$("#Eaddress_"+ID).hide();
$("#Ecity"+ID).hide();
$("#Estate"+ID).hide();
$("#Ezip"+ID).hide();
$("#EphoneNumber"+ID).hide();
$("#Edescription"+ID).hide();
$("#Ewebsite"+ID).hide();
$("#Ehashtag"+ID).hide();
$("#Efacebook"+ID).hide();
$("#Etwitter"+ID).hide();
$("#Egoogle"+ID).hide();

// $Evename=$row['Evename'];
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
var ID=$(this).attr('Eevename');
var first=$("#Evename_input_"+ID).val();
var last=$("#Eaddress_input_"+ID).val();
var first=$("#Ecity_input_"+ID).val();
var first=$("#Estate_input_"+ID).val();
var last=$("#Ezip_input_"+ID).val();
var first=$("#EphoneNumber_input_"+ID).val();
var last=$("#Edescription_input_"+ID).val();
var first=$("#Ewebsite_input_"+ID).val();
var last=$("#Ehashtag_input_"+ID).val();
var first=$("#Efacebook_input_"+ID).val();
var last=$("#Etwitter_input_"+ID).val();
var first=$("#Egoogle_input_"+ID).val();


var dataString = 'Eevename='+ ID +'&Evename='+Evename+'&Eaddress='+Eaddress'&Ecity='+Ecity+'&Estate='Estate+'&Ezip='Ezip+'&EphoneNumber='
+EphoneNumber+'&Edescription='+Edescription+'&Ewebsite='+Ewebsite+'&Ehashtage='Ehashtag+'&Efacebook='+facebook+'&Etwitter='Etwitter+
'&Egoogle='+Egoogle;
$("#Evename_"+ID).html('<img src="load.gif" />'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#Evename"+ID).html(Evename);
$("#Eaddress_"+ID).html(Eaddress);
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
<span id="Event Name<?php echo $id; ?>" class="text"><?php echo $Evename; ?></span>
<input type="text" value="<?php echo $Evename; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $Eaddress; ?></span> 
<input type="text" value="<?php echo $Eaddress; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $Ecity; ?></span>
<input type="text" value="<?php echo $Ecity; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $Estate; ?></span> 
<input type="text" value="<?php echo $Estate; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $Ezip; ?></span>
<input type="text" value="<?php echo $Ezip; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $EphoneNumber; ?></span> 
<input type="text" value="<?php echo $EphoneNumber; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $Edescription; ?></span>
<input type="text" value="<?php echo $Edescription; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $Ewebsite; ?></span> 
<input type="text" value="<?php echo $Ewebsite; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $Ehashtag; ?></span>
<input type="text" value="<?php echo $Ehashtag; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $Efacebook; ?></span> 
<input type="text" value="<?php echo $Efacebook; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $Etwitter; ?></span>
<input type="text" value="<?php echo $Etwitter; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $Egoogle; ?></span> 
<input type="text" value="<?php echo $Egoogle; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

</tr>
<?php
}
?>
</table>