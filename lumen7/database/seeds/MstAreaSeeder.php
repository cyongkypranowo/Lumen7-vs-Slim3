<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:12
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:15:16
 */
use Illuminate\Database\Seeder;
use App\Models\MstArea;

class MstAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MstArea::create(['area_name' => 'JAWA']);
        MstArea::create(['area_name' => 'SUMATRA']);
    }
}
