<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Applicant;
use App\Models\ApplicantSkill;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            ApplicantsSeeder::class,
            SkillsSeeder::class,
            applicantskillSeeder::class,

        ]);
    }
}
