<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Skill;
use App\Models\Applicant;


class ApplicantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Applicant::create([
            'nome' => 'Bill Gates',
            'email' => 'gates@gmail.com',
            'idade' => 48,
            'linkedin' => 'https://www.linkedin.com/in/bill-gates'
        ]);
    }
}