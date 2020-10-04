<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\MaritalStatus;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['Single', 'Married', 'Divorced'];
        foreach ($statuses as $key => $value) {
           MaritalStatus::firstOrCreate(['name'=>$value]);
        }
    }
}
