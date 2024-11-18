<?php
namespace App\Http\Repository\Website\Department;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    DepartmentCategory,
    DepartmentInformation,
    Curriculum,
    Designation,
    Staff,
    Syllabus,
    Timetable,
    Mentors,
    Events,
    Awards,
    Members,
    Plan,
    Newsletter,
    Laboratories

};

class DepartmentRepository  {

    public function getProfile($id)
    {
        try {
            $dataOutputCategory = DepartmentInformation::join('department', 'department.id', '=', 'tbl_department.Department_id')
                ->select(
                    'tbl_department.id',
                    'department.id as Department_id',
                    'tbl_department.department_description', 
                    'tbl_department.department_mission', 
                    'tbl_department.department_vision', 
                    'tbl_department.department_specification',
                    'tbl_department.photo',
                    'department.Department',
                    'tbl_department.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_department.id', 'desc')
                ->get(); 
    
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getDepartVisionMission($id)
    {
        try {
            $dataOutputCategory = DepartmentInformation::join('department', 'department.id', '=', 'tbl_department.Department_id')
                ->select(
                    'tbl_department.id',
                    'department.id as Department_id',
                    'tbl_department.department_description', 
                    'tbl_department.department_mission', 
                    'tbl_department.department_vision', 
                    'tbl_department.department_specification',
                    'tbl_department.photo',
                    'department.Department',
                    'tbl_department.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_department.id', 'desc')
                ->get(); 
    
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    

    public function getCurriculum($id)
    {
        try {
            $dataOutputCategory = Curriculum::join('department', 'department.id', '=', 'curriculum.department_id')
                ->select(
                    'curriculum.curriculum_id',
                    'department.id as department_id',
                    'curriculum.year', 
                    'curriculum.semister', 
                    'curriculum.file', 
                    'department.Department',
                    'curriculum.is_active',
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->where('curriculum.syllabus_delete', 0) 
                ->orderBy('curriculum.curriculum_id', 'desc')
                ->get(); 
            // dd($dataOutputCategory); die;
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getFaculty()
    {
        try {
            $dataOutputCategory = Staff::join('department', 'department.id', '=', 'tbl_staff.Department_id')
                ->join('designation', 'tbl_staff.Designation_id', '=', 'designation.Designation_id')
                ->select(
                    'tbl_staff.fld_staff_id',
                    'tbl_staff.fld_staff_name',
                    'department.id as Department_id',
                    'tbl_staff.Designation_id', 
                    'tbl_staff.fld_staff_qualification', 
                    'tbl_staff.fld_staff_experiance', 
                    'tbl_staff.fld_staff_photo', 
                    'department.Department',
                    'designation.Designation',
                    'tbl_staff.is_active' // Make sure this field exists in your table
                )
                // ->where('department.id', $id) // Filter by the provided ID
                ->where('tbl_staff.fld_delete', '0')
                ->orderBy('tbl_staff.fld_staff_id', 'desc')
                ->get(); 
               
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getFacultyDepartmentId($id)
    {
        try {
            $dataOutputCategory = Staff::join('department', 'department.id', '=', 'tbl_staff.Department_id')
                ->join('designation', 'tbl_staff.Designation_id', '=', 'designation.Designation_id')
                ->select(
                    'tbl_staff.fld_staff_id',
                    'tbl_staff.fld_staff_name',
                    'department.id as Department_id',
                    'tbl_staff.Designation_id', 
                    'tbl_staff.fld_staff_qualification', 
                    'tbl_staff.fld_staff_experiance', 
                    'tbl_staff.fld_staff_photo', 
                    'department.Department',
                    'designation.Designation',
                    'tbl_staff.fld_staff', 
                    'tbl_staff.is_active' 
                )
                ->where('department.id', $id)
                ->where('tbl_staff.fld_delete', '0')
                ->orderBy('tbl_staff.fld_staff_id', 'desc')
                ->get(); 

            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getNonTeachingFacultyDepartmentId($id)
    {
        try {
            $dataOutputCategory = Staff::join('department', 'department.id', '=', 'tbl_staff.Department_id')
                ->join('designation', 'tbl_staff.Designation_id', '=', 'designation.Designation_id')
                ->select(
                    'tbl_staff.fld_staff_id',
                    'tbl_staff.fld_staff_name',
                    'department.id as Department_id',
                    'tbl_staff.Designation_id', 
                    'tbl_staff.fld_staff_qualification', 
                    'tbl_staff.fld_staff_experiance', 
                    'tbl_staff.fld_staff_photo', 
                    'department.Department',
                    'designation.Designation',
                    'tbl_staff.fld_staff', 
                    'tbl_staff.is_active' 
                )
                ->where('department.id', $id)
                ->where('tbl_staff.fld_delete', '0')
                ->orderBy('tbl_staff.fld_staff_id', 'desc')
                ->get(); 

            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    
    public function getSyllabus($id)
    {
        try {
            $dataOutputCategory = Syllabus::join('department', 'department.id', '=', 'syllabus.department_id')
                ->select(
                    'syllabus.syllabus_id',
                    'department.id as department_id',
                    'syllabus.year', 
                    'syllabus.semister', 
                    'syllabus.file', 
                    'department.Department',
                    'syllabus.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->where('syllabus.syllabus_delete', '0')
                ->orderBy('syllabus.syllabus_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getTimeTable($id)
{
    try {
        $dataOutputCategory = Timetable::join('department', 'department.id', '=', 'timetable.department_id')
            ->select(
                'timetable.timetable_id',
                'department.id as department_id',
                'timetable.year', 
                'timetable.semister', 
                'timetable.file', 
                'department.Department',
                'timetable.is_active'
            )
            ->where('timetable.syllabus_delete', 0) 
            ->where('department.id', $id)
            ->orderBy('timetable.timetable_id', 'desc')
            ->get(); // Use get() to fetch multiple records

        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}

    public function getMentor($id)
    {
        try {
            $dataOutputCategory = Mentors::join('department', 'department.id', '=', 'tbl_mentors.Department_id')
                ->select(
                    'tbl_mentors.fld_bm_id',
                    'department.id as department_id',
                    'tbl_mentors.class_name', 
                    'tbl_mentors.roll_no', 
                    'tbl_mentors.mentor_name', 
                    'department.Department',
                    'tbl_mentors.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->where('tbl_mentors.fld_delete', '0')
                ->orderBy('tbl_mentors.fld_bm_id', 'desc')
                ->get(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAchievementsAwards($id)
    {
        try {
            $dataOutputCategory = Awards::join('department', 'department.id', '=', 'tbl_awards.department_id')
                ->select(
                    'tbl_awards.fld_gallery_id',
                    'department.id as department_id',
                    'tbl_awards.imageTitle', 
                    'tbl_awards.fld_gallery_photo', 
                    'department.Department',
                    'tbl_awards.is_active'
                )
               ->where('department.id', $id) 
               ->where('tbl_awards.fld_delete', 0) 
                ->orderBy('tbl_awards.fld_gallery_id', 'desc')
                ->get(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getActivitiesEvents($id)
    {
        try {
            $dataOutputCategory = Events::join('department', 'department.id', '=', 'tbl_events.department_id')
                ->select(
                    'tbl_events.fld_gallery_id',
                    'department.id as department_id',
                    'tbl_events.imageTitle', 
                    'tbl_events.fld_gallery_photo', 
                    'department.Department',
                    'tbl_events.is_active'
                )
                ->where('department.id', $id) 
                ->where('tbl_events.fld_delete', '0')
                ->orderBy('tbl_events.fld_gallery_id', 'desc')
                ->get(); // Get a single record
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getStudentsAssociation($id)
    {
        try {
            $dataOutputCategory = Members::join('department', 'department.id', '=', 'tbl_sa_members.department_id')
                ->join('designation', 'tbl_sa_members.Designation_id', '=', 'designation.Designation_id')
                ->select(
                    'tbl_sa_members.fld_bm_id',
                    'department.id as department_id',
                    'tbl_sa_members.fld_bm_name',
                    'designation.Designation',
                    'tbl_sa_members.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->where('tbl_sa_members.fld_delete', '0')
                ->orderBy('tbl_sa_members.fld_bm_id', 'desc')
                ->get();
    
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
        public function getDepartmentId($id)
    {
        try {
            $dataOutputCategory = DepartmentCategory::where('is_active', '=', true)
            ->where('Department_delete', 0)
            ->select('department.Department', 'department.id')
            ->where('id', $id) // Filter by the provided ID
            ->orderBy('id', 'desc')
            ->first();
             
            return $dataOutputCategory;
            // dd($dataOutputCategory); die;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getPlan($id)
{
    try {
        $dataOutputCategory = Plan::join('department', 'department.id', '=', 'tbl_plan.department_id')
            ->select(
                'tbl_plan.fld_bm_id',
                'department.id as department_id',
                'tbl_plan.edu_year', 
                'tbl_plan.semister', 
                'tbl_plan.plan_name', 
                'tbl_plan.subject_name',
                'tbl_plan.file',
                'department.Department',
                'tbl_plan.is_active'
            )
            ->where('tbl_plan.department_id', $id)
               ->where('tbl_plan.fld_delete', '0')
            ->orderBy('tbl_plan.fld_bm_id', 'desc')
            ->get();

        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}

public function getNewsletter($id)
{
    try {
        $dataOutputCategory = Newsletter::join('department', 'department.id', '=', 'newsletters.department_id')
            ->select(
                'newsletters.newsletters_id',
                'department.id as department_id',
                'newsletters.file', 
                'department.Department',
                'newsletters.is_active'
            )
            ->where('department.id', $id) // Filter by the provided ID
            ->where('newsletters.newsletters_delete', '0')
            ->orderBy('newsletters.newsletters_id', 'desc')
            ->get(); 
       
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}

public function getLaboratoriesInformation($id)
{
    try {
        $dataOutputCategory = Laboratories::join('department', 'department.id', '=', 'tbl_laboratories.Department_id')
            ->select(
                'tbl_laboratories.fld_laboratories_id',
                'department.id as department_id',
                'tbl_laboratories.laboratories_description', 
                'tbl_laboratories.photo', 
                'department.Department',
                'tbl_laboratories.is_active'
            )
            ->where('department.id', $id) // Filter by the provided ID
            ->where('tbl_laboratories.fld_delete', '0')
            ->orderBy('tbl_laboratories.fld_laboratories_id', 'desc')
            ->get(); 
        
            // dd($dataOutputCategory); 
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}

    
}                               