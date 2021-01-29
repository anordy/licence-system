<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Model;
use App\Models\Location;
use App\Models\ResultsSystem;;
use App\Models\ResultsGrade;
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
            LocationTableSeeder::class,
            ResultSystemSeeder::class,
            ResultGradeSeeder::class
        ]
        );
    }
}
