<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\DataTables\StudentDataTable;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(StudentDataTable $datatable)
  {
      return $datatable->render('student');
  }
}
