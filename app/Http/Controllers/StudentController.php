<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Pagination\Paginator;
class StudentController extends Controller
{
    
    public function showForm(){
        return view('add');
    }
    public function create(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->student_id = $request->id;
        $student->batch = $request->batch;
        $student->dept = $request->department;
        $student->save();
        return redirect('/list');
        
    }
    public function read(){
        $data = Student::paginate(5);
        return view('showList', ['data' => $data]);

    }
    public function edit($id){
        $studentdata = Student::find($id);
        return view('edit', ['data'=> $studentdata]);
    }
    public function update(Request $req){
        $student = Student::find($req->input('id'));
        $student->name = $req->input('name');
        $student->email = $req->input('email');
        $student->student_id = $req->input('student_id');
        $student->batch = $req->input('batch');
        $student->dept = $req->input('department');
        $student->save();

        return redirect('/list');
    }

    public function delete($id){
        Student::find($id)->delete();
        return redirect('/list');
    }
}

