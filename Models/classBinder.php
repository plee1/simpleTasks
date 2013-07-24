<?php

trait simpleTasks_Models_classBinder{
	protected function bindDataToClass($data){

		//$properties = array_keys()

		foreach($this as $key => $value){
			echo "x: {$key} {$value}";
		}

		foreach($data as $val){
			echo $val;
		}
	}
}