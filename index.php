<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}

$lifespaceData =[ ["displayName"=>"Personal",
				  "ID"=>45],
				["displayName"=>"Maestro",
				 "ID"=>46],
				["displayName"=>"Harvard",
				 "ID"=>47]
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



$lifeSpaces = Array();
$lifeUnits = Array();

foreach($lifespaceData as $data){
	$lifeSpaces[] = new SimpleTasks_Models_Lifespace(new SimpleTasks_Models_SQLConnection(), $data);
}

foreach($lifeUnitData as $data){
	$lifeUnits[] = new SimpleTasks_Models_LifeUnit(new SimpleTasks_Models_SQLConnection(),$data);
}

?>

<h1>Project Management</h1>

<label>
	Spaces
	<ul>
		<?php
		foreach($lifeSpaces as $unit){
			echo "<li>{$unit->displayName}</li>";
		}
		?>
	</ul>
</label>

<label>
	Units
	<ul>
		<?php
			foreach($lifeUnits as $unit){
				echo "<li>{$unit->displayName}</li>";
			}
		?>
	</ul>
</label>




