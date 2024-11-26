<?php

namespace App\Http\Controllers\Website\AluminiRegister;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\AluminiRegister\AluminiRegisterServices;
use Session;
use Validator;
use Config;

// use App\Models\ {
//     Index
// }
;

class AluminiRegisterController extends Controller {
    // public static $event_repository;

    public function __construct() {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new AluminiRegisterServices();

    }

    public function getAluminiRegister() {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            // $contactusdata = $this->service->getContactUs();
            return view( 'website.pages.aluminiregister.alumini-register', compact( 'menu', 'menuDepartment', 'menuFacility' ) );

        } catch ( \Exception $e ) {
            return $e;
        }
    }

    public function addAluminiRegister( Request $request ) {
        try {

            $rules = [
                'name' => 'required|max:255',
                'email' => 'required|regex:/^([a-zA-Z0-9_.+-])+@(([a-zA-Z])+.)+([a-zA-Z0-9]{2,4})+$/',
                'enroll' => 'required|max:255',

                'firstsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',
                'secondsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',
                'thirdsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',
                'fourthsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',
                'fifthsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',
                'sixthsem' => 'required|numeric|regex:/^\d{1,3}(\.\d{1,2})?$/|between:0,100',

                'company' => 'required|max:255',
                'location' => 'required|max:255',
                'mobile' =>  'required|regex:/^[0-9]{10}$/',
                'passout_year' => 'required|integer|digits:4',

                'department' => 'required|max:255',
                'message' => 'required|max:500',
                'g-recaptcha-response' => 'required|captcha',
            ];
            $messages = [
                'name.required' => 'Please enter the student name.',
                'name.max' => 'The name may not be greater than 255 characters.',

                'email.required' => 'Please enter an email address.',
                'email.regex' => 'Please enter a valid email address.',

                'enroll.required' => 'Please enter the enrollment number.',
                'enroll.max' => 'The enrollment number may not be greater than 255 characters.',

                'firstsem.required' => 'The first semester result is required.',
                'firstsem.numeric' => 'The first semester result must be a number.',
                'firstsem.regex' => 'The first semester result must be a valid number with up to two decimal places.',
                'firstsem.between' => 'The first semester result must be between 0 and 100.',

                'secondsem.required' => 'The second semester result is required.',
                'secondsem.numeric' => 'The second semester result must be a number.',
                'secondsem.regex' => 'The second semester result must be a valid number with up to two decimal places.',
                'secondsem.between' => 'The second semester result must be between 0 and 100.',

                'thirdsem.required' => 'The third semester result is required.',
                'thirdsem.numeric' => 'The third semester result must be a number.',
                'thirdsem.regex' => 'The third semester result must be a valid number with up to two decimal places.',
                'thirdsem.between' => 'The third semester result must be between 0 and 100.',

                'fourthsem.required' => 'The fourth semester result is required.',
                'fourthsem.numeric' => 'The fourth semester result must be a number.',
                'fourthsem.regex' => 'The fourth semester result must be a valid number with up to two decimal places.',
                'fourthsem.between' => 'The fourth semester result must be between 0 and 100.',

                'fifthsem.required' => 'The fifth semester result is required.',
                'fifthsem.numeric' => 'The fifth semester result must be a number.',
                'fifthsem.regex' => 'The fifth semester result must be a valid number with up to two decimal places.',
                'fifthsem.between' => 'The fifth semester result must be between 0 and 100.',

                'sixthsem.required' => 'The sixth semester result is required.',
                'sixthsem.numeric' => 'The sixth semester result must be a number.',
                'sixthsem.regex' => 'The sixth semester result must be a valid number with up to two decimal places.',
                'sixthsem.between' => 'The sixth semester result must be between 0 and 100.',

                'company.required' => 'Please enter the current working company name.',
                'company.max' => 'The company name may not be greater than 255 characters.',

                'location.required' => 'Please enter the current location.',
                'location.max' => 'The location may not be greater than 255 characters.',

                'mobile.required' => 'Please enter a contact number.',
                'mobile.regex' => 'The contact number must be exactly 10 digits.',

                'passout_year.required' => 'Please enter the passout year.',
                'passout_year.integer' => 'The passout year must be a valid year.',
                'passout_year.digits' => 'The passout year must be a 4-digit year.',

                'department.required' => 'Please enter the department name.',
                'department.max' => 'The department name may not be greater than 255 characters.',

                'message.required' => 'Please enter a message.',
                'message.max' => 'The message may not be greater than 500 characters.',
                'g-recaptcha-response.captcha' => 'Captcha error! try again later.',
                'g-recaptcha-response.required' =>'Please verify that you are not a robot.',
            ];

            $validation = Validator::make( $request->all(), $rules, $messages );
            if ( $validation->fails() ) {
                return redirect( 'aluminiregister' )
                ->withInput()
                ->withErrors( $validation );
            } else {
                $add_role = $this->service->addAluminiRegister( $request );
                if ( $add_role ) {
                    $msg = $add_role[ 'msg' ];
                    $status = $add_role[ 'status' ];
                    if ( $status == 'success' ) {
                        return redirect( 'aluminiregister' )->with( compact( 'msg', 'status' ) );
                    } else {
                        return redirect( 'aluminiregister' )->withInput()->with( compact( 'msg', 'status' ) );
                    }
                }

            }
        } catch ( Exception $e ) {
            return redirect( 'add-projects' )->withInput()->with( [ 'msg' => $e->getMessage(), 'status' => 'error' ] );
        }
    }

}