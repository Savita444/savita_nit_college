<?php

namespace App\Http\Controllers\Website\Academics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Academics\AcademicsServices;
// use Session;


// use App\Models\ {
//     Index
// };

class AcademicsController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->service = new AcademicsServices();  
    }

   
    
    public function getPolytechnicRules()
    {
        try {
            $data_output = $this->service->getPolytechnicRules();
            return view('website.pages.academics.polytechnic-rules',compact('data_output'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}