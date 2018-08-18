<?php
namespace App\Repositories\Excel;
use App\Task;
use Auth;

class ExcelRepository{

	public function storeDataArrayToTask($arr){
		foreach ($arr as $value) {
			$this->insertOneTask($value);
		}
	}

	public function insertOneTask($array){
		$data=new Task;
		$data->name=$array['name'];
		$data->user_id=Auth::user()->id;
		$data->save();
	}
}