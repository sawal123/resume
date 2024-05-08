<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Toolseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('tools')->insert(
          [
            [
                'id'=>Str::uuid(),
                'name' => 'Javascript',
                'icon' => 'javascript.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'HTML',
                'icon' => 'html.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'laravel',
                'icon' => 'laravel.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'mysql',
                'icon' => 'mysql.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'php',
                'icon' => 'php.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'wordpress',
                'icon' => 'wordpress.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'css',
                'icon' => 'css.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'bootstrap',
                'icon' => 'bootstrap.svg'
            ],
            [
                'id'=>Str::uuid(),
                'name' => 'bledner',
                'icon' => 'bledner.svg'
            ],
          ]
        );
    }
}
