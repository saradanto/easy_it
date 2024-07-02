<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'tecnologia',
        'fotografia',
        'telefonia',
        'arredamento',
        'elettrodomestici',
        'sport',
        'animali domestici',
        'abbigliamento',
        'motori'
    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
