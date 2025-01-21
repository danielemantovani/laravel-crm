<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => $faker->company,
                'logo' => $faker->imageUrl(200, 200, 'business'),
                'vat_number' => $faker->numerify('###########'),
            ]);
        }
    }
}
