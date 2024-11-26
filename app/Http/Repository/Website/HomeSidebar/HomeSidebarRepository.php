<?php
namespace App\Http\Repository\Website\HomeSidebar;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    MandatoryDisclosure,
    AICTE,
    MSBTE,
    AffiliationCertificates,
    ServiceRule,
    AntiRagging,
    InternalComplaint,
    AboutSCST,
    AcademicCalendar,
    Events,
    StudentSectionDownload,
    StudentSectionScholarship,
    ExpertLecture,
    IndustrialVisitMentor,
    FeesRegulatingAuthority,
    TrainingPlacement,
    NonTeachingStaff,
    EventHome
    
};

class HomeSidebarRepository  {

    public function getMandataryDisclosure(){
        try {

            $data_output = MandatoryDisclosure::where('syllabus_delete', '0')
            ->where('is_active', '1')
            ->orderBy('mandatory_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAICTEExtension(){
        try {
            $data_output = AICTE::where('fld_delete', '0')
                ->where('is_active', '1')
                ->orderBy('aicte_id', 'desc')
                ->get();
                       
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    // public function getAICTEExtension(){
    //     try {

    //         $data_output = AICTE::where('fld_delete', '0')
    //         ->where('is_active', '1')
    //         ->orderBy('aicte_id', 'desc')
    //         ->get();
                   
    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    public function getMSBTE()
    {
        try {
            return MSBTE::where('fld_delete', '0')
                ->where('is_active', '1')
                ->orderBy('msbte_id', 'desc')
                ->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function getPolytechnicAffiliationCertificates(){
        try {

            $data_output = AffiliationCertificates::where('fld_delete', '0')
            ->where('is_active', '1')
            ->orderBy('fld_affiliation_id', 'desc')
            ->get();
                   
                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getServiceRule(){
        try {

            $data_output = ServiceRule::where('fld_delete', '0')
            // ->where('is_active', '1')
            ->orderBy('syllabus_delete', 'desc')
            ->first();
                   
                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }


    // public function getAntiRagging(){
    //     try {
    //         $dataOutputCategory = AntiRagging::join('designation', 'designation.Designation_id', '=', 'tbl_antiragging_members.Designation_id')
    //         ->select(
    //             'tbl_antiragging_members.fld_bm_id',
    //             'designation.Designation_id as Designation',
    //             'tbl_antiragging_members.fld_bm_name', 
    //             'tbl_antiragging_members.mobilenumber', 
    //             'tbl_antiragging_members.email',
    //             'tbl_antiragging_members.is_active'
    //         )
    //         ->orderBy('tbl_antiragging_members.fld_bm_id', 'desc')
    //         ->first(); // Get a single record
           
    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function getAntiRagging()
    {
        try {
            $data_output = AntiRagging::join('designation', 'designation.Designation_id', '=', 'tbl_antiragging_members.Designation_id')
                ->select(
                    'tbl_antiragging_members.fld_bm_id',
                    'designation.Designation as designation_name',
                    'tbl_antiragging_members.fld_bm_name', 
                    'tbl_antiragging_members.mobilenumber', 
                    'tbl_antiragging_members.email'
                )
                ->orderBy('tbl_antiragging_members.fld_bm_id', 'desc')
                ->get();  // Changed from first() to get() to fetch all records
               
            return $data_output;
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
   
    public function getInternalComplaint(){
        try {
            $data_output = InternalComplaint::join('designation', 'designation.Designation_id', '=', 'tbl_complaint_members.Designation_id')
                ->select(
                    'tbl_complaint_members.fld_bm_id',
                    'designation.Designation as designation_name',
                    'tbl_complaint_members.fld_bm_name', 
                    'tbl_complaint_members.mobilenumber', 
                    'tbl_complaint_members.email',
                    'tbl_complaint_members.work_as',
                    'tbl_complaint_members.is_active'
                )
                ->orderBy('tbl_complaint_members.fld_bm_id', 'desc')
                ->get();
            
            return $data_output;
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Error in Repository getInternalComplaint: ' . $e->getMessage());
            // Return an empty collection on error
            return collect();
        }
    }
    

    
    public function getAboutSCST()
    {
        try {
            $data_output = AboutSCST::join('designation', 'designation.Designation_id', '=', 'tbl_scst_members.Designation_id')
                ->select(
                    'tbl_scst_members.fld_bm_id',
                    'designation.Designation as designation_name',
                    'tbl_scst_members.fld_bm_name', 
                    'tbl_scst_members.mobilenumber', 
                    'tbl_scst_members.email',
                    'tbl_scst_members.is_active'
                )
                ->orderBy('tbl_scst_members.fld_bm_id', 'desc')
                ->get();
   
            return $data_output;
        } catch (\Exception $e) {
            \Log::error('Error in Repository getAboutSCST: ' . $e->getMessage());
            return null;
        }
    }
    
    public function getAcademicCalendar()
    {
        try {
            $data_output = AcademicCalendar::where('academic_cal_delete', '0')
                ->orderBy('academic_cal_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    
    public function getEvent()
    {
        try {
            $data_output = EventHome::where('fld_delete', '0')
            // ->where('is_active', '1')
                ->orderBy('event_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }

    public function getStudentSectionDownload()
    {
        try {
            $data_output = StudentSectionDownload::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('student_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getStudentSectionScholarship()
    {
        try {
            $data_output = StudentSectionScholarship::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('scholarship_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getExpertLecture()
    {
        try {
            $data_output = ExpertLecture::where('expert_lecture_delete', '0')
            ->where('is_active', '1')
                ->orderBy('expert_lecture_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getIndustrialVisitMentor()
    {
        try {
            $data_output = IndustrialVisitMentor::where('industrial_visit_delete', '0')
            ->where('is_active', '1')
                ->orderBy('industrial_visit_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    

    public function getFeesRegulatingAuthority()
    {
        try {
            $data_output = FeesRegulatingAuthority::where('fld_delete', '0')
            ->where('is_active', '1')
                ->orderBy('fees_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    
    public function getTrainingPlacement()
    {
        try {
            $data_output = TrainingPlacement::where('trainingplacement_delete', '0')
            ->where('is_active', '1')
                ->orderBy('trainingplacement_id', 'desc')
                ->get();
            return $data_output;
        } catch (\Exception $e) {
            return collect(); // return an empty collection in case of error
        }
    }
    public function getNonTeachingFaculty()
    {
        try {
            $dataOutputCategory = NonTeachingStaff::join('department', 'department.id', '=', 'tbl_staff.Department_id')
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
}    