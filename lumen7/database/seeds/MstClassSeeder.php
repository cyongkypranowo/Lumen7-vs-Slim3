<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:19
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:15:23
 */
use Illuminate\Database\Seeder;
use App\Models\MstClass;

class MstClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MstClass::create(['class_name' => 'Eksekutif Argo & Luxury']);
        MstClass::create(['class_name' => 'Eksekutif Argo']);
        MstClass::create(['class_name' => 'Eksekutif Argo & Ekonomi AC Plus']);
        MstClass::create(['class_name' => 'Eksekutif Argo & Ekonomi AC Premium']);
        MstClass::create(['class_name' => 'Eksekutif Satwa & Luxury']);
        MstClass::create(['class_name' => 'Eksekutif Satwa']);
        MstClass::create(['class_name' => 'Eksekutif & Ekonomi AC Premium']);
        MstClass::create(['class_name' => 'Eksekutif & Bisnis']);
        MstClass::create(['class_name' => 'Eksekutif, Bisnis, & Ekonomi AC']);
        MstClass::create(['class_name' => 'Eksekutif & Ekonomi AC Plus']);
        MstClass::create(['class_name' => 'Ekonomi AC Plus']);
        MstClass::create(['class_name' => 'Ekonomi AC']);
        MstClass::create(['class_name' => 'Eksekutif & Ekonomi AC']);
        MstClass::create(['class_name' => 'Ekonomi AC Premium']);
        MstClass::create(['class_name' => 'Eksekutif(Bisnis) & Ekonomi AC Premium']);
        MstClass::create(['class_name' => '(Bisnis & )Ekonomi AC Premium']);
    }
}
