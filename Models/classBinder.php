<?php

trait simpleTasks_Models_classBinder{
	protected function bindDataToClass($data){
		foreach($this as $key => $value){
			if(array_key_exists($key,$data)){
				$this->$key = $data[$key];
			}
		}
	}
}