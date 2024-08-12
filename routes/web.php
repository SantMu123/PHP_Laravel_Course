<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    return view('jobs', [
        'jobs'=> [
            [
                'id'=> 1,
                'Profession'=> 'Director',
                'Payment'=> '$50.000',
            ],
            [
                'id'=> 2,
                'Profession'=> 'Programmer',
                'Payment'=> '$10.000',
            ],
            [
                'id'=> 3,
                'Profession'=> 'Teacher',
                'Payment'=> '$40.000',
            ],
        ],
    ]);
});


Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id'=> 1,
            'Profession'=> 'Director',
            'Payment'=> '$50.000',
        ],
        [
            'id'=> 2,
            'Profession'=> 'Programmer',
            'Payment'=> '$10.000',
        ],
        [
            'id'=> 3,
            'Profession'=> 'Teacher',
            'Payment'=> '$40.000',
        ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    
    return view('jobs', ['jobs' => [$job]]);
});



Route::get("/contact", function () {
    return view("contact");
});
