<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\Session;
class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $sessions = [
            
            [
                'name'=>'2014/2015',
                'start'=>'2019-10-03',
                'end'=>'2019-10-03',
                'status'=> 1
            ],
            [
                'name'=>'2015/2016',
                'start'=>'2019-10-03',
                'end'=>'2019-10-03',
                'status'=> 0
            ],
            [
                'name'=>'2016/2017',
                'start'=>'2019-10-03',
                'end'=>'2019-10-03',
                'status'=> 0
            ],
            [
                'name'=>'2017/2018',
                'start'=>'2019-10-03',
                'end'=>'2019-10-03',
                'status'=> 0
            ],
            [
                'name'=>'2018/2019',
                'start'=>'2019-10-03',
                'end'=>'2019-10-03',
                'status'=> 0
            ]
        ];
        foreach ($sessions as $session) {
            $session = Session::firstOrCreate($session);
        }
    }
}
