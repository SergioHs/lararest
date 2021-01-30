<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Skill;
use App\Models\Applicant;
use App\Models\ApplicantSkill;

class applicantskillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantSkill::create([
            'applicant_id' => '1',
            'skill_id' => '1'
        ]);
    }
}
