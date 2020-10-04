<?php

namespace Modules\Student\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(RemarkTableSeeder::class);
        $this->call(MaritalStatusTableSeeder::class);
        $this->call(QualificationTypeTableSeeder::class);
        $this->call(QualificationTypeSubjectTableSeeder::class);
    }
}
