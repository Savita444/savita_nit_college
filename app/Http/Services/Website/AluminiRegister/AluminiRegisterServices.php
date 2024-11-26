<?php
namespace App\Http\Services\Website\AluminiRegister;

use App\Http\Repository\Website\AluminiRegister\AluminiRegisterRepository;

// use App\Marquee;
use Carbon\Carbon;


class AluminiRegisterServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AluminiRegisterRepository();
    }

    public function getContactUs()
    {
        try {
            return $this->repo->getContactUs();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addAluminiRegister($request)
    {
        
        try {
            $add_role = $this->repo->addAluminiRegister($request);
            // dd($add_role);
            // die();
            if ($add_role) {
                return ['status' => 'success', 'msg' => 'Alumini Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Alumini Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }

}