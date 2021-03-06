<?php

namespace Database\Seeders;

use Database\Seeders\AboutUs\EmployeeDetail;
use Database\Seeders\AboutUs\EmployeeList;
use Database\Seeders\account\accountSeeder;
use Database\Seeders\account\roleSeeder;
use Database\Seeders\customer\blackListsSeeder;
use Database\Seeders\Customer\customerSeeder;
use Database\Seeders\Market\DistrictList;
use Database\Seeders\Market\MarketList;
use Database\Seeders\Market\WardList;
use Database\Seeders\News\NewsDetailSeeder;
use Database\Seeders\News\NewsListSeeder;
use Database\Seeders\Project\ProjectDetailSeeder;
use Database\Seeders\Project\ProjectListSeeder;
use Database\Seeders\work\WorkDetailSeeder;
use Database\Seeders\work\WorkListSeeder;
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
        $this->call(DistrictList::class);
        $this->call(WardList::class);
        $this->call(EmployeeList::class);
        $this->call(EmployeeDetail::class);
        $this->call(NewsListSeeder::class);
        $this->call(NewsDetailSeeder::class);
        $this->call(MarketList::class);
        $this->call(customerSeeder::class);
        $this->call(blackListsSeeder::class);
        $this->call(WorkListSeeder::class);
        $this->call(WorkDetailSeeder::class);
        $this->call(roleSeeder::class);
        $this->call(accountSeeder::class);
//        $this->call(NewsDetailsTableSeeder::class);
//        $this->call(CkeditorNewsTableSeeder::class);
    }
}
