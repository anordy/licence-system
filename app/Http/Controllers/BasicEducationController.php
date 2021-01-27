<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicEducationController extends Controller
{
    public function index(){
        return view('pages.basicEducation');
    }

    public function postBasic(Request $request){
         $validator  = Validator::make($request->all(),[
             'level'=> 'required',
             'country' => 'required',
             'school' => 'required',
             'index_no' => 'required',
             'start_year' => 'required',
             'end_year' => 'required',
             'result_systems' => 'required',
             'results_grade' => 'required',
         ]);


         $basic = new BasicEducation;
         $basic->level = $request->input('level');
         $basic->country = $request->input('country');
         $basic->school = $request->input('school');
         $basic->index_no = $request->input('index_no');
         $basic->start_year = $request->input('start_year');
         $basic->end_year = $request->input('end_year');
         $basic->results_system = $request->input('results_system');
         $basic->results_grade = $request->input('results_grade');
         $basic->save();


         return redirect('/basic');

    }
}
