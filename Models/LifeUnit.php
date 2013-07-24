<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvasquez
 * Date: 7/23/13
 * Time: 9:21 PM
 * To change this template use File | Settings | File Templates.
 */

class SimpleTasks_Models_LifeUnit {
	use simpleTasks_Models_classBinder;

	private $SQL;
	private $ID;
	public $LifeUnit;
	public $LifeSpaceID;
	public $displayName;

	function __construct(SimpleTasks_Models_SQLConnection $_sql,$_data){
		if(!is_null($_sql)){
			$this->SQL = $_sql;
		}else{
			$this->SQL = new SimpleTasks_Models_SQLConnection();
		}
		//mapper function
		$this->bindDataToClass($_data);
	}
}