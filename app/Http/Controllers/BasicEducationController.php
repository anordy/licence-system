<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BasicEducation;
use App\Models\Location;
use App\Models\ResultsSystem;
use App\Models\ResultsGrade;


class BasicEducationController extends Controller
{
    public function index(){

        $country = Location::all();
        $result = ResultsSystem::all();
        $grade  =  ResultsGrade::all();
        // dd($grade);
        $basic =  BasicEducation::all();
        return view('pages.basicEducation',['basics' => $basic,'countries' => $country,'results' => $result ,'grades' => $grade]);    }

    public function postBasic(Request $request){
         $validator  = Validator::make($request->all(),[
             'level'=> 'required',
             'country' => 'required',
             'school' => 'required',
             'index_no' => 'required',
             'start_year' => 'required',
             'end_year' => 'required',
             'results_systems' => 'required',
             'results_grade' => 'required',
             'status'  => 'status'
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
         $basic->status = 'not verified';
         $basic->save();
        //  dd($basic->results_grade);
         return redirect('/basic');
    }
    public function getBasic(Request $request){
          $basics =  BasicEducation::all();
          return view('/basic',['basic' => $basic]);
    }
}
