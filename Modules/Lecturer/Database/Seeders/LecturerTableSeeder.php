<?php

namespace Modules\Lecturer\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Lecturer\Entities\Staff;
use Illuminate\Database\Eloquent\Model;

class LecturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        foreach(Staff::all() as $staff){
            $staff->lecturer()->firstOrCreate([
                'email'=>$staff->email,
                'password'=>$staff->password,
                'admin_id'=>1,
                'from' =>'2019-10-03 18:52:00'
            ]);
        }
    }
}
