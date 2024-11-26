<?php
namespace App\Http\Repository\Website\Facilities;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    TblFacilityDetails,
    Facility
    
};

class FacilitiesRepository  {

    // public function getPolytechniCampus(){
    //     try {

    //         $data_output = TblFacilityDetails::leftJoin('facility ', 'facility.facility_id', '=', 'tbl_facility.facility_id')
    //         ->select(
    //             'tbl_facility.fld_facility_id',
    //             'facility.facility_id as facility_id',
    //             'tbl_facility.facility_description', 
    //             'tbl_facility.facility_specification', 
    //             'tbl_facility.photo', 
    //             'facility.facility',
    //             'tbl_facility.is_active'
    //         )
    //         ->where('tbl_facility.facility_id', $id) // Filter by the provided ID
    //         ->orderBy('tbl_facility.fld_facility_id', 'desc')
    //         ->get(); 
          
    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function getPolytechnicFacilities($id){
        try {


            // $data_output = TblFacilityDetails::leftJoin('facility ', 'facility.facility_id', '=', 'tbl_facility.facility_id')
            // ->select(
            //     'tbl_facility.fld_facility_id',
            //     'facility.facility_id as facility_id',
            //     'tbl_facility.facility_description', 
            //     'tbl_facility.facility_specification', 
            //     'tbl_facility.photo', 
            //     'facility.facility',
            //     'tbl_facility.is_active'
            // )
            // ->where('tbl_facility.facility_id', $id) // Filter by the provided ID
            // ->orderBy('tbl_facility.fld_facility_id', 'desc')
            // ->get(); 

            $data_output = TblFacilityDetails::leftJoin('facility', 'facility.facility_id', '=', 'tbl_facility.facility_id')
            ->select(
                'tbl_facility.fld_facility_id',
                'facility.facility_id as facility_id',
                'tbl_facility.facility_description', 
                'tbl_facility.facility_specification', 
                'tbl_facility.photo', 
                'facility.facility',
                'tbl_facility.is_active'
            )
            ->where('tbl_facility.facility_id', $id) // Filter by the provided ID
            ->where('tbl_facility.fld_delete', 0)
            ->orderBy('tbl_facility.fld_facility_id', 'desc')
            ->get();
        

            
        //     $data_output = Facility::leftJoin('tbl_facility', 'facility.facility_id', '=', 'tbl_facility.facility_id')
		// ->where('tbl_facility.fld_delete', '0')
		// ->where('facility.facility', 'Hostel And Mess')
        //   ->select(
		// 	'tbl_facility.*',
		// 	'facility.*'
        //   )
		// ->orderBy('tbl_facility.fld_facility_id', 'desc')
        // ->get()
        // ->toArray();

                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }


//     public function getAchievement()
// {
//     try {
//         $data_output = Achievement::where('fld_delete', '0')
//         ->where('is_active', '1')
//         ->orderBy('fld_achievement_id', 'desc')
//         ->get();
//        return $data_output;
//     } catch (\Exception $e) {
//         return $e;
//     }
// }

    // public function getPolytechniLibrary(){
    //     try {

    //         $data_output = Facility::leftJoin('tbl_facility', 'facility.facility_id', '=', 'tbl_facility.facility_id')
	// 	->where('tbl_facility.fld_delete', '0')
	// 	->where('facility.facility', 'Library')
    //       ->select(
	// 		'tbl_facility.*',
	// 		'facility.*'
    //       )
	// 	->orderBy('tbl_facility.fld_facility_id', 'desc')
    //     ->get();

    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    // public function getPolytechnicTransportation(){
    //     try {

    //         $data_output = Facility::leftJoin('tbl_facility', 'facility.facility_id', '=', 'tbl_facility.facility_id')
	// 	->where('tbl_facility.fld_delete', '0')
	// 	->where('facility.facility', 'Transportation')
    //       ->select(
	// 		'tbl_facility.*',
	// 		'facility.*'
    //       )
	// 	->orderBy('tbl_facility.fld_facility_id', 'desc')
    //     ->get()
    //     ->toArray();

    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    // public function getPolytechnicOther(){
    //     try {

    //         $data_output = Facility::leftJoin('tbl_facility', 'facility.facility_id', '=', 'tbl_facility.facility_id')
	// 	->where('tbl_facility.fld_delete', '0')
	// 	->where('facility.facility', 'Other Facilities')
    //       ->select(
	// 		'tbl_facility.*',
	// 		'facility.*'
    //       )
	// 	->orderBy('tbl_facility.fld_facility_id', 'desc')
    //     ->get()
    //     ->toArray();

    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
}    