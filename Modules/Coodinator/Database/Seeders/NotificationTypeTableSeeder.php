<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\NotificationType;

class NotificationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $names = ['Result', 'Course Allocation', 'Meeting', 'Lectures','Examination', 'Resumption'];
        foreach($names as $name){
            NotificationType::firstOrCreate(['name'=>$name]);
        }
    }
}
