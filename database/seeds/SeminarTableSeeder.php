<?php

use Illuminate\Database\Seeder;

class SeminarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) {
            DB::table('seminars')->insert([
              'judul' => str_random(60),
            ]);
        }
    }
}
