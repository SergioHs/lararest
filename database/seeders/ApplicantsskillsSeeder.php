<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicantsskillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantSkill::create([
            'applicants_id' => '1',
            'skills_id' => '1'
        ]);
    }
}
