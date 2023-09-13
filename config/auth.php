<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'login' => [
            'driver' => 'session',
            'provider' => 'login',
        ],
        'resgiter' => [
            'driver' => 'session',
            'provider' => 'resgiter',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'login' => [
            'driver' => 'eloquent',
            'model' => App\Models\TaiKhoan::class,
        ],
        'resgiter' => [
            'driver' => 'eloquent',
            'model' => App\Models\KhachHang::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],



    'password_timeout' => 10800,

];
