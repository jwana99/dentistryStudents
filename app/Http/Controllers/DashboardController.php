<?php

namespace App\Http\Controllers;

use App\Enums\FifthProcedure;
use App\Enums\FourthProcedure;
use App\Patient;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }

    public function studentsPage()
    {
        return view('dashboard.students');
    }

    public function requestsPage()
    {


        return view('dashboard.requests');
    }


    public function studentsApi(Request $request)
    {
        $queryBuilder = Student::orderBy('id', 'desc');
        if ($request->has('stage')) {
            if ($request->stage == 'fourth') {
                $queryBuilder->where('stage', 'Fourth stage');
            } elseif ($request->stage == 'fifth') {
                $queryBuilder->where('stage', 'Fifth stage');
            }

        }
        $students = $queryBuilder->paginate(10);

        $response = [
            "success" => true,
            "students" => $students,
        ];
        return Response::json($response);
    }

    public function patientsApi()
    {
        $queryBuilder = Patient::orderBy('id', 'desc');
        $patients = $queryBuilder->paginate(10);

        $response = [
            'success' => true,
            'patients' => $patients,
        ];
        return Response::json($response);
    }

    public function requestsApi(Request $request)
    {
        $queryBuilder = \App\Request::orderBy('id', 'desc');

        if ($request->has('stage')) {
            if ($request->stage == 'fourth') {
                $queryBuilder->where('stage', 'Fourth stage');
            } elseif ($request->stage == 'fifth') {
                $queryBuilder->where('stage', 'Fifth stage');
            }

        }

        if ($request->has('procedure')) $queryBuilder->where('procedure', ucfirst($request->procedure));

        $requests = $queryBuilder->paginate(10);

        $response = [
            'success' => true,
            'requests' => $requests,
        ];
        return Response::json($response);
    }

    public function requestConfirmation(Student $student, Patient $patient)
    {
        $patient->student_id = $student->id;
        $patient->status = 'unavailable';
        $student->status = 'unavailable';
        $patient->save();
        $student->save();
//     $patient->student()->associate($student);
    }

    public function patientsPage()
    {
        return view('dashboard.patients');
    }

    public function delete(Student $student)
    {
        $student->delete();
        $data = ["success" => true];
        return Response::json($data);
    }
}
