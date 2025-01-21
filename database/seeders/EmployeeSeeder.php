<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $companies = Company::all();

        foreach ($companies as $company) {
            for ($i = 0; $i < 15; $i++) { //  15 dipendenti per azienda
                Employee::create([
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'company_id' => $company->id,
                    'phone' => $faker->phoneNumber,
                    'email' => $faker->unique()->safeEmail,
                ]);
            }
        }
    }
}
