<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}


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

foreach($lifeUnitData as $data){
	$lifeUnits[] = new SimpleTasks_Models_LifeUnit(new SimpleTasks_Models_SQLConnection(),$data);
}

$lifespaceData =[ ["displayName"=>"Personal",
				   "ID"=>45],
				  ["displayName"=>"Maestro",
				   "ID"=>46,
				  "LifeUnits"=>$lifeUnits],
				  ["displayName"=>"Harvard",
				   "ID"=>47]
];


foreach($lifespaceData as $data){
	$lifeSpaces[] = new SimpleTasks_Models_Lifespace(new SimpleTasks_Models_SQLConnection(), $data);
}

?>

<h1>Project Management</h1>

<label>
	Spaces
	<ul>
		<?php
		foreach($lifeSpaces as $space){
			echo "<li>{$space->displayName}</li>";

			if(count($space->LifeUnits)>0){
				echo "<label>
					Units
					<li>
						<dl>";
				foreach($space->LifeUnits as $unit){
					echo "<dt>{$unit->displayName}</dt>";
					echo "<dd>{$unit->LifeUnit}</dd>";
				}
				echo "</dl></li></label>";
			}
		}
		?>
	</ul>
</label>





