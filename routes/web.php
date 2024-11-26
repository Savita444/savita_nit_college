<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);

Route::get('/polytechnic-president', ['as' => 'polytechnic-president', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getPolytechnicPresident']);

Route::get('/polytechnic-facilities/{id}', ['as' => 'polytechnic-facilities', 'uses' => 'App\Http\Controllers\Website\Facilities\FacilitiesController@getPolytechnicFacilities']);
// Route::get('/polytechnic-hostel/{id}', ['as' => 'polytechnic-hostel', 'uses' => 'App\Http\Controllers\Website\Facilities\FacilitiesController@getPolytechnicHostel']);
// Route::get('/polytechnic-library/{id}', ['as' => 'polytechnic-library', 'uses' => 'App\Http\Controllers\Website\Facilities\FacilitiesController@getPolytechnicLibrary']);
// Route::get('/polytechnic-transportation/{id}', ['as' => 'polytechnic-transportation', 'uses' => 'App\Http\Controllers\Website\Facilities\FacilitiesController@getPolytechnicTransportation']);
// Route::get('/polytechnic-other/{id}', ['as' => 'polytechnic-other', 'uses' => 'App\Http\Controllers\Website\Facilities\FacilitiesController@getPolytechnicOther']);
Route::get('/courses-offered', ['as' => 'courses-offered', 'uses' => 'App\Http\Controllers\Website\Academics\AcademicsController@getCoursesOffered']);
Route::get('/documents-required', ['as' => 'documents-required', 'uses' => 'App\Http\Controllers\Website\Academics\AcademicsController@getDocumentsRequired']);
Route::get('/cap-admission-procedure-steps', ['as' => 'cap-admission-procedure-steps', 'uses' => 'App\Http\Controllers\Website\Academics\AcademicsController@getCAPAdmissionProcedureSteps']);
Route::get('/polytechnic-rules', ['as' => 'polytechnic-rules', 'uses' => 'App\Http\Controllers\Website\Academics\AcademicsController@getPolytechnicRules']);

Route::get('/contact-us', ['as' => 'contact-us', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@getContactUs']);
Route::post('/add-contact-us', ['as' => 'add-contact-us', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);

Route::get('/aluminiregister', ['as' => 'aluminiregister', 'uses' => 'App\Http\Controllers\Website\AluminiRegister\AluminiRegisterController@getAluminiRegister']);
Route::post('/add-aluminiregister', ['as' => 'add-aluminiregister', 'uses' => 'App\Http\Controllers\Website\AluminiRegister\AluminiRegisterController@addAluminiRegister']);

Route::get('/polytechnic-gallery', ['as' => 'polytechnic-gallery', 'uses' => 'App\Http\Controllers\Website\Gallery\GalleryController@getGallery']);

Route::get('/polytechnic-principals', ['as' => 'polytechnic-principals', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getPolytechnicPrincipals']);
Route::get('/mission-and-vision', ['as' => 'mission-and-vision', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getPolytechnicMissionVision']);
Route::get('/about-governingbody', ['as' => 'about-governingbody', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getPolytechnicAboutGoverningbody']);
Route::get('/about-futureplans', ['as' => 'about-futureplans', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getPolytechnicAboutFutureplans']);

Route::get('/polytechnic-co-curricular/{id}', ['as' => 'polytechnic-co-curricular', 'uses' => 'App\Http\Controllers\Website\Activities\ActivitiesController@getPolytechnicCoCurricular']);

// Route::get('/polytechnic-co-curricular', ['as' => 'polytechnic-co-curricular', 'uses' => 'App\Http\Controllers\Website\Activities\ActivitiesController@getPolytechnicCoCurricular']);
Route::get('/polytechnic-cultural-desk', ['as' => 'polytechnic-cultural-desk', 'uses' => 'App\Http\Controllers\Website\Activities\ActivitiesController@getPolytechnicCulturalDesk']);
// Route::get('/polytechnic-curricular', ['as' => 'polytechnic-curricular', 'uses' => 'App\Http\Controllers\Website\Activities\ActivitiesController@getPolytechnicCurricular']);
// Route::get('/polytechnic-extra-curricular', ['as' => 'polytechnic-extra-curricular', 'uses' => 'App\Http\Controllers\Website\Activities\ActivitiesController@getPolytechnicExtraCurricular']);


Route::get('/department-profile/{id}', ['as' => 'department-profile', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getProfile']);
Route::get('/department-vision-mission/{id}', ['as' => 'department-vision-mission', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getDepartVisionMission']);
Route::get('/department-curriculum/{id}', ['as' => 'department-curriculum', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getCurriculum']);
Route::get('/department-faculty/{id}', ['as' => 'department-faculty', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getFacultyDepartmentId']);
Route::get('/department-nonteaching-faculty/{id}', ['as' => 'department-nonteaching-faculty', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getNonTeachingFacultyDepartmentId']);

Route::get('/department-syllabus/{id}', ['as' => 'department-syllabus', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getSyllabus']);
Route::get('/department-time-table/{id}', ['as' => 'department-time-table', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getTimeTable']);
Route::get('/department-mentor/{id}', ['as' => 'department-mentor', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getMentor']);
Route::get('/department-achievements-awards/{id}', ['as' => 'department-achievements-awards', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getAchievementsAwards']);
Route::get('/department-activities-events/{id}', ['as' => 'department-activities-events', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getActivitiesEvents']);
Route::get('/department-students-association/{id}', ['as' => 'department-students-association', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getStudentsAssociation']);
Route::get('/department-plan/{id}', ['as' => 'department-plan', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getPlan']);
Route::get('/department-newsletter/{id}', ['as' => 'department-newsletter', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getNewsletter']);
Route::get('/department-laboratories-information/{id}', ['as' => 'department-laboratories-information', 'uses' => 'App\Http\Controllers\Website\Department\DepartmentController@getLaboratoriesInformation']);

Route::get('/polytechnic-mandatary', ['as' => 'polytechnic-mandatary', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getMandataryDisclosure']);
Route::get('/polytechnic-aicte-extension', ['as' => 'polytechnic-aicte-extension', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getAICTEExtension']);
Route::get('/polytechnic-affiliation', ['as' => 'polytechnic-affiliation', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getMSBTE']);
Route::get('/polytechnic-affiliation_certificates', ['as' => 'polytechnic-affiliation_certificates', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getPolytechnicAffiliationCertificates']);
Route::get('/polytechnic-servicerules', ['as' => 'polytechnic-servicerules', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getServiceRule']);


Route::get('/polytechnic-anti-ragging', ['as' => 'polytechnic-anti-ragging', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getAntiRagging']);
Route::get('/polytechnic-internal-complaint', ['as' => 'polytechnic-internal-complaint', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getInternalComplaint']);
Route::get('/polytechnic-about-scst', ['as' => 'polytechnic-about-scst', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getAboutSCST']);
Route::get('/polytechnic-academic-calendar', ['as' => 'polytechnic-academic-calendar', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getAcademicCalendar']);
Route::get('/list-events', ['as' => 'list-events', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getEvent']);
Route::get('/list-student-section-download', ['as' => 'list-student-section-download', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getStudentSectionDownload']);
Route::get('/list-student-section-scholarship', ['as' => 'list-student-section-scholarship', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getStudentSectionScholarship']);
Route::get('/list-expert-lecture', ['as' => 'list-expert-lecture', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getExpertLecture']);
Route::get('/list-industrial-visit-mentor', ['as' => 'list-industrial-visit-mentor', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getIndustrialVisitMentor']);
Route::get('/list-fees-regulating-authority', ['as' => 'list-fees-regulating-authority', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getFeesRegulatingAuthority']);
Route::get('/training-placement', ['as' => 'training-placement', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getTrainingPlacement']);
Route::get('/non-teaching-faculty', ['as' => 'non-teaching-faculty', 'uses' => 'App\Http\Controllers\Website\HomeSidebar\HomeSidebarController@getNonTeachingFaculty']);



Route::get('/marquee', ['as' => 'marquee', 'uses' => 'App\Http\Controllers\Website\Marquee\MarqueeController@getMarquee']);

Route::get('/achievement', ['as' => 'achievement', 'uses' => 'App\Http\Controllers\Website\Achievement\AchievementController@getAchievement']);

Route::get('/library-staff', ['as' => 'library-staff', 'uses' => 'App\Http\Controllers\Website\Library\LibraryController@getLibraryStaff']);
Route::get('/library-books', ['as' => 'library-books', 'uses' => 'App\Http\Controllers\Website\Library\LibraryController@getBooks']);
Route::get('/library-journals-magzines', ['as' => 'library-journals-magzines', 'uses' => 'App\Http\Controllers\Website\Library\LibraryController@getJournalsMagzines']);
Route::get('/library-rules-requlations', ['as' => 'library-rules-requlations', 'uses' => 'App\Http\Controllers\Website\Library\LibraryController@getRulesRequlations']);


Route::get('/enquiry', ['as' => 'enquiry', 'uses' => 'App\Http\Controllers\Website\Enquiry\EnquiryController@getEnquiry']);
Route::post('/add-enquiry', ['as' => 'add-enquiry', 'uses' => 'App\Http\Controllers\Website\Enquiry\EnquiryController@addEnquiry']);
