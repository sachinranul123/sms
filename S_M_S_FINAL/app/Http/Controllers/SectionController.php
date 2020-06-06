<?php

namespace App\Http\Controllers;

use App\Sections;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DataTables;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $section = Sections::all()->toArray();
        return view('section.section',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('section.addsec');
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
            'section_id' => 'required',
            'section_name' => 'required',
        ]);

        $section = new Sections();
        $section -> section_id = $request ->input('section_id');
        $section -> section_name = $request ->input('section_name');
        $section -> save();
        return redirect()->route('section.index')->with('msg','Section Added Successfully !!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $section = Sections::find($id);
       return view('section.showsection',compact('section','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $section = Sections::find($id);
        return view('section.updatesec',compact('section','id'));
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
            'section_id' => 'required',
            'section_name' => 'required',
        ]);

        $section = Sections::find($id);
        $section -> section_id = $request->get('section_id');
        $section -> section_name = $request ->get('section_name');
        $section -> save();
        return redirect()->route('section.index')->with('msg','Section Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $section = Sections::find($id);
        $section->delete();
        return redirect()->route('section.index')->with('msg','Section Deleted Successfully !!!');
    }
}
