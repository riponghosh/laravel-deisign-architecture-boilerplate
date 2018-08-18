<?php
namespace App\Services\Excel;
use App\Repositories\Excel\ExcelRepository;
use Excel;

class ExcelService {

	protected $excelRepository;

	public function __construct(ExcelRepository $tasks){

        $this->excelRepository = $tasks;
    }

    public function importExcel($file){
    	$temp_excel=Excel::load($file);
    	$excel_data_array=$temp_excel->toArray();

		$this->excelRepository->storeDataArrayToTask($excel_data_array);

    }

}