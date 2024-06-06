<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'savigil@uamv.edu.ni',
             'password' => bcrypt('contrasegura123'),
            
         ]);

        \App\Models\Student::factory()->create(
        [
            'cif' => '12032456', 
            'name' => 'Synthia',
            'lastname' => 'Gonzalez',
            'email' => 'spgonzalez@gmail.com',
            'phone' => '12345678',
        ]
        );

        \App\Models\Student::factory()->create(
            [
                'cif' => '120653678', 
                'name' => 'Megan',
                'lastname' => 'Bougle',
                'email' => 'mmbougle@gmail.com',
                'phone' => '23456789',
            ]
            );

            \App\Models\Student::factory()->create(
                [
                    'cif' => '120653879', 
                    'name' => 'Lester',
                    'lastname' => 'Rodriguez',
                    'email' => 'lar@gmail.com',
                    'phone' => '345678912',
                ]
                );

                \App\Models\Degrees::factory()->create(
                    [
                        'code' => '0001',
                        'name' => 'Ingenieria Sistemas',
                        'description' => 'Administración y tecnología de la información',
                    ]
                    );
                    \App\Models\Degrees::factory()->create(
                        [
                            'code' => '0002',
                            'name' => 'Ingenieria Industrial',
                            'description' => 'Control de calidad y producción',
                        ]
                        );

                        \App\Models\Degrees::factory()->create(
                            [
                                'code' => '0003',
                                'name' => 'Marketing',
                                'description' => 'Mercadeo y publicidad',
                            ]
                            );
                            \App\Models\Degrees::factory()->create(
                                [
                                    'code' => '0004',
                                    'name' => 'Comunicación',
                                    'description' => 'Comunicación social y periodismo',
                                ]
                                );

    }
}
