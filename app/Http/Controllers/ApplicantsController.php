<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Applicant;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Arr;


class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicant::get();

        $allApllicantsWithSkills = [];
        foreach($applicants as $applicant){
            $skillsOfApplicant = Applicant::find($applicant->id)->skills()->orderBy('descricao')->get();
            array_push($allApllicantsWithSkills, [$applicant,$skillsOfApplicant]);
        }

        return response()->json($allApllicantsWithSkills, 201);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $applicant = new Applicant();
        $applicant->fill($request->all());
        $applicant->save();

        if($request->skills){ 
            $idsSkills = explode(',', $request->skills);   

            foreach($idsSkills as $idSkill){
                $applicant->skills()->attach($idSkill);
            }

            return response()->json('OK', 201);
            
        }
        return response()->json('ok', 201);
    }

    public function show()
    {
        //Candidato 1 com suas tecnologias
        $applicants = Applicant::find(1)->skills()->orderBy('descricao')->get();
        return response()->json($applicants);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
