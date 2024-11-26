<?php
namespace App\Http\Services\Website\AboutUs;

use App\Http\Repository\Website\AboutUs\AboutUsRepository;

// use App\Marquee;
use Carbon\Carbon;


class AboutUsServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AboutUsRepository();
    }


    public function getPolytechnicAboutGoverningbody()
    {
        try {
            $dataOutputCategory = $this->repo->getPolytechnicAboutGoverningbody();
            // dd($dataOutputCategory);
            // die();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }

   

}