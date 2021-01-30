<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Applicant;

use Illuminate\Support\Facades\DB;


class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$applicants = Applicant::all();

        // $applicants = Applicant::find();

        // foreach ($applicants->skills as $skill) {
        //         //echo($skill);

        // }



        $skills = Skill::find(1);

        foreach ($skills->applicants as $applicant) {
                //echo($skill);

        }


        return response()->json($skills);
    }

    public function applicantsbyskill($idSkill)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant = new Applicant();
        $applicant->fill($request->all());
        $applicant->save();

        return response()->json($applicant, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$applicants = Applicant::with('skills')->find('1');


        //  $applicants = DB::table('skills')->where('skills.id', '=', 2)
        //  ->leftJoin('applicants', 'applicants.id', '=', 'skills.applicant_id')
        //  ->get();

        //  $applicants = DB::table('skills')
        //  ->rightJoin('applicants', 'applicants.id', '=', 'skills.applicant_id')
        //  ->get();

        //  $applicants = DB::table('applicants')
        //  ->leftJoin('skills', 'skills.applicant_id', '=', 'applicants.id')
        //  ->get();

        // $applicants = DB::table('applicants')
        // ->leftJoin('skills', 'skills.applicant_id', '=', 'applicants.id')
        // ->get();

        //$applicants = Skill::with('applicants')->get();

       // Eu quero os applicants que tem X skill


        // $skills = Skill::where('skill', '=', 1)->get();

        // $applicantsArray = [];
        // foreach ($skills as $skill){

        //     ($skill->applicant_id);

        // }

        // $applicants = Applicant::where


       // $applicants = Applicants::find()->skills()->where('applicant_id', '=', 'foo');



       // return response()->json($skills);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
