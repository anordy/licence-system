<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResultsGrade;


class ResultGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade =  new ResultsGrade();
        $grade->division_system = 'Division I';
        $grade->merits_system = 'Dinstiction';
        $grade->save();

        $grade =  new ResultsGrade();
        $grade->division_system = 'Division II';
        $grade->merits_system = 'Merits';
        $grade->save();


        $grade =  new ResultsGrade();
        $grade->division_system = 'Division III';
        $grade->merits_system = 'Credit';
        $grade->save();

        $grade =  new ResultsGrade();
        $grade->division_system = 'Division IV';
        $grade->merits_system = 'Pass';
        $grade->save();
    }
}
