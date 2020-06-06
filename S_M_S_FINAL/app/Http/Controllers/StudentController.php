<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GradeController;
use App\Students;
use App\Grades;
use App\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use\Intervention\Image;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Students::all()->toArray();
        return view('student.student',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grades::all();
        return view('student.addstudent',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'student-id'   =>'required',
            'fname'  =>'required',
            'mname'  =>'required',
            'lname'  =>'required',
            'dob'  =>'required',
            'nic'  =>'required',
            'contact'  =>'required',
            'email'  =>'required',
            'school-att'  =>'required',
            'reg-date'  =>'required',
            'gfname'  =>'required',
            'glname'  =>'required',
            'relation'  =>'required',
            'gcontact'  =>'required',
            'address'  =>'required',
        ]);

        $student = new Students();
        $student ->student_id = $request->input('student-id');
        $student->first_name = $request->input('fname');
        $student->middle_name = $request->input('mname');
        $student->last_name = $request->input('lname');
        $student->dob = $request->input('dob');
        $student->nic_number = $request->input('nic');
        $student->contact_number = $request->input('contact');
        $student->email = $request->input('email');
        $student->school_attends = $request->input('school-att');
        $student->reg_date = $request->input('reg-date');
        $student->stu_grade = $request->input('student_grade');
        $student->status = $request->input('status');
        $student->gardians_fname = $request->input('gfname');
        $student->gardians_lname = $request->input('glname');
        $student->relation_to = $request->input('relation');
        $student->gardian_contact = $request->input('gcontact');
        $student->address = $request->input('address');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/student/',$filename);
            $student->image = $filename;
        }
        else{
            return $request;
            $student->image = '';
        }
        $student->save();
        return redirect()->route('student.index')->with('msg','Student Added Successfull !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Students::find($id);
        return view('student.showstudent',compact('student','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student = Students::find($id);
        return view('student.updatestudent',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student = Students::find($id);
        $student ->student_id = $request->get('student-id');
        $student->first_name = $request->get('fname');
        $student->middle_name = $request->get('mname');
        $student->last_name = $request->get('lname');
        $student->dob = $request->get('dob');
        $student->nic_number = $request->get('nic');
        $student->contact_number = $request->get('contact');
        $student->email = $request->get('email');
        $student->school_attends = $request->get('school-att');
        $student->reg_date = $request->get('reg-date');
        $student->stu_grade = $request->get('student_grade');
        $student->status = $request->get('status');
        $student->gardians_fname = $request->get('gfname');
        $student->gardians_lname = $request->get('glname');
        $student->relation_to = $request->get('relation');
        $student->gardian_contact = $request->get('gcontact');
        $student->address = $request->get('address');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/student/',$filename);
            $student->image = $filename;
        }
        else{
            return $request;
            $student->image = '';
        }
        $student->save();
        return redirect()->route('student.index')->with('msg','Student Update Successfull !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('msg','Student Delete Success !!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assign($id)
    {
        $array['student'] = Students::find($id);
        $array['class']=app('App\Http\Controllers\GradeController')->getname($array['student']->stu_grade);
       // dd($array);
        return view('framework',compact('array'));



    }

}
