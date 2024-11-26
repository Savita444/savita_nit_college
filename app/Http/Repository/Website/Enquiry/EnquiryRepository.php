<?php
namespace App\Http\Repository\Website\Enquiry;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Enquiry

}
;

class EnquiryRepository {

    public function getEnquiry() {
        try {

            $data_output = Enquiry::where( 'contact_us_id', '1' )
            ->select(
                'contact_us.*'
            )
            ->get();

            return $data_output;
        } catch ( \Exception $e ) {
            return $e;
        }
    }

    public function addEnquiry( $request )
    {
        try {
            $data = array();
            $project_data = new Enquiry();
            $project_data->name = $request[ 'name' ];
            $project_data->mobile_number = $request[ 'mobile_number' ];
            $project_data->email	 = $request[ 'email' ];
            $project_data->source = $request[ 'source' ];
            $project_data->source_name = $request[ 'source_name' ];
            $project_data->admission_level = $request[ 'admission_level' ];

            $project_data->save();

            $last_insert_id = $project_data->id;

            return $last_insert_id;
        } catch ( \Exception $e ) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }

    }

}
