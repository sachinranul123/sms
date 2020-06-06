<?php

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



Route::get('/',function (){
    return view('sidenav');
});

Route::get('/home',function (){
    return view('home');
});

Route::get('/attendance',function (){
    return view('attendance.attendance');
});
Route::get('/getatt',function (){
    return view('attendance.getattendance');
});

Route::get('/addpayment',function (){
    return view('payment.addpayment');
});


Route::get('frameworks/{id}',[
    'uses'=>'StudentController@assign',
    'as'=>'assign'
]);

Route::post('frameworks','FrameworkController@store')->name('frameworks.store');
Route::get('frameworks','FrameworkController@index');


Route::resource('subject','SubjectController');

Route::resource('section','SectionController');

Route::resource('teacher','TeacherController');

Route::resource('student','StudentController');

Route::resource('grade','GradeController');

Route::resource('class','ClassController');






















//Route::get('/sec',function (){
//    return view('section.section');
//});
//Route::get('/addsec',function (){
//    return view('section.addsec');
//});
//Route::get('/updatesec',function (){
//    return view('section.updatesec');
//});
//Route::get('/teacher',function (){
//    return view('teacher.teacher');
//});
//Route::get('/addteacher',function (){
//    return view('teacher.addteacher');
//});
//Route::get('/updateteacher',function (){
//    return view('teacher.updateteacher');
//});
//Route::get('/stu',function (){
//    return view('student.student');
//});
//Route::get('/addstu',function (){
//    return view('student.addstudent');
//});
//Route::get('/updatestu',function (){
//    return view('student.updatestudent');
//});


