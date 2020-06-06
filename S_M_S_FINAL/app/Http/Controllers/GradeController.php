<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grades;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $grade = Grades::all()->toArray();
        return view('grade.grade',compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('grade.addgrade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $grade = new Grades();
        $grade -> grade_id = $request->input('grade_id');
        $grade ->grade_name = $request->input('grade_name');
        $grade->save();
        return redirect()->route('grade.index')->with('msg','Grade Created Success !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $grade = Grades::find($id);
        return view('grade.editgrade',compact('grade','id'));
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
        $grade = Grades::find($id);
        $grade -> grade_id = $request->get('grade_id');
        $grade -> grade_name = $request->get('grade_name');
        $grade -> save();
        return redirect()->route('grade.index')->with('msg','Data Update Successfull !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $grade = Grades::find($id);
        $grade->delete();
    }

    public function getname($id)
    {
        $grade = DB::table('class')->select('class.*')->where('grade', '=', $id)->get();

        return $grade;
    }

}
