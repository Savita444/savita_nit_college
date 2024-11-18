<?php

namespace App\Http\Controllers\Website\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Department\DepartmentServices;
// use Session;
class DepartmentController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->service = new DepartmentServices();  
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
    }
    public function getProfile($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getProfile($id);
            $data_output_category = $this->service->getDepartmentId($id);
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-profile', compact('menu', 'data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-profile', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getDepartVisionMission($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getDepartVisionMission($id);
            $data_output_category = $this->service->getDepartmentId($id);
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-vision-mission', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-vision-mission', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getCurriculum($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getCurriculum($id);
            $data_output_category = $this->service->getDepartmentId($id);
        //   dd($data_output); die;
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-curriculum', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-curriculum', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getFacultyDepartmentId($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getFacultyDepartmentId($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-faculty', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-faculty', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getNonTeachingFacultyDepartmentId($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getNonTeachingFacultyDepartmentId($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-non-teachning-faculty', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-non-teachning-faculty', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getSyllabus($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getSyllabus($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-syllabus', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-syllabus', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    // ============
    public function getTimeTable($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getTimeTable($id);
            $data_output_category = $this->service->getDepartmentId($id);
    
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-time-table', compact('menu', 'data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-time-table', compact('menu', 'data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getMentor($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getMentor($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-mentor', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-mentor', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAchievementsAwards($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAchievementsAwards($id);
            $data_output_category = $this->service->getDepartmentId($id);
        //   dd($data_output );
        //   die();
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-achievements-awards', compact('menu','data_output_category','data_output', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-achievements-awards', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getActivitiesEvents($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getActivitiesEvents($id);
            $data_output_category = $this->service->getDepartmentId($id);
        //   dd($data_output);
        //   die();
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-activities-events', compact('menu', 'data_output', 'data_output_category','menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-activities-events', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getStudentsAssociation($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getStudentsAssociation($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-students-association', compact('menu', 'data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-students-association', compact('menu', 'data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getPlan($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getPlan($id);
            $data_output_category = $this->service->getDepartmentId($id);
    
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-plan', compact('menu', 'data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-plan', compact('menu', 'data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getNewsletter($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getNewsletter($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-newletter', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-newletter', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getLaboratoriesInformation($id)
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getLaboratoriesInformation($id);
            $data_output_category = $this->service->getDepartmentId($id);
          
            if ($data_output instanceof \Exception) {
                return view('website.pages.department.polytechnic-laboratories-information', compact('menu','data_output_category', 'menuDepartment', 'menuFacility'))->withErrors(['msg' => $data_output->getMessage()]);
            }
    
            return view('website.pages.department.polytechnic-laboratories-information', compact('menu','data_output_category', 'data_output', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}