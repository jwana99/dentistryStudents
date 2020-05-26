<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Dashboard extends Controller
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

        $students = $queryBuilder->get();

        $response = [
            "success" => true,
            "students" => $students,
        ];
        return Response::json($response);
    }

    public function patientsPage()
    {
        return view('dashboard.patients');
    }

    public function patientsApi(Request $request)
    {
        $queryBuilder = Patient::orderBy('id', 'desc');
        $patients = $queryBuilder->paginate(5);

        $response = [
            'success' => true,
            'patients' => $patients,
        ];
        return Response::json($response);
    }
}
