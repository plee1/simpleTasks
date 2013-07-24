<?php

trait simpleTasks_Models_classBinder{
	protected function bindDataToClass($data){

		//$properties = array_keys()

		foreach($this as $key => $value){

			if(array_key_exists($key,$data)){
				$this->$key = $data[$key];
			}

		}
	}
}