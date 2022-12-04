<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function getStudent()
    {
        return response()->json(student::all(),200);

    }

    public function getStudentById($id)
    {
        $students=student::find($id);
        if (is_null($students))
        {
            return response()->json(['message' => 'Student not found'],404);
        }
        return response()->json($students::find($id));

    }
}
