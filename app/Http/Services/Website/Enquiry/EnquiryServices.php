<?php
namespace App\Http\Services\Website\Enquiry;

use App\Http\Repository\Website\Enquiry\EnquiryRepository;

// use App\Marquee;
use Carbon\Carbon;


class EnquiryServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new EnquiryRepository();
    }

    public function getEnquiry()
    {
        try {
            return $this->repo->getEnquiry();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addEnquiry($request)
    {
        
        try {
            $add_role = $this->repo->addEnquiry($request);          
            if ($add_role) {
                return ['status' => 'success', 'msg' => 'Enquiry Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Enquiry Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }

}