<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\Programme;

class ProgrammeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $programmes = [

            [
                'name'=>'Certificatie In Computer Science',
                'programme_type_id'=>1,
                'about'=>'programme description',
                'duration'=>3,
                'code'=>'CCS',
                'fee'=>20000,
            ],
            [
                'name'=>'Certificate In Computer Engineering',
                'programme_type_id'=>1,
                'about'=>'programme description',
                'duration'=>6,
                'code'=>'CCE',
                'fee'=>25000,
            ],
            [
                'name'=>'Diploma In Computer Science',
                'programme_type_id'=>2,
                'about'=>'programme description',
                'duration'=>6,
                'code'=>'DCS',
                'fee'=>25000,
            ]
        ];

        foreach ($programmes as $programme) {
            $programme = Programme::firstOrCreate($programme);
            if($programme->code == 'DCS'){
                $programme->programmeSchedules()->firstOrCreate(['schedule_id'=>1]);
            }else{
                foreach([1,2] as $schedule_id){
                    $programme->programmeSchedules()->firstOrCreate(['schedule_id'=>$schedule_id]);
                }
            }
        }
    }
}
