<?php

namespace Modules\Lecturer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Lecturer\Entities\Religion;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $religions = ['Islam','Christianity','Others'];
        foreach ($religions as $religion) {
            Religion::firstOrCreate(['name'=>$religion]);
        }
    }
}
