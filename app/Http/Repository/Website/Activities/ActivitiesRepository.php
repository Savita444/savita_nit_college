<?php
namespace App\Http\Repository\Website\Activities;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    ActivitiesCategory,
    ActivitiesInformation    
};

class ActivitiesRepository  {

    // public function getPolytechnicCoCurricular($id){
    //     try {

    //         $dataOutputCategory = ActivitiesInformation::join('activities', 'activities.id','=', 'tbl_activity.activity_id')
    //         ->select(
    //             'tbl_activity.id',
    //             'activities.id',
    //             'tbl_activity.activity_description', 
    //             'tbl_activity.activity_specification', 
    //             'tbl_activity.photo', 
    //             'activities.activities',
    //             'tbl_activity.is_active',
    //         )
    //         ->where('tbl_activity.id', $id) // Filter by the provided ID
    //         ->orderBy('tbl_activity.id', 'desc')
    //         ->first(); // Get a single record
    //     dd($dataOutputCategory);
    //     die();
    //         return $dataOutputCategory;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }


    // Repository method
    public function getPolytechnicCoCurricular($id)
    {
        try {
            $dataOutputCategory = ActivitiesInformation::join('activities', 'activities.id', '=', 'tbl_activity.activity_id')
                ->select(
                    'tbl_activity.id',
                    'activities.id as activity_id',
                    'tbl_activity.activity_description', 
                    'tbl_activity.activity_specification', 
                    'tbl_activity.photo', 
                    'activities.activities as activities_name',
                    'tbl_activity.is_active'
                )
                ->where('activities.id', $id) // Filter by the provided ID
                ->orderBy('tbl_activity.id', 'desc')
                ->get(); // Get all records matching the criteria
        
            return $dataOutputCategory; // Return a collection of objects
        } catch (\Exception $e) {
            throw $e; // Throw the exception to be caught by the calling function
        }
    }
    public function getActivityId($id)
    {
        try {
            $dataOutputCategory = ActivitiesCategory::where('is_active', '=', true)
            ->where('is_delete', 0)
            ->select('activities.activities', 'activities.id')
            ->where('id', $id) // Filter by the provided ID
            ->orderBy('id', 'desc')
            ->first();
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }

    
    
    
}    