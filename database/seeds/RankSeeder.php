<?php

use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ranks')->insert([
            'grade' => 'E-1',
            'name' => 'Private',
            'abbreviation' => 'PV1',
        ], [
            'grade' => 'E-2',
            'name' => 'Private',
            'abbreviation' => 'PV2',
        ], [
            'grade' => 'E-3',
            'name' => 'Private First Class',
            'abbreviation' => 'PFC',
        ], [
            'grade' => 'E-4',
            'name' => 'Specialist/Corporal',
            'abbreviation' => 'CPL',
        ], [
            'grade' => 'E-5',
            'name' => 'Sergeant',
            'abbreviation' => 'SGT',
        ], [
            'grade' => 'E-6',
            'name' => 'Staff Sergeant',
            'abbreviation' => 'SSG',
        ], [
            'grade' => 'E-7',
            'name' => 'Sergeant First Class',
            'abbreviation' => 'SFC',
        ], [
            'grade' => 'E-8',
            'name' => 'Master Sergeant/First Sergeant',
            'abbreviation' => 'MSG',
        ], [
            'grade' => 'E-9',
            'name' => 'Sergeant Major',
            'abbreviation' => 'SGM',
        ]);
    }
}
