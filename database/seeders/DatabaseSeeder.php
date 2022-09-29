<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Job::create(
        [
          'title'=> 'React Js Developer',
          'tags'=> 'react, javascript, frontend',
          'location'=> 'Migori County',
          'company'=> 'Brace Company',
          'email'=> 'barca@gmail.com',
          'description'=> 'When we run the console application, the current CLI command will be
           executed in this console and the response sent back to a terminal
           or another output device for the developers. Here goes nothing!'
        ]);

        Job::create(
            [
                'title'=> 'Django Backend Developer',
                'tags'=> 'django, python, backend',
                'location'=> 'Nairobi County',
                'company'=> 'Brace Company',
                'email'=> 'barca@gmail.com',
                'description'=> 'When we run the console application, the current CLI command will be
                 executed in this console and the response sent back to a terminal
                 or another output device for the developers. Here goes nothing!'
              ]
            );
            Job::create(
                [
                    'title'=> 'Senior Software Developer',
                    'tags'=> 'frontend, database, backend',
                    'location'=> 'Nairobi County',
                    'company'=> 'Microsoft',
                    'email'=> 'microsoft@gmail.com',
                    'description'=> 'When we run the console application, the current CLI command will be
                     executed in this console and the response sent back to a terminal
                     or another output device for the developers. Here goes nothing!'
                  ]
                );
                Job::create(
                    [
                        'title'=> 'Node Developer',
                        'tags'=> 'nodejs, javascript, backend',
                        'location'=> 'Nakuru City',
                        'company'=> 'Google Company',
                        'email'=> 'google@gmail.com',
                        'description'=> 'When we run the console application, the current CLI command will be
                         executed in this console and the response sent back to a terminal
                         or another output device for the developers. Here goes nothing!'
                      ]
                    );
    }
}
