<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Skill;
use App\Models\Applicant;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'applicant_id' => 1,
            'skill' => 1
        ]);
    }
}