<?php

namespace Modules\Coodinator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Coodinator\Entities\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $courses = [
        	//certificate in computer science programme courses
        	[
                'title'=> 'Citizenship and leadership',
                'code'=> 'GST 119',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Use of English',
                'code'=> 'GST 111',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Elementary Mathematics',
                'code'=> 'GST 112',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Operating System',
                'code'=> 'CST 113',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Introduction to internet',
                'code'=> 'CST 114',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Introduction to Computer',
                'code'=> 'CST 115',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Microsoft Word',
                'code'=> 'CST 116',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Microsoft Power Point',
                'code'=> 'CST 117',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Microsoft Excel',
                'code'=> 'CST 118',
                'unit'=> 2,
                'programme_id'=> 1,
                'semester_id'=> 1
        	],

        	// diploma In computer science programme courses first semester

        	[
                'title'=> 'Networking',
                'code'=> 'DCS 204',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Data Communication',
                'code'=> 'DCS 205',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Spreadsheet',
                'code'=> 'DCS 207',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Database Management',
                'code'=> 'DCS 208',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 1
        	],
        	[
                'title'=> 'Microsoft Power Point',
                'code'=> 'DCS 210',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 1
        	],

        	// diploma In computer science programme courses second semester

        	[
                'title'=> 'Communication Skill',
                'code'=> 'DCS 201',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 2
        	],
        	[
                'title'=> 'Business Mathematics',
                'code'=> 'DCS 202',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 2
        	],
        	[
                'title'=> 'Microsoft Word',
                'code'=> 'DCS 203',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 2
        	],
        	[
                'title'=> 'Corel Draw',
                'code'=> 'DCS 206',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 2
        	],
        	[
                'title'=> 'Microsoft Publisher',
                'code'=> 'DCS 209',
                'unit'=> 2,
                'programme_id'=> 3,
                'semester_id'=> 2
        	],
            // certificate In computer engineering programme courses

            [
                'title'=> 'Hardware Assembling',
                'code'=> 'CCE 111',
                'unit'=> 2,
                'programme_id'=> 2,
                'semester_id'=> 1
            ],
            [
                'title'=> 'Trouble shooting and Hardware Maintenace',
                'code'=> 'CCE 112',
                'unit'=> 2,
                'programme_id'=> 2,
                'semester_id'=> 1
            ],
            [
                'title'=> 'Software Installation',
                'code'=> 'CCE 113',
                'unit'=> 2,
                'programme_id'=> 2,
                'semester_id'=> 1
            ],
            [
                'title'=> 'Operating System',
                'code'=> 'CCE 114',
                'unit'=> 2,
                'programme_id'=> 2,
                'semester_id'=> 1
            ],
        ];
        foreach ($courses as $course) {
            
        	$registeredCourse = Course::firstOrCreate([
        		'code'=>$course['code'],
        		'title'=>$course['title'],
        		'unit'=>$course['unit'],
        		'semester_id'=>$course['semester_id'],
        	]);

        	$registeredCourse->programmeCourses()->firstOrCreate([
        		'programme_id'=>$course['programme_id']
        	]);
        }
    }
}
