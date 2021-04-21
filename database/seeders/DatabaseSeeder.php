<?php

namespace Database\Seeders;

use Database\Seeders\Project\ProjectDetailSeeder;
use Database\Seeders\Project\ProjectListSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectListSeeder::class);
        $this->call(ProjectDetailSeeder::class);
    }
}
