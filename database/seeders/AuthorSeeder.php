<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'id'   => 1,
                'name' => '櫻木花道',
            ],
            [
                'id'   => 2,
                'name' => '流川楓',
            ],
        ];
        Author::insert($authors);
    }
}
