<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{

    static $places = [
        'Afghanistar',
        'Albania',
        'ALgeria',
        'Angola',
        'Austria',
        'Botswana',
        'Brazil',
        'Botswana',
        'Canada',
        'China',
        'Egypt',
        'France',
        'Garbon',
        'Ghana',
        'Greece',
        'Budapest',
        'Cincinnati',
        'Ethiopia',
        'Rwanda',
        'Tanzania , United states',
        'Morroco',
        'South Korea',
        'Somalia',
        'South Africa',
        'Zimbabwe'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$places as $place) {
            DB::table('locations')->insert([
                'country_name' => $place,
            ]);
        }
    }
}
