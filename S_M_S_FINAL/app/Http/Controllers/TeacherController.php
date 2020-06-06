<?php

namespace App\Http\Controllers;

use App\Teachers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teacher = Teachers::all()->toArray();
        return view('teacher.teacher',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('teacher.addteacher');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $teacher = new Teachers();
        $teacher->teacher_id =  $request->input('teacher_id');
        $teacher->first_name = $request->input('f_name');
        $teacher->middle_name = $request->input('m_name');
        $teacher->last_name = $request->input('l_name');
        $teacher->contact_1 = $request->input('contact_1');
        $teacher->contact_2 = $request->input('contact_2');
        $teacher->email = $request->input('email');
        $teacher->nic_number  = $request->input('nic_number');
        $teacher->dob = $request->input('dob');
        $teacher->address = $request->input('address');
        $teacher->job_type = $request->input('job_type');
        $teacher->reg_date = $request->input('reg_date');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/teachers/',$filename);
            $teacher->image = $filename;
        }
        else{
            return $request;
            $teacher->image = '';
        }
        $teacher->save();
        return redirect()->route('teacher.index')->with('msg','Teacher Added Successfully !!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $teacher = Teachers::find($id);
        return view('teacher.showteacher',compact('teacher','id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $teacher = Teachers::find($id);
        return view('teacher.updateteacher',compact('teacher','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'teacher_id' =>'required',
            'f_name'=>'required',
            'm_name'=>'required',
            'contact_1'=>'required',
            'contact_2'=>'required',
            'email'=>'required',
            'nic_number'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'job_type'=>'required',
            'teach_sub'=>'required'

        ]);

        $teacher = Teachers::find($id);
        $teacher->teacher_id =  $request->input('teacher_id');
        $teacher->first_name = $request->input('f_name');
        $teacher->middle_name = $request->input('m_name');
        $teacher->last_name = $request->input('l_name');
        $teacher->contact_1 = $request->input('contact_1');
        $teacher->contact_2 = $request->input('contact_2');
        $teacher->email = $request->input('email');
        $teacher->nic_number  = $request->input('nic_number');
        $teacher->dob = $request->input('dob');
        $teacher->address = $request->input('address');
        $teacher->job_type = $request->input('job_type');
        $teacher->teach_subject = $request->input('teach_sub');
        if ($request->hasFile('teacher_photo')){
            $file = $request->file('teacher_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/teachers/',$filename);
            $teacher->image = $filename;
        }
        else{
            return $request;
            $student->image = '';
        }
        $teacher->save();
        return redirect()->route('teacher.index')->with('msg','Teacher Update Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $section = Teachers::find($id);
        $section->delete();
        return redirect()->route('teacher.index')->with('msg','Teacher Deleted Successfully !!!');
    }
}
