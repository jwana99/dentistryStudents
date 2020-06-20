<?php

namespace App\Http\Controllers;

use App\Enums\FifthProcedure;
use App\Enums\FourthProcedure;
use App\Patient;
use App\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    use RegistersUsers;

    protected function guard()
    {
        return Auth::guard('student');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerPage()
    {
        return view('students.register');
    }

    public function accountPage()
    {

        return view('students.account');
    }

    public function procedures($stage)
    {
        switch ($stage) {
            case "fourth":
                $procedures = FourthProcedure::toSelectArray();
                return $procedures = ['procedures' => $procedures];
                break;
            case "fifth":
                $procedures = FifthProcedure::toSelectArray();
                return $procedures = ['procedures' => $procedures];
                break;
        }
    }

    public function storeRequest(Request $request)
    {
//        todo
//        relationshit
//        eagerloadingshit
        $rules = [

            'name' => 'required',
            'procedure' => 'required',
            'grade' => 'required',
            'id' => 'required',
        ];

        $data = $this->validate($request, $rules);

        $student = auth('student')->user();
        $data["id"] = $student->id;
        $data["name"] = $student->name;
        $data["grade"] = $student->stage;

        \App\Request::create($data);
//        $student = Student::find('id', auth);
//        $student;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "password" => "required",
            "stage" => "required",
        ];
        $data = $this->validate($request, $rules);
        $student = Student::create($data);
        Auth::guard('student')->login($student);
        return Response::redirectTo("/students/account");
    }

    public function getMyPatients()
    {
        $patients = Patient::where('student_id', auth('student')->user()->id)->get();
        $response = [
            'success' => true,
            'patients' => $patients
        ];

        return Response::json($response);
    }

//    public function login()
//    {
//        Auth::guard('student')->login($user);
//    }

    public function requestPatientPage()
    {
        return view('students.requestPatient');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
