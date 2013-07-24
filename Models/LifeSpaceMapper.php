<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvasquez
 * Date: 7/23/13
 * Time: 11:06 PM
 * To change this template use File | Settings | File Templates.
 */

	foreach (glob("Models/*.php") as $filename)
	{
		require_once($filename);
	}

class simpleTasks_Models_LifeSpaceMapper {
	private $columns = ["ID",
						"displayName"];


	function __construct(){

	}

	function __toString(){
		return get_class($this);
	}

	public function GetAll(SimpleTasks_Models_SQLConnection $SQL){
		$query = "SELECT ";
		$c = 0;
		do{
			$query.=$this->columns[$c];
			if($c < count($this->columns)-1){
				$query.=" , ";
			}
			$c++;
		}while($c < count($this->columns));

		$query.=" FROM LifeSpace";

		$result = $SQL->DoSelectQuery($query);

		$spaces = Array();
		foreach($result as $row){
			$spaces[] = new SimpleTasks_Models_Lifespace($SQL,$row);
		}

		return $spaces;
	}
}