<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'admin_api' => [
            'driver' => 'token',
            'provider' => 'admins',
            'hash' => false,
        ],

        'lecturer' => [
            'driver' => 'session',
            'provider' => 'lecturers',
        ],

        'lecturer_api' => [
            'driver' => 'token',
            'provider' => 'lecturers',
            'hash' => false,
        ],

        'coodinator' => [
            'driver' => 'session',
            'provider' => 'coodinators',
        ],

        'coodinator_api' => [
            'driver' => 'token',
            'provider' => 'coodinators',
            'hash' => false,
        ],

        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],

        'student_api' => [
            'driver' => 'token',
            'provider' => 'students',
            'hash' => false,
        ],

        'exam_officer' => [
            'driver' => 'session',
            'provider' => 'exam_officers',
        ],

        'exam_officer_api' => [
            'driver' => 'token',
            'provider' => 'exam_officers',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => Modules\Admin\Entities\Admin::class,
        ],
        
        'coodinators' => [
            'driver' => 'eloquent',
            'model' => Modules\Coodinator\Entities\Coodinator::class,
        ],

        'students' => [
            'driver' => 'eloquent',
            'model' => Modules\Student\Entities\Student::class,
        ],

        'exam_officers' => [
            'driver' => 'eloquent',
            'model' => Modules\ExamOfficer\Entities\ExamOfficer::class,
        ],

        'lecturers' => [
            'driver' => 'eloquent',
            'model' => Modules\Lecturer\Entities\Lecturer::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

     'passwords' => [
        
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'lecturers' => [
            'provider' => 'lecturers',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'coodinators' => [
            'provider' => 'coodinators',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'students' => [
            'provider' => 'students',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'exam_officers' => [
            'provider' => 'exam_officers',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
