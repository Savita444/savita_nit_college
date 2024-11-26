<?php
namespace App\Http\Services\Website\Department;

use App\Http\Repository\Website\Department\DepartmentRepository;

// use App\Marquee;
use Carbon\Carbon;


class DepartmentServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new DepartmentRepository();
    }
    public function getProfile($id)
{
    try {
        $dataOutputCategory = $this->repo->getProfile($id);
   
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getDepartVisionMission($id){
    try {
        $dataOutputCategory = $this->repo->getDepartVisionMission($id);
   
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
   }

   public function getCurriculum($id)
{
    try {
        $dataOutputCategory = $this->repo->getCurriculum($id);
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}

public function getFaculty()
{
    try {
        $dataOutputCategory = $this->repo->getFaculty();
        dd($dataOutputCategory);
        die();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}
public function getFacultyDepartmentId($id)
{
    try {
        $dataOutputCategory = $this->repo->getFacultyDepartmentId($id);
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}
public function getNonTeachingFacultyDepartmentId($id)
{
    try {
        $dataOutputCategory = $this->repo->getNonTeachingFacultyDepartmentId($id);
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}


public function getSyllabus($id)
{
    try {
        $dataOutputCategory = $this->repo->getSyllabus($id);
        
        return $dataOutputCategory; 
      
    } catch (\Exception $e) {
        return $e;
    }
}
public function getTimeTable($id)
{
    try {
        $dataOutputCategory = $this->repo->getTimeTable($id);
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}

public function getMentor($id)
{
    try {
        $dataOutputCategory = $this->repo->getMentor($id);
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getAchievementsAwards($id)
{
    try {
        $dataOutputCategory = $this->repo->getAchievementsAwards($id);
 
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getActivitiesEvents($id)
{
    try {
        $dataOutputCategory = $this->repo->getActivitiesEvents($id);
        
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getStudentsAssociation($id)
{
    try {
        $dataOutputCategory = $this->repo->getStudentsAssociation($id);
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
// public function getPlan($id)
// {
//     try {
//         $dataOutputCategory = $this->repo->getPlan($id);
//         return $dataOutputCategory; // This will never be executed due to dd()
//     } catch (\Exception $e) {
//         return $e;
//     }
// }

public function getPlan($id)
{
    try {
        $dataOutputCategory = $this->repo->getPlan($id);
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return $e;
    }
}
public function getDepartmentId($id)
{
    try {
        $dataOutputCategory = $this->repo->getDepartmentId($id);
       
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getNewsletter($id)
{
    try {
        $dataOutputCategory = $this->repo->getNewsletter($id);
        // dd($dataOutputCategory);
        // die();
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getLaboratoriesInformation($id)
{
    try {
        $dataOutputCategory = $this->repo->getLaboratoriesInformation($id);
        // dd($dataOutputCategory);
        // die();
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}

}