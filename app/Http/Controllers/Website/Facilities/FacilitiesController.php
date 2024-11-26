<?php

namespace App\Http\Controllers\Website\Facilities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Facilities\FacilitiesServices;
// use Session;


// use App\Models\ {
//     Index
// };

class FacilitiesController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new FacilitiesServices();  
    }

   
    
    // public function getPolytechnicCampus($id)
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $menuFacility = $this->menuFacility;
    //         $data_output = $this->service->getPolytechniCampus($id);
    //         return view('website.pages.facilities.polytechnic-campus',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    public function getPolytechnicFacilities($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getPolytechnicFacilities($id);
            return view('website.pages.facilities.polytechnic-facilities',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

    // public function getPolytechnicLibrary()
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $menuFacility = $this->menuFacility;
    //         $data_output = $this->service->getPolytechniLibrary();
    //         return view('website.pages.facilities.polytechnic-library',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    // public function getPolytechnicTransportation()
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $menuFacility = $this->menuFacility;
    //         $data_output = $this->service->getPolytechnicTransportation();
    //         return view('website.pages.facilities.polytechnic-transportation',compact('data_output', compact('menu', 'menuDepartment', 'menuFacility','menu', 'menuDepartment', 'menuFacility')));

    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    // public function getPolytechnicOther()
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $menuFacility = $this->menuFacility;
    //         $data_output = $this->service->getPolytechnicOther();
    //         return view('website.pages.facilities.polytechnic-other',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
         
}