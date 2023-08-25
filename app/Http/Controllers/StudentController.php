<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function create()

    {
        return view('create');
    }

    public function store(Request $request)

    {
        $input = $request->all();

        $request->validate([
            'title' => 'required',
            'name' => 'required|max:255',
            'bday' => 'required|date',
            'age' => 'required|numeric',
            'gender' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
            't&c' => 'required',
        ]);

        $input['password'] = bcrypt($input['password']);
        student::create($input);

        return back()->with('success','Successfully registered a new student!');

    }
}
