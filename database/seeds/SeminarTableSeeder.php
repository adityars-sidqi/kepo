<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SeminarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $startDate = Carbon::now();
      $endDate   = Carbon::now()->subDays(7);

        for ($i=0; $i < 10 ; $i++) {
            DB::table('seminars')->insert([
              'judul' => str_random(150),
              'tgl_seminar' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d');,
              'tempat' => str_random(100),
              'deskripsi' => str_random(200),
              'tiket_tersedia' => rand(1, 11),
              'harga' => rand(1, 11),
              'gambar' => 'seminar.png'
            ]);
        }
    }
}
