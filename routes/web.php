<?php
//->middleware('auth:student')
Route::get('/students/account', 'StudentController@accountPage')->middleware('auth:student')->name('student_account');
Route::get('/students/register', 'StudentController@registerPage')->name('welcome');
Route::post('/students/register', 'StudentController@store');
Route::get('/students/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/students/login', 'Auth\LoginController@login');
Route::get('/students/logout', 'Auth\LoginController@logout');
Route::get('/students/api/procedures/{stage}', 'StudentController@procedures');
Route::post('/students/requests', 'StudentController@storeRequest');
Route::get('/students/api/patients', 'StudentController@getMyPatients');


Route::get('/patients/register', 'PatientController@index');
Route::post('/patients/register', 'PatientController@store');
Route::get('/patients/success', 'PatientController@success');

Route::group(['middleware' => ['auth:student', 'admin']], function () {
    Route::get('/dashboard/home', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/students', 'DashboardController@studentsPage');
    Route::get('/dashboard/api/students', 'DashboardController@studentsApi');
    Route::get('/dashboard/requests', 'DashboardController@requestsPage');
    Route::get('/dashboard/patients', 'DashboardController@patientsPage');
    Route::get('/dashboard/api/patients', 'DashboardController@patientsApi');
    Route::get('/dashboard/api/requests', 'DashboardController@requestsApi');
    Route::post('/dashboard/requests/confirmation/{student}/{patient}', 'DashboardController@requestConfirmation');
    Route::delete('/dashboard/students/{student}', 'DashboardController@delete');

});
Route::get('/fakerdata', function () {
    $students = factory(App\Student::class, 100)->create();
    $patients = factory(App\Patient::class, 100)->create();
});

Route::view('/404', '404');
