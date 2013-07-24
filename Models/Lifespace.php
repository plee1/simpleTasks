<?php
/**
 * Created by JetBrains PhpStorm.
 * User: danvasquez
 * Date: 7/23/13
 * Time: 8:27 PM
 * To change this template use File | Settings | File Templates.
 */

	foreach (glob("Models/*.php") as $filename)
	{
		require_once($filename);
	}

class SimpleTasks_Models_Lifespace {

	use simpleTasks_Models_classBinder;

	private $SQL;
	public $displayName;

	function __construct(SimpleTasks_Models_SQLConnection $_sql=null,$_data){
		if(!is_null($_sql)){
			$this->SQL = $_sql;
		}else{
			$this->SQL = new SimpleTasks_Models_SQLConnection();
		}

		$this->bindDataToClass($_data);
	}
}