<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\QualificationType;

class QualificationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['NECO', 'WAEC', 'NABTEB'];
        foreach ($types as $key => $value) {
           QualificationType::firstOrCreate(['name'=>$value]);
        }
    }
}
