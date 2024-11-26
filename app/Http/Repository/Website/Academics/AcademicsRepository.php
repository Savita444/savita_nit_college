<?php
namespace App\Http\Repository\Website\Academics;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    TblAcademicsDetails,
    Academics,
    CoursesOffered,
    DocumentsRequired,
    CAPAdmissionProcedureSteps
    
};

class AcademicsRepository  {


    public function getCoursesOffered()
    {
        try {
            $data_output = CoursesOffered::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('fld_co_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getDocumentsRequired()
    {
        try {
            $data_output = DocumentsRequired::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('documents_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getCAPAdmissionProcedureSteps()
    {
        try {
            $data_output = CAPAdmissionProcedureSteps::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('cap_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }

    public function getPolytechnicRules(){
        try {

            $data_output = Academics::leftJoin('tbl_academics', 'academics.academics_id', '=', 'tbl_academics.academics_id')
		->where('tbl_academics.fld_delete', '0')
          ->select(
			'tbl_academics.*',
			'academics.*','academics.academics as academics_name'
          )
		->orderBy('tbl_academics.fld_academics_id', 'desc')
        ->get()
        ->toArray();

                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}    