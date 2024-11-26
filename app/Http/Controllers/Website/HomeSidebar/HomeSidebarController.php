<?php

namespace App\Http\Controllers\Website\HomeSidebar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\HomeSidebar\HomeSidebarServices;
use Session;
class HomeSidebarController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new HomeSidebarServices();  
    }

    
    public function getMandataryDisclosure()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getMandataryDisclosure();
            return view('website.pages.home-sidebar.polytechnic-mandatary', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
   
    public function getAICTEExtension()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAICTEExtension();
            return view('website.pages.home-sidebar.polytechnic-aicte', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }  
    public function getMSBTE()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getMSBTE(); // Assuming this fetches data correctly
            return view('website.pages.home-sidebar.polytechnic-affiliation', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    

    public function getPolytechnicAffiliationCertificates()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getPolytechnicAffiliationCertificates();
            return view('website.pages.home-sidebar.polytechnic-affiliation_certificates', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getServiceRule()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getServiceRule();
            return view('website.pages.home-sidebar.polytechnic-affiliation_certificates', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function getAntiRagging()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAntiRagging();
            return view('website.pages.home-sidebar.polytechnic-anti-ragging', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return view('website.pages.home-sidebar.polytechnic-anti-ragging', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment' => $this->menuDepartment,
                'menuFacility' => $this->menuFacility,
                'data_output' => []
            ]);
        }
    }
    
    
    // public function getAntiRagging()
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $data_output = $this->service->getAntiRagging();
    //         return view('website.pages.home-sidebar.polytechnic-anti-ragging', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    public function getInternalComplaint()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getInternalComplaint();
    
            return view('website.pages.home-sidebar.polytechnic-internal-complaint', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Error in Controller getInternalComplaint: ' . $e->getMessage());
            return view('website.pages.home-sidebar.polytechnic-internal-complaint', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment' => $this->menuDepartment,
                'menuFacility' => $this->menuFacility,
                'data_output' => collect() // Pass an empty collection to the view in case of error
            ]);
        }
    }
    
    
    public function getAboutSCST()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAboutSCST();
   
            return view('website.pages.home-sidebar.polytechnic-scst', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            \Log::error('Error in Controller getAboutSCST: ' . $e->getMessage());
            return view('website.pages.home-sidebar.polytechnic-scst', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment', 'menuFacility' => $this->menuDepartment
            ]);
        }
    }
    
    public function getAcademicCalendar()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAcademicCalendar();
 
            // Check if $data_output is not empty
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.polytechnic-calendar', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.polytechnic-calendar', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }

    public function getEvent()
{
    try {
        $menu = $this->menu;
        $menuDepartment = $this->menuDepartment;
        $menuFacility = $this->menuFacility;
        $data_output = $this->service->getEvent();
   
        // dd($data_output); die;
        // Ensure $data_output is defined
        if ($data_output && $data_output->isNotEmpty()) {
            return view('website.pages.home-sidebar.events', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } else {
            return view('website.pages.home-sidebar.events', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available')->with('data_output', collect());
        }
    } catch (\Exception $e) {
        return back()->with('error', 'An error occurred while fetching the academic calendar.');
    }
}


    public function getStudentSectionDownload()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getStudentSectionDownload();
   
            // Check if $data_output is not empty
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.student-section-download', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.student-section-download', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }

    public function getStudentSectionScholarship()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getStudentSectionScholarship();
   
            // Check if $data_output is not empty
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.student-section-scholarship', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.student-section-scholarship', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }

    public function getExpertLecture()
{
    try {
        $menu = $this->menu;
        $menuDepartment = $this->menuDepartment;
        $menuFacility = $this->menuFacility;
        $data_output = $this->service->getExpertLecture();
   
        // Ensure $data_output is defined
        if ($data_output && $data_output->isNotEmpty()) {
            return view('website.pages.home-sidebar.expert-lecture', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } else {
            return view('website.pages.home-sidebar.expert-lecture', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available')->with('data_output', collect());
        }
    } catch (\Exception $e) {
        return back()->with('error', 'An error occurred while fetching the academic calendar.');
    }
}

public function getIndustrialVisitMentor()
{
    try {
        $menu = $this->menu;
        $menuDepartment = $this->menuDepartment;
        $menuFacility = $this->menuFacility;
        $data_output = $this->service->getIndustrialVisitMentor();
   
        // Ensure $data_output is defined
        if ($data_output && $data_output->isNotEmpty()) {
            return view('website.pages.home-sidebar.industrial-visit-mentor', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } else {
            return view('website.pages.home-sidebar.industrial-visit-mentor', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available')->with('data_output', collect());
        }
    } catch (\Exception $e) {
        return back()->with('error', 'An error occurred while fetching the academic calendar.');
    }
}    
    public function getFeesRegulatingAuthority()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getFeesRegulatingAuthority();
       
            // Ensure $data_output is defined
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.fees-regulating-authority', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.fees-regulating-authority', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available')->with('data_output', collect());
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }
    public function getTrainingPlacement()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getTrainingPlacement();
       
            // Ensure $data_output is defined
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.training-placement', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.training-placement', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'Data not available')->with('data_output', collect());
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }

    public function getNonTeachingFaculty()
    {
        try {

            
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getNonTeachingFaculty();
            // dd($data_output); die;
            
            if ($data_output instanceof \Exception) {
                return view('website.pages.home-sidebar.polytechnic-non-teachning-faculty', compact('menu', 'data_output', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.home-sidebar.polytechnic-non-teachning-faculty', compact('menu', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }

   
    
   
    
    

}