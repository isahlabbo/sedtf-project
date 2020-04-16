<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\Coodinator;

class CoodinatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Coodinator::firstOrCreate([
            'first_name'=>'Isah',
            'last_name'=>'labbo',
            'email'=>'isahlabbo@sedtf.com',
            'phone'=>'08162463010',
            'password'=>Hash::make('isahlabbo'),
        ]);
    }
}
