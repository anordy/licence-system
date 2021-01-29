<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResultsSystem;


class ResultSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade =  new ResultsSystem();
        $grade->results_name = 'Division System';
        $grade->save();

        $grade =  new ResultsSystem();
        $grade->results_name = 'Merits System';
        $grade->save();

    }
}
