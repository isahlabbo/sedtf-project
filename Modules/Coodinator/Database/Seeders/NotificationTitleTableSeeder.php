<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\NotificationTitle;

class NotificationTitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = ['Examination', 'Resumption', 'Result', 'Registration','Welcome','Course Allocation', 'Lecture Comencement'];
        foreach($names as $name){
            NotificationTitle::firstOrCreate(['name'=>$name]);
        }
    }
}
