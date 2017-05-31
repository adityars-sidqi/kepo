<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5 ; $i++) {
        DB::table('kategoris')->insert([
              'nama_kategori' => str_random(10),
            ]);
      }
    }
}
