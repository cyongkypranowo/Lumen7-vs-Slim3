<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:14:59
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:11:47
 */
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DTScheduleSeeder::class);
        $this->call(MstAreaSeeder::class);
        $this->call(MstClassSeeder::class);
        $this->call(MstStationSeeder::class);
        $this->call(MstTrainSeeder::class);
        $this->call(MstUserSeeder::class);
        $this->call(DTTransactSeeder::class);
    }
}
