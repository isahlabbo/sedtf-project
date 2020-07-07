<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\NotificationTo;

class NotificationToTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Lectures', 'Exam Officers', 'Students', 'Coodinator','Other Staff'];
        foreach($names as $name){
            NotificationTo::firstOrCreate(['name'=>$name]);
        }
    }
}
