<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\ProgrammeType;

class ProgrammeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $programmeTypes = ['Certificate','Diploma'];
        foreach ($programmeTypes as $programmeType) {
            ProgrammeType::firstOrCreate(['name'=>$programmeType]);
        }
        
    }
}
