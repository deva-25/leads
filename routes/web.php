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

//    Admin Code starts here

Route::get('/home', function () { return view('index');});
Route::get('/databank','admin\\AdminController@databank');
Route::get('/viewdatabank/{farmer_id}', 'admin\\AdminController@viewFarmerDatabank');
Route::get('/viewGallary/{farmer_id}', 'admin\\AdminController@viewGallary');
Route::get('/viewUsRemedy', 'admin\\AdminController@viewUsRemedy');


Route::get('/','Farmer\\FarmerController@findProduct');
Route::get('/admin', function () { return view('admin.index');});
Route::post('/AdminLogin','admin\\AdminController@AdminLogin');
Route::get('/adminfarmer', 'admin\\AdminController@adminfarmer');
Route::get('/adminhome', function () {  return view('admin.home');});
Route::get('/admindoctor', 'admin\\AdminController@admindoctor');
Route::get('/adminproduct', 'admin\\AdminController@adminproduct');
Route::post('/AdminDoctorApprove','admin\\AdminController@AdminDoctorApprove');
Route::post('/AdminDoctorReject','admin\\AdminController@AdminDoctorReject');
Route::post('/AdminFarmerApprove','admin\\AdminController@AdminFarmerApprove');
Route::post('/AdminFarmerReject','admin\\AdminController@AdminFarmerReject');
Route::get('/logout', 'admin\\AdminController@logout');
Route::post('/AdminProductApprove','admin\\AdminController@AdminProductApprove');
Route::post('/AdminProductReject','admin\\AdminController@AdminProductReject');
Route::get('/adminSettings',function () { return view('admin.settings');});
Route::post('/AdminChPsw','admin\\AdminController@AdminChPsw');

//    Doctor code starts here

Route::get('/doctor', function () { return view('doctor.index');});
Route::get('/DoctorRegistration', function () { return view('doctor.register');});
Route::post('/DoctorLogin','Doctor\\DoctorController@DoctorLogin');
Route::get('/doctorhome', function () { return view('doctor.home');});
Route::get('/doctorAnalysis','Doctor\\DoctorController@doctorAnalysis');
Route::get('/doctorResult', function () { return view('doctor.result');});
Route::get('/doctorRemedy', 'Doctor\\DoctorController@doctorRemedy');
Route::post('/DoctorReg','Doctor\\DoctorController@DoctorReg');
Route::post('/DoctorFeedback','Doctor\\DoctorController@DoctorFeedback');
Route::post('/DoctorAddRemedy','Doctor\\DoctorController@DoctorAddRemedy');
Route::post('/DoctorRemedyDelete','Doctor\\DoctorController@DoctorRemedyDelete');
Route::get('/doctorSettings',function () { return view('doctor.settings');});
Route::post('/DoctorChPsw','Doctor\\DoctorController@DoctorChPsw');

//    Farmer code strts here

Route::get('/farmer', function () { return view('farmer.index');});
Route::get('/FarmerRegistration', function () { return view('farmer.register');});
Route::post('/FarmerLogin','Farmer\\FarmerController@FarmerLogin');
Route::get('/farmerhome', function () { return view('farmer.home');});
Route::get('/farmerComplaint','Farmer\\FarmerController@farmerComplaint');
Route::get('/farmerProduct','Farmer\\FarmerController@farmerProduct');
Route::get('/farmerRemedy', 'Farmer\\FarmerController@farmerRemedy');
Route::get('/doctorFeedback','Farmer\\FarmerController@farmerGotFeedback');
Route::post('/FarmerReg','Farmer\\FarmerController@FarmerReg');
Route::post('/FarmerAddComplaint','Farmer\\FarmerController@FarmerAddComplaint');
Route::post('/FarmerComplaintDelete','Farmer\\FarmerController@FarmerComplaintDelete');
Route::post('/FarmerRemedySearch','Farmer\\FarmerController@FarmerRemedySearch');
Route::get('/farnerSettings',function () { return view('farmer.settings');});
Route::post('/FartmerChPsw','Farmer\\FarmerController@FartmerChPsw');
Route::post('/FarmerAddProduct','Farmer\\FarmerController@FarmerAddProduct');
Route::post('/FarmerProductDelete','Farmer\\FarmerController@FarmerProductDelete');
Route::get('/farnerViewDoctor','Farmer\\FarmerController@farnerViewDoctor');
Route::get('/farmerGallary','Farmer\\FarmerController@farmerGallary');
Route::post('/FarmerAddGallary','Farmer\\FarmerController@FarmerAddGallary');
Route::post('/FarmerGallaryDelete','Farmer\\FarmerController@FarmerGallaryDelete');