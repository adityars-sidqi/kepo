<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SeminarSeeder extends Seeder
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

        for ($i=0; $i < 10; $i++) {
            DB::table('seminars')->insert([
            'judul' => str_random(150),
            'tgl_seminar' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d'),
            'tempat' => str_random(100),
            'deskripsi' => str_random(200),
            'tiket_tersedia' => rand(1, 1000),
            'harga' => rand(10000, 1000000),
            'gambar' => 'jakarta-smart-city-1495368071.png',
            'slug' => str_random(42),
            'id_kategori' => rand(1, 5),
            'id_organisasi' => rand(1, 3),
          ]);
        }
    }
}
