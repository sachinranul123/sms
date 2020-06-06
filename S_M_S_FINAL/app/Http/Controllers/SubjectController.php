<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subjects = Subjects::all()->toArray();
        return view('subject.subject',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('subject.addsub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject_id' => 'required',
            'subject_name' => 'required',
        ]);

        $subjects = new Subjects();
        $subjects -> subject_id = $request -> input('subject_id');
        $subjects -> subject_name = $request -> input('subject_name');
        $subjects -> save();
        return redirect()->route('subject.index')->with('msg','Subject Added Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $subjects = Subjects::find($id);
        return view(compact('subjects','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subjects = Subjects::find($id);
        return view('subject.editsub',compact('subjects', 'id'));
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
            'subject_id' => 'required',
            'subject_name' => 'required',
        ]);

        $subjects = Subjects::find($id);
        $subjects->subject_id = $request->get('subject_id');
        $subjects->subject_name = $request->get('subject_name');
        $subjects->save();
        return redirect()->route('subject.index')->with('msg','Data Successfully Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $subjects = Subjects::find($id);
        $subjects->delete();
        return redirect()->route('subject.index')->with('msg','Subject Delete Successfull!!');
    }
}
