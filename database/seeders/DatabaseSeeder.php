<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Author;
use App\Models\Dev;
use App\Models\Manager;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::factory(1)->create();
        Author::factory(1)->create();
        Dev::factory(1)->create();
        Manager::factory(1)->create();

    }
}
