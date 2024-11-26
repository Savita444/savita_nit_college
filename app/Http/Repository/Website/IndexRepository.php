<?php
namespace App\Http\Repository\Website;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    Slider
    
};

class IndexRepository  {

    public function index(){
        try {
            $data_output = Slider::select('id', 'fld_slider_image', 'fld_slider_title', 'fld_slider_subtitle', 'is_active')
                                  ->where('is_active', 1)
                                  ->where('is_deleted', 0)
                                  ->get()
                                  ->toArray();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}    