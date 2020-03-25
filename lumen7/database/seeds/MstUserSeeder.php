<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:39
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-01-02 11:23:57
 */
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\MstUser;
use Illuminate\Support\Facades\Crypt;

class MstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 1000) as $index) {
            MstUser::create([
                'user_name' => $faker->name,
                'user_email' => $faker->email,
                'user_email_verified_at' => date("Y-m-d H:i:s"),
                'user_password' => Crypt::encrypt('12345'),
                'user_remember_token' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
            ]);
        }
    }
}
