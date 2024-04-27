<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'name' => 'Cakrawala',
                'description' => 'Di Cakrawala, para pengunjung dapat menikmati berbagai kegiatan outdoor yang menantang, seperti hiking, flying fox, paintball, climbing, rafting, dan berbagai permainan tim lainnya. Setiap kegiatan dirancang untuk membangun kerjasama, memperkuat komunikasi, dan meningkatkan kepercayaan diri, sambil menikmati keindahan alam sekitar.',
                'address' => 'Jl. Cipelang Leutik, Selabatu, Kec. Cikole, Kabupaten Sukabumi, Jawa Barat 43114',
                'link' => 'https://maps.app.goo.gl/DVf152ftBk58vuZK7',
                'category_id' => 4,
                'photo_path' => 'assets/wisata/cakrawala.jpg'
            ],
            [
                'name' => 'Situ Gunung',
                'description' => 'Jembatan Gantung Situ Gunung merupakan jembatan gantung terpanjang, yang berada di tengah hutan, di Asia Tenggara. Membentang sepanjang 243 meter.',
                'address' => 'Sukamanis, Kec. Kadudampit, Kabupaten Sukabumi, Jawa Barat',
                'link' => 'https://maps.app.goo.gl/qsvbASwBmwXnBKUu7',
                'category_id' => 1,
                'photo_path' => 'assets/wisata/situgunung.jpeg'
            ],
            [
                'name' => 'Curug Sawer',
                'description' => 'Pada zamannya, Curug Sawer dikenal sebagai tempat yang angker, karena tempat ini menyimpan kisah mistis di dalamnya. Wisata ini dulunya sering digunakan untuk ritual mistis. Konon pemberian nama Curug Sawer ini bermula dari adanya orang sakti yang tinggal di kaki Gunung Ciremai. Ia menyelenggarakan upacara saweran di sungai Cipada untuk mendapatkan keberkahan untuk dirinya dan keturunannya. Ia bertapa bertahun-tahun hingga wafat.',
                'address' => 'Gede Pangrango, Kec. Kadudampit, Kabupaten Sukabumi, Jawa Barat 43153',
                'link' => 'https://maps.app.goo.gl/DsgVW1SMSP2eSjQB6',
                'category_id' => 3,
                'photo_path' => 'assets/wisata/curugsawer.jpg'
            ],
            [
                'name' => 'Gunung Gede',
                'description' => 'Gunung Gede, sebuah destinasi wisata yang menghadirkan keindahan alam pegunungan yang memukau, terletak di Sukabumi. Gunung Gede, dengan ketinggian sekitar 2.958 meter di atas permukaan laut, adalah salah satu gunung yang paling banyak dikunjungi di Indonesia oleh para pendaki dan pencinta alam.',
                'address' => 'Cipendawa, Kec. Pacet, Kabupaten Cianjur, Jawa Barat 43153',
                'photo_path' => 'assets/wisata/gununggede.webp',
                'category_id' => 1,
                'link' => 'https://maps.app.goo.gl/XXX2e3Fwa7yLKnfp9'
            ]
        ];
        foreach ($array as $data) {
            Destination::create($data);
        }
    }
}
