<?php

namespace App\Http\Controllers\Website\Enquiry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Enquiry\EnquiryServices;
// use Session;
use Validator;
use Config;
use Session;

// use App\Models\ {
//     Index
// };

class EnquiryController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new EnquiryServices();  
    }

   
    
    public function getEnquiry()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $contactusdata = $this->service->getEnquiry();
            return view('website.pages.enquiry.enquiry',compact('contactusdata','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addEnquiry(Request $request) {
        $rules = [
                        'name' => 'required|max:255',
                'mobile_number' =>  'required|regex:/^[0-9]{10}$/',
                'email' => 'required|email',
                'source' => 'required',
                'source_name' => 'required|max:255',
                'admission_level' => 'required',
                'g-recaptcha-response' => 'required|captcha',
        ];
        $messages = [   
                         'name.required' => 'Please enter full name.',
                'name.max' => 'Please enter text length up to 255 characters only.',
                'mobile_number.required' => 'Please enter a mobile number.',
                'mobile_number.regex' => 'Please enter a valid 10-digit mobile number.',
                'email.required' => 'Please enter an email address.',
                'email.email' => 'Please enter a valid email address.',
                'source.required' => 'Please select a source.',
                'source_name.required' => 'Please enter a source name.',
                'source_name.max' => 'Please enter text length up to 255 characters only.',
                'admission_level.required' => 'Please select an admission level.',
                'g-recaptcha-response.captcha' => 'Captcha error! try again later.',
                'g-recaptcha-response.required' =>'Please verify that you are not a robot.',
        ];
    
        try {
            $validation = Validator::make($request->all(), $rules, $messages);
            if($validation->fails()) {
                return redirect('enquiry')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_contact = $this->service->addEnquiry($request);
    
    
    
                if ($add_contact) {
                    $msg = 'Enquiry Information Submitted Successfully!!';
                    $status = 'success';
                } else {
                    $msg = 'Failed to Your Contact Us Information Submitted';
                    $status = 'error';
                }
                
                // Session::flash('success_message', 'Contact Us submitted successfully!');
                $request->session()->flash('success', 'Enquiry Information Submitted Successfully!!');
                return redirect('enquiry')
                ->with(compact('msg', 'status'));
              
            }
        } catch (Exception $e) {
            return redirect('enquiry')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    } 
}