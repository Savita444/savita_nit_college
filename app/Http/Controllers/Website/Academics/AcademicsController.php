<?php

namespace App\Http\Controllers\Website\Academics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Academics\AcademicsServices;
use Session;


// use App\Models\ {
//     Index
// };

class AcademicsController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new AcademicsServices();  
    }

   
      
    public function getCoursesOffered()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getCoursesOffered();
            return view('website.pages.academics.courses-offered',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 
      
    public function getDocumentsRequired()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getDocumentsRequired();
            return view('website.pages.academics.documents-required',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 
      
    public function getCAPAdmissionProcedureSteps()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getCAPAdmissionProcedureSteps();
            return view('website.pages.academics.CAP-admission-procedure-steps',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 
      
    public function getPolytechnicRules()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getPolytechnicRules();
            return view('website.pages.academics.polytechnic-rules',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 
    
         
}