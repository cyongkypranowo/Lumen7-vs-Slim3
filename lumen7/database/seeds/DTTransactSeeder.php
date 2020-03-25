<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:06
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-30 12:09:57
 */
use Illuminate\Database\Seeder;
use App\Models\DTTransact;

class DTTransactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DTTransact::class, 4000)->create();
    }
}
