<?php
namespace App\Http\Repository\Website\ContactUs;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    ContactUs,
    TblContactDetails
    
};

class ContactUsRepository  {

    public function getContactUs(){
        try {

            $data_output = ContactUs::where('contact_us_id', '1')
          ->select(
			'contact_us.*'
          )
        ->get();

                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addContactUs($request)
	{
		try {
		$data =array();
		$project_data = new TblContactDetails();
		$project_data->fld_contact_name = $request['fld_contact_name'];
		$project_data->fld_contact_subject = $request['fld_contact_subject'];
		$project_data->fld_contact_email	 = $request['fld_contact_email'];
		$project_data->fld_contact_number = $request['fld_contact_number'];
		$project_data->fld_contact_message = $request['fld_contact_message'];
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