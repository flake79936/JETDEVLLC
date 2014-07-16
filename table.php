<?php
require_once 'database.php';
$db = new Database;
$action = (isset($_REQUEST['action']) && !empty($_REQUEST['action']))?$_REQUEST['action']:'ajax';
if($action == 'ajax') {
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = 4; //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	
	//Count the total number of row in your table*/
	$total_users = $db->total();
	$total_pages = ceil($total_users/$per_page);
	$reload = 'liveUpdate.php';	
}


$data = array('name'=>'rajaaaa','email'=>'amanishjangiaaaar@gmail.com');
//main query to fetch the data
echo'<pre>';
print_r($db->get_users());
print_r($db->paginate());
?>