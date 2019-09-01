<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; i <= 10; $i++)
        {
            DB::table('anggota')->insert([
                'nama' => 'sulis',
                'email' => 'sulis@okee.com',
                'umur' => 29
            ]);
        }
    }
}
