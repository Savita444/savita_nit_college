<?php
namespace App\Http\Services\Website\Marquee;

use App\Http\Repository\Website\Marquee\MarqueeRepository;

// use App\Marquee;
use Carbon\Carbon;


class MarqueeServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new MarqueeRepository();
    }


    public function getMarquee()
    {
        try {
            $dataOutputCategory = $this->repo->getMarquee();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }

   

}