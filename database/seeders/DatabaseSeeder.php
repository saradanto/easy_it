<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        [
            'name' => 'Tecnologia',
            'icon' => 'bi bi-earbuds'
        ],
            [
            'name' => 'Fotografia',
            'icon' => 'bi bi-camera'
            ],
            [
            'name' => 'Telefonia',
            'icon' => 'bi bi-phone'
            ],
            [
            'name' => 'Arredamento',
            'icon' => 'bi bi-lamp'
            ],
            [
            'name' => 'Elettrodomestici',
            'icon' => 'bi bi-tv'
            ],
            [
            'name' => 'Sport',
            'icon' => 'bi bi-person-arms-up'
            ],
            [
            'name' => 'Animali domestici',
            'icon' => 'bi bi-house-heart'
            ],
            [
            'name' => 'Abbigliamento',
            'icon' => 'bi bi-person-standing-dress'
            ],
            [
            'name' => 'Motori',
            'icon' => 'bi bi-tools'
            ],
            [
            'name' => 'Auto',
            'icon' => 'bi bi-car-front'
            ]
    ];

    // public $icons = [
    //     'bi bi-tv',
    //     'bi bi-camera',
    //     'bi bi-phone',
    //     'bi bi-house-door',
    //     'bi bi-lamp',
    //     'bi bi-person-arms-up',
    //     'bi bi-asterisk',
    //     'bi bi-person-standing-dress',
    //     'bi bi-tools',
    //     'bi bi-car-front'
    // ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category['name'],
                'icon' => $category['icon']
            ]);
        }
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
