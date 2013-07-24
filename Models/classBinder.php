<?php

trait simpleTasks_Models_classBinder{
	protected function bindDataToClass($data){
		foreach($data as $val){
			echo $val;
		}
	}
}