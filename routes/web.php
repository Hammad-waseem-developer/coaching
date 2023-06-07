<?php

use App\Http\Controllers\CoachingController;
use App\Http\Controllers\FaculityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\classController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AlumnaiController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\TDetailsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Frontend\UserLoginController;
use App\Http\Controllers\Frontend\ULoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\UserMsgController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('adminguard');


//Coaching Routes

    Route::get('/dashboard/coaching',[CoachingController::class ,'Coaching'])->middleware('adminguard');
    Route::get('/dashboard/coaching-add-coaching',[CoachingController::class ,'CoachingAddCoaching'])->middleware('adminguard');
    Route::post('/dashboard/coaching-add-coaching/store',[CoachingController::class ,'CoachingAddCoachingStore'])->middleware('adminguard');
    Route::get('/dashboard/coaching-edit-coaching/{id}',[CoachingController::class ,'CoachingEditCoaching'])->middleware('adminguard');
    Route::post('/dashboard/coaching-update-coaching/{id}',[CoachingController::class ,'CoachingUpdateCoaching'])->middleware('adminguard');
    Route::get('/dashboard/coaching-delete-coaching/{id}',[CoachingController::class ,'CoachingDeleteCoaching'])->middleware('adminguard');

//Faculity Routes
Route::get('/dashboard/faculty',[FaculityController::class ,'Faculty'])->middleware('TeacherGuard');
Route::get('/dashboard/faculty-add-faculty',[FaculityController::class ,'FacultyAddFaculty'])->middleware('adminguard');
Route::post('/dashboard/faculty-add-faculty/store',[FaculityController::class ,'FacultyStoreFaculty'])->middleware('adminguard');
Route::get('/dashboard/faculty-edit-faculty/{id}',[FaculityController::class ,'FacultyEditFaculty'])->middleware('adminguard');
Route::get('/dashboard/faculty-detail-faculty/{id}',[FaculityController::class ,'FacultyDetailFaculty'])->middleware('TeacherGuard');
Route::post('dashboard/faculty-update-faculty/{id}',[FaculityController::class ,'FacultyUpdateFaculty'])->middleware('adminguard');
Route::get('/dashboard/faculty-delete-faculty/{id}',[FaculityController::class ,'FacultyDeleteFaculty'])->middleware('adminguard');

//Student Routes
Route::get('/dashboard/student',[StudentController::class ,'Student'])->middleware('adminguard');
Route::get('/dashboard/student-add-student',[StudentController::class ,'StudentAddStudent'])->middleware('adminguard');
Route::post('/dashboard/student-add-student/store',[StudentController::class ,'StudentStoreStudent'])->middleware('adminguard');
Route::get('/dashboard/student-edit-student/{id}',[StudentController::class ,'StudentEditStudent'])->middleware('adminguard');
Route::post('/dashboard/student-update-student/{id}',[StudentController::class ,'StudentUpdateStudent'])->middleware('adminguard');
Route::get('/dashboard/student-delete-student/{id}',[StudentController::class ,'StudentDeleteStudent'])->middleware('adminguard');
Route::get('/dashboard/student-detail-student/{id}',[StudentController::class ,'StudentDetailStudent'])->middleware('adminguard');


//class Routes
Route::get('/dashboard/class',[classController::class ,'class'])->middleware('adminguard');
Route::get('/dashboard/class-add-class',[classController::class ,'classAddclass'])->middleware('adminguard');
Route::post('/dashboard/class-add-class/store',[classController::class ,'classStoreclass'])->middleware('adminguard');
Route::get('/dashboard/class-edit-class/{id}',[classController::class ,'classEditclass'])->middleware('adminguard');
Route::post('/dashboard/class-update-class/{id}',[classController::class ,'classUpdateclass'])->middleware('adminguard');
Route::get('/dashboard/class-delete-class/{id}',[classController::class ,'classDeleteclass'])->middleware('adminguard');

//Subject Routes
Route::get('/dashboard/subject',[SubjectController::class ,'Subject'])->middleware('adminguard');
Route::get('/dashboard/subject-add-subject',[SubjectController::class ,'SubjectAddSubject'])->middleware('adminguard');
Route::post('/dashboard/subject-add-subject/store',[SubjectController::class ,'SubjectStoreSubject'])->middleware('adminguard');
Route::get('/dashboard/subject-edit-subject/{id}',[SubjectController::class ,'SubjectEditSubject'])->middleware('adminguard');
Route::post('/dashboard/subject-update-subject/{id}',[SubjectController::class ,'SubjectUpdateSubject'])->middleware('adminguard');
Route::get('/dashboard/subject-delete-subject/{id}',[SubjectController::class ,'SubjectDeleteSubject'])->middleware('adminguard');

//Session Routes
Route::get('/dashboard/session',[SessionController::class ,'Session'])->middleware('adminguard');
Route::get('/dashboard/session-add-session',[SessionController::class ,'SessionAddSession'])->middleware('adminguard');
Route::post('/dashboard/session-add-session/store',[SessionController::class ,'SessionStoreSession'])->middleware('adminguard');
Route::get('/dashboard/session-edit-session/{id}',[SessionController::class ,'SessionEditSession'])->middleware('adminguard');
Route::post('/dashboard/session-update-session/{id}',[SessionController::class ,'SessionUpdateSession'])->middleware('adminguard');
Route::get('/dashboard/session-delete-session/{id}',[SessionController::class ,'SessionDeleteSession'])->middleware('adminguard');

//Field Routes
Route::get('/dashboard/field',[FieldController::class ,'Field'])->middleware('adminguard');
Route::get('/dashboard/field-add-field',[FieldController::class ,'FieldAddField'])->middleware('adminguard');
Route::post('/dashboard/field-add-field/store',[FieldController::class ,'FieldStoreField'])->middleware('adminguard');
Route::get('/dashboard/field-edit-field/{id}',[FieldController::class ,'FieldEditField'])->middleware('adminguard');
Route::post('/dashboard/field-update-field/{id}',[FieldController::class ,'FieldUpdateField'])->middleware('adminguard');
Route::get('/dashboard/field-delete-field/{id}',[FieldController::class ,'FieldDeleteField'])->middleware('adminguard');

//Test Routes
Route::get('/dashboard/test',[TestController::class ,'Test'])->middleware('adminguard');
Route::get('/dashboard/test-add-test',[TestController::class ,'TestAddTest'])->middleware('adminguard');
Route::post('/dashboard/test-add-test/store',[TestController::class ,'TestStoreTest'])->middleware('adminguard');
Route::get('/dashboard/test-edit-test/{id}',[TestController::class ,'TestEditTest'])->middleware('adminguard');
Route::post('/dashboard/test-update-test/{id}',[TestController::class ,'TestUpdateTest'])->middleware('adminguard');
Route::get('/dashboard/test-delete-test/{id}',[TestController::class ,'TestDeleteTest'])->middleware('adminguard');

//Alumnai Routes
Route::get('/dashboard/alumni',[AlumnaiController::class ,'Alumni'])->middleware('adminguard');
Route::get('/dashboard/alumni-add-alumni',[AlumnaiController::class ,'AlumniAddAlumni'])->middleware('adminguard');
Route::post('/dashboard/alumni-add-alumni/store',[AlumnaiController::class ,'AlumniStoreAlumni'])->middleware('adminguard');
Route::get('/dashboard/alumni-edit-alumni/{id}',[AlumnaiController::class ,'AlumniEditAlumni'])->middleware('adminguard');
Route::post('/dashboard/alumni-update-alumni/{id}',[AlumnaiController::class ,'AlumniUpdateAlumni'])->middleware('adminguard');
Route::get('/dashboard/alumni-delete-alumni/{id}',[AlumnaiController::class ,'AlumniDeleteAlumni'])->middleware('adminguard');

//Announcement Routes
Route::get('/dashboard/announcement',[AnnouncementController::class ,'Announcement'])->middleware('adminguard');
Route::get('/dashboard/announcement-add-announcement',[AnnouncementController::class ,'AnnouncementAddAnnouncement'])->middleware('adminguard');
Route::post('/dashboard/announcement-add-announcement/store',[AnnouncementController::class ,'AnnouncementStoreAnnouncement'])->middleware('adminguard');
Route::get('/dashboard/announcement-edit-announcement/{id}',[AnnouncementController::class ,'AnnouncementEditAnnouncement'])->middleware('adminguard');
Route::post('/dashboard/announcement-update-announcement/{id}',[AnnouncementController::class ,'AnnouncementUpdateAnnouncement'])->middleware('adminguard');
Route::get('/dashboard/announcement-delete-announcement/{id}',[AnnouncementController::class ,'AnnouncementDeleteAnnouncement'])->middleware('adminguard');

//Student Test Routes
Route::get('/dashboard/student_marks_add/{id}',[TDetailsController::class ,'student_marks_add'])->middleware('adminguard');
Route::get('/dashboard/test-detail',[TDetailsController::class ,'testdetail'])->middleware('adminguard');
Route::get('/dashboard/test-detail-add',[TDetailsController::class ,'testdetailAdd'])->middleware('adminguard');
Route::post('/dashboard/test-detail-store',[TDetailsController::class ,'testdetailStore'])->middleware('adminguard');
Route::get('/dashboard/test-detail-edit/{id}',[TDetailsController::class ,'testdetailEdit'])->middleware('adminguard');
Route::post('/dashboard/test-detail-update/{id}',[TDetailsController::class ,'testdetailUpdate'])->middleware('adminguard');
Route::get('/dashboard/test-detail-delete/{id}',[TDetailsController::class ,'testdetailDelete'])->middleware('adminguard');


Route::post('/dashboard/search',[TDetailsController::class ,'testsearching'])->middleware('adminguard');

//Messages
Route::get('/dashboard/messages',[MessagesController::class, 'messages'])->middleware('adminguard');
Route::get('/dashboard/messages-delete/{id}',[MessagesController::class, 'messagesdelete'])->middleware('adminguard');




// Dashboard Login
Route::get('/login',[MainController::class ,'login']);
Route::post('/login-store',[MainController::class ,'loginstore']);
Route::get('/logout',[MainController::class ,'logout']);

Route::get('/session',function(){

    session()->flush();

    echo "<pre>";
    print_r(session()->all());

});


Route::get('/checking',function(){

    $en  = Crypt::encryptString('farhan');

    echo $en;

    echo "<br>";
    echo Str::length($en);
    echo "<br>";

    echo Crypt::decryptString($en);


});









//Frontend Routes



Route::get('/',[WebController::class, 'home']);
Route::get('/aboutus',[WebController::class, 'aboutus']);
Route::get('/contact',[WebController::class, 'contact']);
Route::get('/announce',[WebController::class, 'announce']);
Route::get('/announcedetails/{id}',[WebController::class, 'announcedetails']);
Route::get('/faculty',[WebController::class, 'teacher']);
Route::get('/faculty-info/{id}',[WebController::class, 'faculityinfo']);
Route::get('/web-student',[WebController::class, 'std']);
Route::get('/student-login',[WebController::class, 'studentlogin']);
Route::get('/teacher-login',[WebController::class, 'teacherlogin']);
Route::post('/teacher-login-store',[WebController::class, 'teacherloginstore']);
Route::get('/teacher-logout',[WebController::class, 'teacherlogout']);
Route::post('/studentloginstore',[WebController::class, 'studentloginstore']);
Route::get('/student-logout',[WebController::class, 'studentlogout']);
Route::get('/my-profile',[WebController::class, 'myprofile']);
Route::post('/user-message',[WebController::class, 'usermessage']);

//UserMsg Route
Route::post('/datainsert', [UserMsgController::class,'DataInsert']);
//User
Route::get('/userloginregis',[ULoginController::class,'userloginregis']);
Route::get('/admin/user/view',[ULoginController::class,'userindex']);
Route::get('/admin/user/delete/{id}',[ULoginController::class,'userdelete']);



Route::get('/userlogin',[ULoginController::class, 'userlogin']);
Route::get('/userloginstore',[ULoginController::class,'userloginstore']);
Route::get('/userregister',[ULoginController::class, 'userregister']);
Route::post('/userinsertstore',[ULoginController::class,'userregisterstore']);
Route::get('/user/logout',[ULoginController::class,'userlogout'])->middleware('Guard');
