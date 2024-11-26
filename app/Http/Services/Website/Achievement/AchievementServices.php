<?php
namespace App\Http\Services\Website\Achievement;

use App\Http\Repository\Website\Achievement\AchievementRepository;

// use App\Marquee;
use Carbon\Carbon;


class AchievementServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AchievementRepository();
    }


    public function getAchievement()
    {
        try {
            $dataOutputCategory = $this->repo->getAchievement();
            return $dataOutputCategory; // This will never be executed due to dd()
        } catch (\Exception $e) {
            return $e;
        }
    }

   

}