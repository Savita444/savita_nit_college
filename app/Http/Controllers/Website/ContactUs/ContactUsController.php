<?php

namespace App\Http\Controllers\Website\ContactUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\ContactUs\ContactUsServices;
// use Session;
use Validator;
use Config;


// use App\Models\ {
//     Index
// };

class ContactUsController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new ContactUsServices();  
    }

   
    
    public function getContactUs()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $contactusdata = $this->service->getContactUs();
            return view('website.pages.contactus.contact-us',compact('contactusdata','menu', 'menuDepartment', 'menuFacility'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addContactUs(Request $request)
    {

        try {

            $rules = [
                'fld_contact_name' => 'required|max:255',
                'fld_contact_subject' => 'required',
                'fld_contact_email' => 'required|regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z])+\.)+([a-zA-Z0-9]{2,4})+$/',
                'fld_contact_number' =>  'required|regex:/^[0-9]{10}$/',
                'fld_contact_message' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ];
            $messages = [
                'fld_contact_name.required' => 'Please  enter name.',
                'fld_contact_name.max' => 'Please  enter text length upto 255 character only.',

                'fld_contact_subject.required' => 'Please  enter Subject.',

                'fld_contact_email.required' => 'Please enter email.',
                'fld_contact_email.regex' => 'Enter valid email.',

                'fld_contact_number.required' => 'Please enter number.',
                'fld_contact_number.regex' => 'Please enter only numbers with 10-digit.',

                'fld_contact_message.required' => 'Please  enter Subject.',
                'g-recaptcha-response.captcha' => 'Captcha error! try again later.',
                'g-recaptcha-response.required' =>'Please verify that you are not a robot.',

            ];

            $validation = Validator::make($request->all(), $rules, $messages);
            if ($validation->fails()) {
                return redirect('contact-us')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_role = $this->service->addContactUs($request);
                if ($add_role) {
                    $msg = $add_role['msg'];
                    $status = $add_role['status'];
                    if ($status == 'success') {
                        return redirect('contact-us')->with(compact('msg', 'status'));
                    } else {
                        return redirect('contact-us')->withInput()->with(compact('msg', 'status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-projects')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

         
}