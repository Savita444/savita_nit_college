<?php

namespace App\Http\Controllers\Website\Activities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Activities\ActivitiesServices;
use Session;
class ActivitiesController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->service = new ActivitiesServices();  
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
    }
    public function getPolytechnicCoCurricular($id)
{
    try {
        $menu = $this->menu;
        $menuDepartment = $this->menuDepartment;
        $menuFacility = $this->menuFacility;
        $data_output = $this->service->getPolytechnicCoCurricular($id);
        $data_output_activity = $this->service->getActivityId($id);
        return view('website.pages.activities.polytechnic-co-curricular', compact('menu', 'data_output', 'menuDepartment', 'menuFacility', 'data_output_activity'));
    } catch (\Exception $e) {
        return $e;
    }
}
         
}