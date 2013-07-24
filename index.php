<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}

$x = new SimpleTasks_Models_Lifespace(new SimpleTasks_Models_SQLConnection(),["1"=>"uno","2"=>"dos"]);

?>

<h1>Project Management</h1>

