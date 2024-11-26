<?php

namespace App\Http\Controllers\Website\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Gallery\GalleryServices;
use Session;


// use App\Models\ {
//     Index
// };

class GalleryController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new GalleryServices();  
    }

   
    
    public function getGallery()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getGallery();
            return view('website.pages.gallery.polytechnic-gallery',compact('data_output','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}