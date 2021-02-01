<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Applicant;
use App\Models\ApplicantSkill;


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Arr;


class ApplicantsController extends Controller
{
    public function index()
    {
        //Returns all applicants and your skills
        $applicants = Applicant::get();

        $allApllicantsWithSkills = [];
        foreach($applicants as $applicant){
            $skillsOfApplicant = Applicant::find($applicant->id)->skills()->orderBy('descricao')->get();
            array_push($allApllicantsWithSkills, [$applicant,$skillsOfApplicant]);
        }

        return response()->json($allApllicantsWithSkills, 201);
    }

    public function store(Request $request)
    {
        //Store new applicant with your skills
        $applicant = new Applicant();
        $applicant->fill($request->all());
        $applicant->save();

        if($request->skills){ 
            $idsSkills = explode(',', $request->skills);   

            foreach($idsSkills as $idSkill){
                $applicant->skills()->attach($idSkill);
            }            
        }

        if($applicant->save()){
            return response()->json('ok', 201);
        } else {
            return response()->json('error', 500);
        }
        
    }

    public function show()
    {
        //Candidato 1 com suas tecnologias
        $applicants = Applicant::find(1)->skills()->orderBy('descricao')->get();
        return response()->json($applicants);

    }

    public function update(Request $request, $id)
    {
        $applicant = Applicant::find($id);

        if(!$applicant) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $applicant->fill($request->all());
        $applicant->save();

        //Deleta Skills
        $skillsOfApplicant = ApplicantSkill::where('applicant_id', '=', $id);
        $skillsOfApplicant->delete();

        //Recria Skills
        if($request->skills){ 
            $idsSkills = explode(',', $request->skills);   

            foreach($idsSkills as $idSkill){
                $applicant->skills()->attach($idSkill);
            }            
        }

        return response()->json($applicant->save());
    }

    public function destroy($id)
    {
        //find the applicant and delete him, and your skills
        $applicant = Applicant::find($id);
        if(!$applicant) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        } else {
            $applicant->delete();
            return response()->json([
                'message'   => 'Record Deleted',
            ], 201);
            
        }
    }
}
