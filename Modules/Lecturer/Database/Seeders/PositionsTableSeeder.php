<?php

namespace Modules\Lecturer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lecturer\Entities\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $academic = ['Coodinator','Exam Ofiicer','Mangement Staff'];
        $non_academic = ['Chairman Of Admission','Chairman of verification'];
        foreach ($academic as $position) {
            Position::firstOrCreate(['staff_category_id'=>1,'name'=>$position]);
        }
        foreach ($non_academic as $position) {
            Position::firstOrCreate(['staff_category_id'=>2,'name'=>$position]);
        }
    }
}
