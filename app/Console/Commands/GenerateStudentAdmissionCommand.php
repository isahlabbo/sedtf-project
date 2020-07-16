<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Coodinator\Entities\Programme;

class GenerateStudentAdmissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sedtf:student-admission-generate';

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
        $bar = $this->output->createProgressBar(count(Programme::all()));

        $bar->setBarWidth(100);

        $bar->start();

        $this->generateStudent($bar);

        $bar->finish();
    }

    public function generateStudent($bar)
    {
        foreach (Programme::all() as $programme) {
            foreach ([1,2] as $schedule) {
                for ($j=1; $j <= 40 ; $j++) {
                    $admissionNo = $programme->generateAdmissionNo($schedule);
                    
                    $programme->registerNewStudent($this->data(['schedule'=>$schedule,'admissionNo'=>$admissionNo]));
                }
            }
            $bar->advance();
        }
    
    }

    public function data(array $data)
    {
        return [
            "schedule" => $data['schedule'],
            "first_name" => "isah",
            "middle_name" => "a",
            "last_name" => "labbo",
            "gender" => random_int(1, 3),
            "religion" => random_int(1, 3),
            "email" => $data['admissionNo']."@sedtf.com",
            "phone" => "08162463010",
            "admissionNo" => $data['admissionNo'],
            "state" => random_int(1, 37),
            "lga" => random_int(1, 700),
            "address" => "addrs",
            "picture" => null
        ];
    }
}
