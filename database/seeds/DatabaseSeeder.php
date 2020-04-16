<?php

use Illuminate\Database\Seeder;
use Modules\Coodinator\Database\Seeders\CoodinatorDatabaseSeeder;
use Modules\Lecturer\Database\Seeders\LecturerDatabaseSeeder;
use Modules\ExamOfficer\Database\Seeders\ExamOfficerDatabaseSeeder;
use Modules\Management\Database\Seeders\ManagementDatabaseSeeder;
use Modules\Student\Database\Seeders\StudentDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LecturerDatabaseSeeder::class);
        $this->call(ExamOfficerDatabaseSeeder::class);
        $this->call(ManagementDatabaseSeeder::class);
        $this->call(CoodinatorDatabaseSeeder::class);
        $this->call(StudentDatabaseSeeder::class);
    }
}
