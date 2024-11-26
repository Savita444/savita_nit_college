<?php
namespace App\Http\Services\Website\Academics;

use App\Http\Repository\Website\Academics\AcademicsRepository;

// use App\Marquee;
use Carbon\Carbon;


class AcademicsServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AcademicsRepository();
    }

    public function getCoursesOffered()
    {
        try {
            return $this->repo->getCoursesOffered();
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getDocumentsRequired()
    {
        try {
            return $this->repo->getDocumentsRequired();
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getCAPAdmissionProcedureSteps()
    {
        try {
            return $this->repo->getCAPAdmissionProcedureSteps();
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getPolytechnicRules()
    {
        try {
            return $this->repo->getPolytechnicRules();
        } catch (\Exception $e) {
            return $e;
        }
    } 


}