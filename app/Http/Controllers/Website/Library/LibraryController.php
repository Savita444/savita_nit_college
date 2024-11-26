<?php

namespace App\Http\Controllers\Website\Library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Library\LibraryServices;
use Session;
class LibraryController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new LibraryServices();  
    }

    
    public function getLibraryStaff()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getLibraryStaff();
            return view('website.pages.library.library-staff', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getBooks()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getBooks();
            return view('website.pages.library.library-books', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getJournalsMagzines()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getJournalsMagzines();
            return view('website.pages.library.library-journals-magzines', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getRulesRequlations()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getRulesRequlations();
            return view('website.pages.library.rules-requlations', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
   
}