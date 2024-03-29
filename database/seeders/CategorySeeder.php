<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\User;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryFactory::new()->count(5)->create();

    }
}
