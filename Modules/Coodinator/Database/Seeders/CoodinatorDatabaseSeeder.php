<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoodinatorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CoodinatorTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(ProgrammeTableSeeder::class);
        $this->call(ProgrammeTypeTableSeeder::class);
        $this->call(SessionTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(NotificationTypeTableSeeder::class);
    }
}
