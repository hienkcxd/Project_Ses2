<?php

namespace Database\Seeders;

use Database\Seeders\AboutUs\EmployeeDetail;
use Database\Seeders\AboutUs\EmployeeList;
use Database\Seeders\Market\DistrictList;
use Database\Seeders\Market\WardList;
use Database\Seeders\News\NewsDetailSeeder;
use Database\Seeders\News\NewsListSeeder;
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
<<<<<<< HEAD
//        $this->call(ProjectListSeeder::class);
//        $this->call(ProjectDetailSeeder::class);
//        $this->call(DistrictList::class);
//        $this->call(EmployeeList::class);
        $this->call(EmployeeDetail::class);
//        $this->call(WardList::class);
=======
        $this->call(ProjectListSeeder::class);
        $this->call(ProjectDetailSeeder::class);
        $this->call(DistrictList::class);
        $this->call(WardList::class);
        $this->call(NewsListSeeder::class);
        $this->call(NewsDetailSeeder::class);
>>>>>>> main
    }
}
