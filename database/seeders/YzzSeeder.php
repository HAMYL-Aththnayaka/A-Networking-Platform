<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Yzz;


class YzzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Yzz::factory()->count(50)->create();
    }
}
