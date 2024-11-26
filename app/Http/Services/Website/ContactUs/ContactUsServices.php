<?php
namespace App\Http\Services\Website\ContactUs;

use App\Http\Repository\Website\ContactUs\ContactUsRepository;

// use App\Marquee;
use Carbon\Carbon;


class ContactUsServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new ContactUsRepository();
    }

    public function getContactUs()
    {
        try {
            return $this->repo->getContactUs();
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addContactUs($request)
    {
        
        try {
            $add_role = $this->repo->addContactUs($request);
            if ($add_role) {
                return ['status' => 'success', 'msg' => 'Contact Us Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Contact Us Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }

}