<?php
namespace App\Http\Repository\Website\Achievement;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Achievement
    
};

class AchievementRepository  {


public function getAchievement()
{
    try {
        $data_output = Achievement::where('fld_delete', '0')
        ->where('is_active', '1')
        ->orderBy('fld_achievement_id', 'desc')
        ->get();
       return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
}

}    