<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}

$lifespaceData = ["1"=>"uno",
				  "displayName"=>"Dan Vasquez",
				  "ID"=>45
];

$lifeUnitData = [
	["ID"=>20,
	"LifeUnit"=>"Client",
	"LifeSpaceID"=>45,
	"displayName"=>"Metcom"
	],
	["ID"=>22,
	 "LifeUnit"=>"Client",

	 "displayName"=>"AIPM"
	]
];

$lifespace = new SimpleTasks_Models_Lifespace(new SimpleTasks_Models_SQLConnection(), $lifespaceData);

$lifeUnits = Array();

foreach($LifeUnitData as $data){
	$lifeUnits[] = new SimpleTasks_Models_LifeUnit(new SimpleTasks_Models_SQLConnection(),$data);
}

?>

<h1>Project Management</h1>

<?php
	foreach($lifeUnits as $unit){
		print_r($unit);
	}
?>



