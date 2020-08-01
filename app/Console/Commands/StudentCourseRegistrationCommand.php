<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Student\Entities\Student;

class StudentCourseRegistrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sedtf:make-student-course-registration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $bar = $this->output->createProgressBar(count(Student::all()));

        $bar->setBarWidth(100);

        $bar->start();
        foreach(Student::cursor() as $student){
            $session_registration = $student->sessionRegistrations()->firstOrCreate([
            'programme_id'=>$student->admission->programme_id,
            'session_id'=> currentSession()->id,
            'batch'=> $student->batch()
            ]);
            
            foreach($student->currentLevelCourses() as $course){
                
                $semester_registration = $session_registration->semesterRegistrations()->firstOrCreate(['semester_id'=>$course->semester->id]);

                $course_registration = $semester_registration->courseRegistrations()->firstOrCreate([
                    'course_id'=>$course->id,
                    'session_id'=> currentSession()->id,
                    'admission_id'=>$student->admission->id
                ]);

                $course_registration->result()->firstOrCreate([]);
                
            }
            // register all the repeated courses
            foreach ($student->repeatCourses as $repeatCourse) {
                $semester_registration = $session_registration->semesterRegistrations()->firstOrCreate(['semester_id'=>$repeatCourse->course->semester->id]);

                $course_registration = $semester_registration->courseRegistrations()->firstOrCreate([
                    'course_id'=>$repeatCourse->course->id,
                    'session_id'=> currentSession()->id,
                    'admission_id'=>$student->admission->id
                ]);

                $course_registration->result()->firstOrCreate([]);

                $repeatCourse->update(['status'=>0]);
            }
            $bar->advance();
        }
        $bar->finish();
    }
}
