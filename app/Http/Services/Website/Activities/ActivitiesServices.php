<?php
namespace App\Http\Services\Website\Activities;

use App\Http\Repository\Website\Activities\ActivitiesRepository;

// use App\Marquee;
use Carbon\Carbon;


class ActivitiesServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new ActivitiesRepository();
    }
    public function getPolytechnicCoCurricular($id)
{
    try {
        $dataOutputCategory = $this->repo->getPolytechnicCoCurricular($id);
      
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}
public function getActivityId($id)
{
    try {
        $dataOutputCategory = $this->repo->getActivityId($id);
       
        return $dataOutputCategory; // This will never be executed due to dd()
    } catch (\Exception $e) {
        return $e;
    }
}

}