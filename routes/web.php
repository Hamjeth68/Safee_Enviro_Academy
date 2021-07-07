<?php

use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/', 'PageController@index')->name('root-page');
//Route::get('/page/{slug}', 'PageController@index')->name('page');

Route::get('/home-two', function () {
    return view('home2');
});

Route::get('/why1', function () {
    return view('why');
});

Route::get('/web', function () {
    return view('webinars');
});

Route::get('/contact1', function () {
    return view('contact');
});

Route::get('/lawma1', function () {
    return view('lawma');
});


Route::get('/news1', function () {
    return view('news');
});

Route::get('/commitment1', function () {
    return view('commitment');
});

Route::get('/support1', function () {
    return view('support');
});

Route::get('/business1', function () {
    return view('business');
});

Route::get('/partnership1', function () {
    return view('partnership');
});

Route::get('/Research1', function () {
    return view('Research');
});

Route::get('/donate1', function () {
    return view('donate');
});

Route::get('/Volunteer1', function () {
    return view('Volunteer');
});

Route::get('/payhere1', function () {
    return view('payhere');
});

Route::get('/book-now', function () {
    return view('booknow');
});

//user
Route::get('/new-user', function () {
    return view('newuser');
});

Route::get('/guest-login', function () {
    return view('guestlogin');
});

// Route::get('/contact-us', function () {
//     return view('enquiryForm');
// });



// //view page 
// Route::get('/contact-us',  [App\Http\Controllers\EnquiryController::class, 'index'])->name('contact-us.index');
// //save data 
// Route::post('/contact-us/save', [App\Http\Controllers\EnquiryController::class, 'store'])->name('contact-us.store');
// //success page 
// Route::get('/contact-us/success', [App\Http\Controllers\EnquiryController::class, 'success'])->name('contact-us.success');


// Route::get('/emailForm', [App\Http\Controllers\AddRegisterController::class, 'createUserForm']);
// Route::post('/emailForm', [App\Http\Controllers\AddRegisterController::class, 'userForm'])->name('validate.form');


// Route::resource('students', StudentController::class);

// Route::get('/students', [App\Http\Controllers\StudentController::class, 'create']);
// Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');

// Route::post('/students/add',[StudentController::class, 'store'])->name('students.store');


Route::get('/students', [App\Http\Controllers\CreateUserStController::class, 'create']);

Route::get('/students-list', [App\Http\Controllers\CreateUserStController::class, 'index']);

Route::post('/students/add',[App\Http\Controllers\CreateUserStController::class, 'store'])->name('students.store');





Route::get('/emailForm', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/emailForm', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
Route::get('/payment', [App\Http\Controllers\EmailController::class, 'Pay']);

Route::get('/thankyou', [App\Http\Controllers\EmailController::class, 'thank']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/users', [App\Http\Controllers\AdminController::class, 'UserManagment']);
Route::get('/courses', [App\Http\Controllers\AdminController::class, 'CourseData']);
Route::get('/reports', [App\Http\Controllers\AdminController::class, 'GetReports']);
Route::get('/adminlog', [App\Http\Controllers\AdminController::class, 'logAdmin']);







Route::get('/personal-development', function () {
    return view('personaldevelopment');
});

Route::get('/inspiring-student', function () {
    return view('inspiringstudent');
});

//dd(\Illuminate\Support\Facades\Session::all());
