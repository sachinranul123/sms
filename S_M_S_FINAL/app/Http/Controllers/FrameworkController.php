<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Framework;

class FrameworkController extends Controller
{
    public function index()
    {
    	return view('framework');
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$data = [];
        $data['name'] = json_encode($input['name']);
        $data['student_id'] = ($input['stu_id']);
        $data['student_fname'] =($input['stu_fname']);
        $data['student_mname'] =($input['stu_mname']);
        $data['student_lname'] =($input['stu_lname']);
        $data['student_grade'] =($input['stu_grade']);


    	Framework::create($data);
        return response()->json(['success'=>'Success Fully Insert Recoreds']);
    }
}
