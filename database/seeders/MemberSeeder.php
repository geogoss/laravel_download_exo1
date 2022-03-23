<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members',)->insert([
            [
                'src' => 'magali.jpg',
                'name' => 'Magali',
                'age' => '25',
                'genre' => 'Femme'
            
            ],
            [
                'src' => 'bruno.jpg',
                'name' => 'Bruno',
                'age' => '42',
                'genre' => 'Homme'
            
            ],
            [
                'src' => 'jean.jpg',
                'name' => 'Jean',
                'age' => '50',
                'genre' => 'Homme'
            
            ],
            [
                'src' => 'julie.jpg',
                'name' => 'Julie',
                'age' => '32',
                'genre' => 'Femme'
            
            ],
        ]);
    }
}
