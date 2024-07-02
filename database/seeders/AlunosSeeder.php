<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alunos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alunos::factory()
        ->count(10)
        ->create();
    }
}
