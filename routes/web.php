<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $superheroes = [
        [
            'name' => 'Batman',
            'real_name' => 'Bruce Wayne',
            'alias' => 'The Dark Knight',
            'status' => 'Active',
            'powers' => [
                'Genius-level intellect',
                'Peak human physical condition',
                'Expert detective',
                'Master martial artist',
                'Advanced technology'
            ]
        ],
        [
            'name' => 'Superman',
            'real_name' => 'Clark Kent',
            'alias' => 'The Man of Steel',
            'status' => 'Active',
            'powers' => [
                'Superhuman strength',
                'Superhuman speed',
                'Superhuman durability',
                'Heat vision',
                'Flight'
            ]
        ],
        [
            'name' => 'Wonder Woman',
            'real_name' => 'Diana Prince',
            'alias' => 'Princess of Themyscira',
            'status' => 'Active',
            'powers' => [
                'Superhuman strength',
                'Superhuman durability',
                'Superhuman agility',
                'Lasso of Truth',
                'Bracelets of Submission'
            ]
        ],
        [
            'name' => 'The Flash',
            'real_name' => 'Barry Allen',
            'alias' => 'The Fastest Man Alive',
            'status' => 'Active',
            'powers' => [
                'Superhuman speed',
                'Time travel',
                'Phasing',
                'Accelerated healing',
                'Vortex creation'
            ]
        ],
        [
            'name' => 'Aquaman',
            'real_name' => 'Arthur Curry',
            'alias' => 'King of Atlantis',
            'status' => 'Active',
            'powers' => [
                'Superhuman strength',
                'Superhuman durability',
                'Swimming at supersonic speeds',
                'Command over sea life',
                'Telepathy'
            ]
        ],
        [
            'name' => 'Green Lantern',
            'real_name' => 'Hal Jordan',
            'alias' => 'Emerald Knight',
            'status' => 'Active',
            'powers' => [
                'Power ring',
                'Flight',
                'Energy constructs',
                'Energy blasts',
                'Force fields'
            ]
        ],
        [
            'name' => 'Martian Manhunter',
            'real_name' => 'J\'onn J\'onzz',
            'alias' => 'The Last Martian',
            'status' => 'Active',
            'powers' => [
                'Telepathy',
                'Shape-shifting',
                'Phasing',
                'Superhuman strength',
                'Superhuman durability'
            ]
        ],
        [
            'name' => 'Green Arrow',
            'real_name' => 'Oliver Queen',
            'alias' => 'The Emerald Archer',
            'status' => 'Active',
            'powers' => [
                'Master archer',
                'Expert hand-to-hand combatant',
                'Peak human physical condition',
                'Trick arrows',
                'Intelligence'
            ]
        ],
    ];

    $data = [
        'heroes' => $superheroes
    ];

    return view('welcome', $data);
});
