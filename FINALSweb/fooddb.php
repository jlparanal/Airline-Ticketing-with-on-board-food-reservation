<?php
if((isset($_POST['food']))){
if((!empty($_POST['food']))){
include ('foodval.php');
$db=new config();
$isfoodAdded=$db->addfood($_POST['food']);
if ($isfoodAdded){
	header('location: index.php');
}else
{
	echo'not.';}
}
else
{echo'Some fields are empty.';}
}