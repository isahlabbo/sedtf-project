<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\Semester;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $semesters = ['First', 'Second'];
        foreach ($semesters as $key => $value) {
            Semester::firstOrCreate(['name'=>$value]);
        }
    }
}
