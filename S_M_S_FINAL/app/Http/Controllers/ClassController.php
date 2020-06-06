<?php

namespace App\Http\Controllers;
use App\Grades;
use Illuminate\Http\Request;
use App\Classes;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Classes::all()->toArray();
        return view('class.class',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grades::all();

        return view('class.addclass',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class = new Classes();
        $class->class_id = $request ->input('class_id');
        $class->class_name = $request->input('class_name');
        $class->class_fee = $request->input('class_fee');
        $class->class_date = $request->input('class_date');
        $class->start_time = $request->input('start_time');
        $class->end_time = $request->input('end_time');
        $class->hall_charge = $request->input('hall_charge');
        $class->grade = $request->input('select_grade');
        $class->save();

        return redirect()->route('class.index')->with('msg','Class Added Successfull !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classes::find($id);
        return view('class.showclass',compact('class','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::find($id);
        return view('class.editclass',compact('class','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class =  Classes::find($id);
        $class->class_id = $request-> get('class_id');
        $class->class_name = $request->get('class_name');
        $class->class_fee = $request->get('class_fee');
        $class->hall_charge = $request->get('hall_charge');
        $class->class_date = $request->get('class_date');
        $class->start_time = $request->get('start_time');
        $class->end_time = $request->get('end_time');
        $class->grade = $request->get('select_grade');
        $class->save();
        return redirect()->route('class.index')->with('msg','Class Details Update Successfull !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
