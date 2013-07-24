<?php
foreach (glob("Models/*.php") as $filename)
{
	require_once($filename);
}

$SpacesMapper = new simpleTasks_Models_LifeSpaceMapper();
$Spaces = $SpacesMapper->GetAll(new SimpleTasks_Models_SQLConnection());

?>

<h1>Project Management</h1>


	Spaces
	<ul>
		<?php
		foreach($Spaces as $space){
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






