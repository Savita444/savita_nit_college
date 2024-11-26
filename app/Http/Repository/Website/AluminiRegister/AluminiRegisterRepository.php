<?php
namespace App\Http\Repository\Website\AluminiRegister;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    Alumini
    
};

class AluminiRegisterRepository  {


    public function addAluminiRegister($request)
	{
// dd($request);

		try {
		$data =array();
		$project_data = new Alumini();
		$project_data->name = $request['name'];
		$project_data->email = $request['email'];
		$project_data->enroll	 = $request['enroll'];
		$project_data->firstsem = $request['firstsem'];
		$project_data->secondsem = $request['secondsem'];
		$project_data->thirdsem = $request['thirdsem'];
		$project_data->fourthsem = $request['fourthsem'];
		$project_data->fifthsem	 = $request['fifthsem'];
		$project_data->sixthsem = $request['sixthsem'];
		$project_data->company = $request['company'];
		$project_data->location = $request['location'];
		$project_data->mobile = $request['mobile'];
		$project_data->passout_year = $request['passout_year'];
		$project_data->department = $request['department'];
		$project_data->message	 = $request['message'];
		$project_data->save();

		$last_insert_id = $project_data->id;

        return $last_insert_id;
	} catch (\Exception $e) {
		return [
			'msg' => $e,
			'status' => 'error'
		];
	}

	}

}    