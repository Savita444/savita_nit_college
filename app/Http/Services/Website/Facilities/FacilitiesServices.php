<?php
namespace App\Http\Services\Website\Facilities;

use App\Http\Repository\Website\Facilities\FacilitiesRepository;

// use App\Marquee;
use Carbon\Carbon;


class FacilitiesServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new FacilitiesRepository();
    }

    // public function getPolytechniCampus()
    // {
    //     try {
    //         return $this->repo->getPolytechniCampus();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    // public function getPolytechniHostel()
    // {
    //     try {
    //         return $this->repo->getPolytechniHostel();
    //         dd($data_output);
    //         die();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 
    public function getPolytechnicFacilities($id)
    {
        try {
            $data_output = $this->repo->getPolytechnicFacilities($id);
            // dd($data_output); // This will output the data and stop execution for debugging
            // die();
            return $data_output; // Return the data after debugging
        } catch (\Exception $e) {
            return $e; // Return the exception if an error occurs
        }
    }
    
    // public function getPolytechniLibrary()
    // {
    //     try {
    //         return $this->repo->getPolytechniLibrary();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    // public function getPolytechnicTransportation()
    // {
    //     try {
    //         return $this->repo->getPolytechnicTransportation();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // } 

    // public function getPolytechnicOther()
    // {
    //     try {
    //         return $this->repo->getPolytechnicOther();
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

}