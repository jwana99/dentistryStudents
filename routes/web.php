<?php
//->middleware('auth:student')
Route::get('/students/account', 'StudentController@accountPage');
Route::get('/students/register', 'StudentController@registerPage')->name('welcome');
Route::post('/students/register', 'StudentController@store');
Route::get('/students/login', 'StudentController@loginPage');
Route::get('/students/request', 'StudentsController@requestPatientPage');
//Route::post('/students/request', 'StudentController@');

Route::get('/patients/register', 'PatientController@index');
Route::post('/patients/register', 'PatientController@store');
Route::get('/patients/success', 'PatientController@success');

Route::get('/dashboard/home', 'Dashboard@index');
Route::get('/dashboard/students', 'Dashboard@studentsPage');
Route::get('/dashboard/api/students', 'Dashboard@studentsApi');
Route::get('/dashboard/requests', 'Dashboard@requestsPage');
Route::get('/dashboard/patients', 'Dashboard@patientsPage');
Route::get('/dashboard/api/patients', 'Dashboard@patientsApi');
//Route::get('/dashboard/api/patients', 'Dashboard@patientsApi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
