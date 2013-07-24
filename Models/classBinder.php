<?php

trait simpleTasks_Models_classBinder{
	protected function bindDataToClass($data){

		//$properties = array_keys()

		foreach($this as $key => $value){
			try{
				echo "x: {$key} {$value}";
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		foreach($data as $val){
			echo $val;
		}
	}
}