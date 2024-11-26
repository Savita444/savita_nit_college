<?php
namespace App\Http\Services\Website\HomeSidebar;

use App\Http\Repository\Website\HomeSidebar\HomeSidebarRepository;

// use App\Marquee;
use Carbon\Carbon;


class HomeSidebarServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new HomeSidebarRepository();
    }


    public function getMandataryDisclosure()
    {
        try {
            $dataOutputCategory = $this->repo->getMandataryDisclosure();
            // dd($dataOutputCategory);
            // die();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAICTEExtension()
    {
        try {
            $dataOutputCategory = $this->repo->getAICTEExtension();
            // dd($dataOutputCategory);
            // die();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getMSBTE()
    {
        try {
            $dataOutputCategory = $this->repo->getMSBTE();
            // dd($dataOutputCategory);
            // die();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getPolytechnicAffiliationCertificates()
    {
        try {
            $dataOutputCategory = $this->repo->getPolytechnicAffiliationCertificates();

            // dd($dataOutputCategory);
        // die();
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}

    public function getServiceRule()
    {
        try {
            $dataOutputCategory = $this->repo->getServiceRule();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }


    // public function getAntiRagging()
    // {
    //     try {
    //         $dataOutputCategory = $this->repo->getAntiRagging();
      
    //         return $dataOutputCategory; // This will never be executed due to dd()
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    public function getAntiRagging()
{
    try {
        $dataOutputCategory = $this->repo->getAntiRagging();
    
        return $dataOutputCategory;
    } catch (\Exception $e) {
        throw $e;
    }
}

public function getInternalComplaint()
{
    try {
        return $this->repo->getInternalComplaint();
    } catch (\Exception $e) {
        // Log the exception
        \Log::error('Error in Service getInternalComplaint: ' . $e->getMessage());
        return collect(); // Return an empty collection in case of error
    }
}


public function getAboutSCST()
{
    try {
        $dataOutputCategory = $this->repo->getAboutSCST();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        \Log::error('Error in Service getAboutSCST: ' . $e->getMessage());
        return null;
    }
}

   
public function getAcademicCalendar()
{
    try {
        $dataOutputCategory = $this->repo->getAcademicCalendar();
       
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}

public function getEvent()
{
    try {
        $dataOutputCategory = $this->repo->getEvent();
        // dd($dataOutputCategory);
        // die();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getStudentSectionDownload()
{
    try {
        $dataOutputCategory = $this->repo->getStudentSectionDownload();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getStudentSectionScholarship()
{
    try {
        $dataOutputCategory = $this->repo->getStudentSectionScholarship();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getExpertLecture()
{
    try {
        $dataOutputCategory = $this->repo->getExpertLecture();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getIndustrialVisitMentor()
{
    try {
        $dataOutputCategory = $this->repo->getIndustrialVisitMentor();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}

public function getFeesRegulatingAuthority()
{
    try {
        $dataOutputCategory = $this->repo->getFeesRegulatingAuthority();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getTrainingPlacement()
{
    try {
        $dataOutputCategory = $this->repo->getTrainingPlacement();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}
public function getNonTeachingFaculty()
{
    try {
        $dataOutputCategory = $this->repo->getNonTeachingFaculty();
        return $dataOutputCategory;
    } catch (\Exception $e) {
        return collect(); // return an empty collection in case of error
    }
}


}