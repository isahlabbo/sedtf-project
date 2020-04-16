<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Student\Entities\Remark;
use Modules\Student\Entities\Schedule;
use Illuminate\Database\Eloquent\Model;

class RemarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $remarks = [
            ['name'=>'PASSED'],
            ['name'=>'FAILED'],
        ];
        $schedules = [
            ['name'=>'DEFAULT'],
            ['name'=>'MORNING'],
            ['name'=>'EVENING'],
        ];

        foreach ($remarks as $remark) {
            Remark::firstOrCreate($remark);
        }

        foreach ($schedules as $schedule) {
            Schedule::firstOrCreate($schedule);
        }

    }
}
