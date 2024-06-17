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
                'uuid'=>Str::uuid(),
                'name' => 'Javascript',
                'icon' => 'javascript.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'HTML',
                'icon' => 'html.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'laravel',
                'icon' => 'laravel.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'mysql',
                'icon' => 'mysql.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'php',
                'icon' => 'php.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'wordpress',
                'icon' => 'wordpress.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'css',
                'icon' => 'css.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'bootstrap',
                'icon' => 'bootstrap.svg'
            ],
            [
                'uuid'=>Str::uuid(),
                'name' => 'bledner',
                'icon' => 'bledner.svg'
            ],
          ]
        );
    }
}
