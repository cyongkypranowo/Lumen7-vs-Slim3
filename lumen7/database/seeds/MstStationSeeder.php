<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:27
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:15:31
 */
use Illuminate\Database\Seeder;
use App\Models\MstStation;

class MstStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MstStation::create(['station_name' => 'Gambir', 'station_abbreviation' => 'GMR']);
        MstStation::create(['station_name' => 'Surabaya Pasarturi', 'station_abbreviation' => 'SBI']);
        MstStation::create(['station_name' => 'Bandung', 'station_abbreviation' => 'BD']);
        MstStation::create(['station_name' => 'Surabaya Gubeng', 'station_abbreviation' => 'SGU']);
        MstStation::create(['station_name' => 'Solo Balapan', 'station_abbreviation' => 'SLO']);
        MstStation::create(['station_name' => 'Semarang Tawang', 'station_abbreviation' => 'SMT']);
        MstStation::create(['station_name' => 'Cirebon', 'station_abbreviation' => 'CN']);
        MstStation::create(['station_name' => 'Malang', 'station_abbreviation' => 'ML']);
        MstStation::create(['station_name' => 'Yogyakarta', 'station_abbreviation' => 'YK']);
        MstStation::create(['station_name' => 'Cilacap', 'station_abbreviation' => 'CP']);
        MstStation::create(['station_name' => 'Tegal', 'station_abbreviation' => 'TG']);
        MstStation::create(['station_name' => 'Pasar Senen', 'station_abbreviation' => 'PSE']);
        MstStation::create(['station_name' => 'Banyuwangi Baru', 'station_abbreviation' => 'BW']);
        MstStation::create(['station_name' => 'Jember', 'station_abbreviation' => 'JR']);
        MstStation::create(['station_name' => 'Kutoarjo', 'station_abbreviation' => 'KTA']);
        MstStation::create(['station_name' => 'Lempuyangan', 'station_abbreviation' => 'LPN']);
        MstStation::create(['station_name' => 'Jakarta Kota', 'station_abbreviation' => 'JAKK']);
        MstStation::create(['station_name' => 'Blitar', 'station_abbreviation' => 'BL']);
        MstStation::create(['station_name' => 'Semarang Poncol', 'station_abbreviation' => 'SMC']);
        MstStation::create(['station_name' => 'Kiaracondong', 'station_abbreviation' => 'KAC']);
        MstStation::create(['station_name' => 'Purwosari', 'station_abbreviation' => 'PWS']);
        MstStation::create(['station_name' => 'Purwokerto', 'station_abbreviation' => 'PWT']);
        MstStation::create(['station_name' => 'Malang Kotalama', 'station_abbreviation' => 'MLK']);
        MstStation::create(['station_name' => 'Banjar', 'station_abbreviation' => 'BJR']);
        MstStation::create(['station_name' => 'Medan', 'station_abbreviation' => 'MDN']);
        MstStation::create(['station_name' => 'Rantauprapat', 'station_abbreviation' => 'RAP']);
        MstStation::create(['station_name' => 'Tanjung Balai', 'station_abbreviation' => 'TNB']);
        MstStation::create(['station_name' => 'Siantar', 'station_abbreviation' => 'SIR']);
        MstStation::create(['station_name' => 'Padang', 'station_abbreviation' => 'PD']);
        MstStation::create(['station_name' => 'Pariaman', 'station_abbreviation' => 'PMN']);
        MstStation::create(['station_name' => 'Tanjung Karang', 'station_abbreviation' => 'TNK']);
        MstStation::create(['station_name' => 'Kertapati', 'station_abbreviation' => 'KPT']);
        MstStation::create(['station_name' => 'Lubuk Linggau', 'station_abbreviation' => 'LLG']);
        MstStation::create(['station_name' => 'Baturaja', 'station_abbreviation' => 'BTA']);
        MstStation::create(['station_name' => 'Prabumulih', 'station_abbreviation' => 'PMN']);
    }
}
