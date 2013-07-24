<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}

$x = new SimpleTasks_Models_Lifespace(new SimpleTasks_Models_SQLConnection(),["1"=>"uno","displayName"=>"Dan Vasquez","ID"=>45]);

?>

<h1>Project Management</h1>

<?=$x->displayName;?>

<br>

<?=$x->getID();?>

