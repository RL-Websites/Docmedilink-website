<?php

namespace Database\Seeders;

use App\Models\FormSubmission;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormSubmissionSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            FormSubmission::create([
                'company_name' => $faker->company,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'services' => $faker->randomElement([
                    'Telehealth Platform',
                    'Physician Services',
                    'Pharmacy Services',
                    'Partnership Opportunities'
                ]),
                'about' => $faker->randomElement([
                    'Customer',
                    'Provider',
                    'Partner'
                ]),
                'form_type' => $faker->randomElement([
                    'contact',
                    'clinicians'
                ]),
                'details' => $faker->paragraph,
            ]);
        }
    }
}
