<?php

namespace Modules\Coodinator\Services\Vetting;


use Modules\Student\Entities\SessionRegistration;

/**
* this class will search for the vetting result using semester level and session
*/

class GenerateVettableResult
{
	private $data;
    private $department;
	function __construct(array $data)
	{
		$this->data = $data;
		
		$this->results = $this->searchVettableResult();
		
	}

	public function searchVettableResult()
	{
        return SessionRegistration::where([
        	'programme_id'=>$this->data['programme'],
        	'session_id'=>$this->data['session'],
        	'batch'=>$this->data['batch']
        ])->paginate($this->data['paginate']);
	}

}