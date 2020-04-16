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
        $bar = $this->output->createProgressBar(160);

        $bar->setBarWidth(100);

        $bar->start();

        $this->generateComputerEngineeringCerticateStudent($bar);

        $this->generateComputerScienceDiplomaStudent($bar);

        $this->generateComputerScienceCertificateStudent($bar);

        $bar->finish();
    }

    public function generateComputerScienceCertificateStudent($bar)
    {
        for ($j=1; $j <= 40 ; $j++) { 
            //generate evening student
            $number = Programme::find(1)->generateNewAdmission();
            $bar->advance();
        }
    }

    public function generateComputerEngineeringCerticateStudent($bar)
    {
        for ($j=1; $j <= 40 ; $j++) { 
            //generate evening student
            $number = Programme::find(2)->generateNewAdmission();
            $bar->advance();
        }
    }

    public function generateComputerScienceDiplomaStudent($bar)
    {
        for ($i=1; $i <= 80 ; $i++) { 
            //generate morning student
            $number = Programme::find(3)->generateNewAdmission();
            $bar->advance();
        }
    }

}
