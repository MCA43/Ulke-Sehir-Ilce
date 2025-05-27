<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        // Adana
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Aladağ",
            'slug'         => Str::slug("Aladağ", '-'),
            'code'          => "TR-01-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Ceyhan",
            'slug'         => Str::slug("Ceyhan", '-'),
            'code'         => "TR-01-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Çukurova",
            'slug'         => Str::slug("Çukurova", '-'),
            'code'         => "TR-01-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Feke",
            'slug'         => Str::slug("Feke", '-'),
            'code'         => "TR-01-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "İmamoğlu",
            'slug'         => Str::slug("İmamoğlu", '-'),
            'code'         => "TR-01-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Karaisalı",
            'slug'         => Str::slug("Karaisalı", '-'),
            'code'         => "TR-01-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Karataş",
            'slug'         => Str::slug("Karataş", '-'),
            'code'         => "TR-01-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Kozan",
            'slug'         => Str::slug("Kozan", '-'),
            'code'         => "TR-01-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Pozantı",
            'slug'         => Str::slug("Pozantı", '-'),
            'code'         => "TR-01-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Sarıçam",
            'slug'         => Str::slug("Sarıçam", '-'),
            'code'         => "TR-01-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Seyhan",
            'slug'         => Str::slug("Seyhan", '-'),
            'code'         => "TR-01-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Tufanbeyli",
            'slug'         => Str::slug("Tufanbeyli", '-'),
            'code'         => "TR-01-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Yumurtalık",
            'slug'         => Str::slug("Yumurtalık", '-'),
            'code'         => "TR-01-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 1,
            'city_code' => "TR-01",
            'title'        => "Yüreğir",
            'slug'         => Str::slug("Yüreğir", '-'),
            'code'         => "TR-01-14",
            'status'       => 'ACTIVE',
        ]);

        // Adıyaman
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Besni",
            'slug'         => Str::slug("Besni", '-'),
            'code'         => "TR-02-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Çelikhan",
            'slug'         => Str::slug("Çelikhan", '-'),
            'code'         => "TR-02-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Gerger",
            'slug'         => Str::slug("Gerger", '-'),
            'code'         => "TR-02-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Gölbaşı",
            'slug'         => Str::slug("Gölbaşı", '-'),
            'code'         => "TR-02-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Kahta",
            'slug'         => Str::slug("Kahta", '-'),
            'code'         => "TR-02-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-02-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Samsat",
            'slug'         => Str::slug("Samsat", '-'),
            'code'         => "TR-02-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Sincik",
            'slug'         => Str::slug("Sincik", '-'),
            'code'         => "TR-02-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 2,
            'city_code' => "TR-02",
            'title'        => "Tut",
            'slug'         => Str::slug("Tut", '-'),
            'code'         => "TR-02-09",
            'status'       => 'ACTIVE',
        ]);

        // Afyonkarahisar
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Tut",
            'slug'         => Str::slug("Tut", '-'),
            'code'         => "TR-03-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Başmakçı",
            'slug'         => Str::slug("Başmakçı", '-'),
            'code'         => "TR-03-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Bayat",
            'slug'         => Str::slug("Bayat", '-'),
            'code'         => "TR-03-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Bolvadin",
            'slug'         => Str::slug("Bolvadin", '-'),
            'code'         => "TR-03-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Çay",
            'slug'         => Str::slug("Çay", '-'),
            'code'         => "TR-03-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Çobanlar",
            'slug'         => Str::slug("Çobanlar", '-'),
            'code'         => "TR-03-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Dazkırı",
            'slug'         => Str::slug("Dazkırı", '-'),
            'code'         => "TR-03-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Dinar",
            'slug'         => Str::slug("Dinar", '-'),
            'code'         => "TR-03-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Emirdağ",
            'slug'         => Str::slug("Emirdağ", '-'),
            'code'         => "TR-03-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Evciler",
            'slug'         => Str::slug("Evciler", '-'),
            'code'         => "TR-03-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Hocalar",
            'slug'         => Str::slug("Hocalar", '-'),
            'code'         => "TR-03-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "İhsaniye",
            'slug'         => Str::slug("İhsaniye", '-'),
            'code'         => "TR-03-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "İscehisar",
            'slug'         => Str::slug("İscehisar", '-'),
            'code'         => "TR-03-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Kızılören",
            'slug'         => Str::slug("Kızılören", '-'),
            'code'         => "TR-03-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-03-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Sandıklı",
            'slug'         => Str::slug("Sandıklı", '-'),
            'code'         => "TR-03-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Sinanpaşa",
            'slug'         => Str::slug("Sinanpaşa", '-'),
            'code'         => "TR-03-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Sultandağı",
            'slug'         => Str::slug("Sultandağı", '-'),
            'code'         => "TR-03-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 3,
            'city_code' => "TR-03",
            'title'        => "Şuhut",
            'slug'         => Str::slug("Şuhut", '-'),
            'code'         => "TR-03-19",
            'status'       => 'ACTIVE',
        ]);

        // Ağrı
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Diyadin",
            'slug'         => Str::slug("Diyadin", '-'),
            'code'         => "TR-04-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Doğubayazıt",
            'slug'         => Str::slug("Doğubayazıt", '-'),
            'code'         => "TR-04-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Eleşkirt",
            'slug'         => Str::slug("Eleşkirt", '-'),
            'code'         => "TR-04-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Hamur",
            'slug'         => Str::slug("Hamur", '-'),
            'code'         => "TR-04-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-04-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Patnos",
            'slug'         => Str::slug("Patnos", '-'),
            'code'         => "TR-04-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Taşlıçay",
            'slug'         => Str::slug("Taşlıçay", '-'),
            'code'         => "TR-04-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 4,
            'city_code' => "TR-04",
            'title'        => "Tutak",
            'slug'         => Str::slug("Tutak", '-'),
            'code'         => "TR-04-08",
            'status'       => 'ACTIVE',
        ]);

        // Aksaray
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Ağaçören",
            'slug'         => Str::slug("Ağaçören", '-'),
            'code'         => "TR-68-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Eskil",
            'slug'         => Str::slug("Eskil", '-'),
            'code'         => "TR-68-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Gülağaç",
            'slug'         => Str::slug("Gülağaç", '-'),
            'code'         => "TR-68-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Güzelyurt",
            'slug'         => Str::slug("Güzelyurt", '-'),
            'code'         => "TR-68-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-68-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Ortaköy",
            'slug'         => Str::slug("Ortaköy", '-'),
            'code'         => "TR-68-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Sarıyahşi",
            'slug'         => Str::slug("Sarıyahşi", '-'),
            'code'         => "TR-68-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 5,
            'city_code' => "TR-68",
            'title'        => "Sultanhanı",
            'slug'         => Str::slug("Sultanhanı", '-'),
            'code'         => "TR-68-08",
            'status'       => 'ACTIVE',
        ]);

        // Amasya
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Göynücek",
            'slug'         => Str::slug("Göynücek", '-'),
            'code'         => "TR-05-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Gümüşhacıköy",
            'slug'         => Str::slug("Gümüşhacıköy", '-'),
            'code'         => "TR-05-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Hamamözü",
            'slug'         => Str::slug("Hamamözü", '-'),
            'code'         => "TR-05-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-05-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Merzifon",
            'slug'         => Str::slug("Merzifon", '-'),
            'code'         => "TR-05-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Suluova",
            'slug'         => Str::slug("Suluova", '-'),
            'code'         => "TR-05-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 6,
            'city_code' => "TR-05",
            'title'        => "Taşova",
            'slug'         => Str::slug("Taşova", '-'),
            'code'         => "TR-05-07",
            'status'       => 'ACTIVE',
        ]);

        // Ankara
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Akyurt",
            'slug'         => Str::slug("Akyurt", '-'),
            'code'         => "TR-06-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Altındağ",
            'slug'         => Str::slug("Altındağ", '-'),
            'code'         => "TR-06-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Ayaş",
            'slug'         => Str::slug("Ayaş", '-'),
            'code'         => "TR-06-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Bala",
            'slug'         => Str::slug("Bala", '-'),
            'code'         => "TR-06-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Beypazarı",
            'slug'         => Str::slug("Beypazarı", '-'),
            'code'         => "TR-06-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Çamlıdere",
            'slug'         => Str::slug("Çamlıdere", '-'),
            'code'         => "TR-06-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Çankaya",
            'slug'         => Str::slug("Çankaya", '-'),
            'code'         => "TR-06-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Çubuk",
            'slug'         => Str::slug("Çubuk", '-'),
            'code'         => "TR-06-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Elmadağ",
            'slug'         => Str::slug("Elmadağ", '-'),
            'code'         => "TR-06-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Etimesgut",
            'slug'         => Str::slug("Etimesgut", '-'),
            'code'         => "TR-06-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Evren",
            'slug'         => Str::slug("Evren", '-'),
            'code'         => "TR-06-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Gölbaşı",
            'slug'         => Str::slug("Gölbaşı", '-'),
            'code'         => "TR-06-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Güdül",
            'slug'         => Str::slug("Güdül", '-'),
            'code'         => "TR-06-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Haymana",
            'slug'         => Str::slug("Haymana", '-'),
            'code'         => "TR-06-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Kahramankazan",
            'slug'         => Str::slug("Kahramankazan", '-'),
            'code'         => "TR-06-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Kalecik",
            'slug'         => Str::slug("Kalecik", '-'),
            'code'         => "TR-06-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Keçiören",
            'slug'         => Str::slug("Keçiören", '-'),
            'code'         => "TR-06-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Kızılcahamam",
            'slug'         => Str::slug("Kızılcahamam", '-'),
            'code'         => "TR-06-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Mamak",
            'slug'         => Str::slug("Mamak", '-'),
            'code'         => "TR-06-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Nallıhan",
            'slug'         => Str::slug("Nallıhan", '-'),
            'code'         => "TR-06-20",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Polatlı",
            'slug'         => Str::slug("Polatlı", '-'),
            'code'         => "TR-06-21",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Pursaklar",
            'slug'         => Str::slug("Pursaklar", '-'),
            'code'         => "TR-06-22",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Sincan",
            'slug'         => Str::slug("Sincan", '-'),
            'code'         => "TR-06-23",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Şereflikoçhisar",
            'slug'         => Str::slug("Şereflikoçhisar", '-'),
            'code'         => "TR-06-24",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 7,
            'city_code' => "TR-06",
            'title'        => "Yenimahalle",
            'slug'         => Str::slug("Yenimahalle", '-'),
            'code'         => "TR-06-25",
            'status'       => 'ACTIVE',
        ]);

        // Antalya
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Akseki",
            'slug'         => Str::slug("Akseki", '-'),
            'code'         => "TR-07-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Aksu",
            'slug'         => Str::slug("Aksu", '-'),
            'code'         => "TR-07-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Alanya",
            'slug'         => Str::slug("Alanya", '-'),
            'code'         => "TR-07-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Demre",
            'slug'         => Str::slug("Demre", '-'),
            'code'         => "TR-07-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Döşemealtı",
            'slug'         => Str::slug("Döşemealtı", '-'),
            'code'         => "TR-07-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Elmalı",
            'slug'         => Str::slug("Elmalı", '-'),
            'code'         => "TR-07-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Finike",
            'slug'         => Str::slug("Finike", '-'),
            'code'         => "TR-07-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Gazipaşa",
            'slug'         => Str::slug("Gazipaşa", '-'),
            'code'         => "TR-07-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Gündoğmuş",
            'slug'         => Str::slug("Gündoğmuş", '-'),
            'code'         => "TR-07-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "İbradı",
            'slug'         => Str::slug("İbradı", '-'),
            'code'         => "TR-07-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Kaş",
            'slug'         => Str::slug("Kaş", '-'),
            'code'         => "TR-07-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Kemer",
            'slug'         => Str::slug("Kemer", '-'),
            'code'         => "TR-07-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Kepez",
            'slug'         => Str::slug("Kepez", '-'),
            'code'         => "TR-07-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Konyaaltı",
            'slug'         => Str::slug("Konyaaltı", '-'),
            'code'         => "TR-07-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Korkuteli",
            'slug'         => Str::slug("Korkuteli", '-'),
            'code'         => "TR-07-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Kumluca",
            'slug'         => Str::slug("Kumluca", '-'),
            'code'         => "TR-07-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Manavgat",
            'slug'         => Str::slug("Manavgat", '-'),
            'code'         => "TR-07-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Muratpaşa",
            'slug'         => Str::slug("Muratpaşa", '-'),
            'code'         => "TR-07-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 8,
            'city_code' => "TR-07",
            'title'        => "Serik",
            'slug'         => Str::slug("Serik", '-'),
            'code'         => "TR-07-19",
            'status'       => 'ACTIVE',
        ]);

        // Ardahan
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Çıldır",
            'slug'         => Str::slug("Çıldır", '-'),
            'code'         => "TR-75-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Damal",
            'slug'         => Str::slug("Damal", '-'),
            'code'         => "TR-75-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Göle",
            'slug'         => Str::slug("Göle", '-'),
            'code'         => "TR-75-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Hanak",
            'slug'         => Str::slug("Hanak", '-'),
            'code'         => "TR-75-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-75-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 9,
            'city_code' => "TR-75",
            'title'        => "Posof",
            'slug'         => Str::slug("Posof", '-'),
            'code'         => "TR-75-06",
            'status'       => 'ACTIVE',
        ]);

        // Artvin
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Ardanuç",
            'slug'         => Str::slug("Ardanuç", '-'),
            'code'         => "TR-08-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Arhavi",
            'slug'         => Str::slug("Arhavi", '-'),
            'code'         => "TR-08-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Borçka",
            'slug'         => Str::slug("Borçka", '-'),
            'code'         => "TR-08-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Hopa",
            'slug'         => Str::slug("Hopa", '-'),
            'code'         => "TR-08-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Kemalpaşa",
            'slug'         => Str::slug("Kemalpaşa", '-'),
            'code'         => "TR-08-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-08-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Murgul",
            'slug'         => Str::slug("Murgul", '-'),
            'code'         => "TR-08-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Şavşat",
            'slug'         => Str::slug("Şavşat", '-'),
            'code'         => "TR-08-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 10,
            'city_code' => "TR-08",
            'title'        => "Yusufeli",
            'slug'         => Str::slug("Yusufeli", '-'),
            'code'         => "TR-08-09",
            'status'       => 'ACTIVE',
        ]);

        // Aydın
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Bozdoğan",
            'slug'         => Str::slug("Bozdoğan", '-'),
            'code'         => "TR-09-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Buharkent",
            'slug'         => Str::slug("Buharkent", '-'),
            'code'         => "TR-09-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Çine",
            'slug'         => Str::slug("Çine", '-'),
            'code'         => "TR-09-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Didim",
            'slug'         => Str::slug("Didim", '-'),
            'code'         => "TR-09-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Efeler",
            'slug'         => Str::slug("Efeler", '-'),
            'code'         => "TR-09-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Germencik",
            'slug'         => Str::slug("Germencik", '-'),
            'code'         => "TR-09-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "İncirliova",
            'slug'         => Str::slug("İncirliova", '-'),
            'code'         => "TR-09-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Karacasu",
            'slug'         => Str::slug("Karacasu", '-'),
            'code'         => "TR-09-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Karpuzlu",
            'slug'         => Str::slug("Karpuzlu", '-'),
            'code'         => "TR-09-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Koçarlı",
            'slug'         => Str::slug("Koçarlı", '-'),
            'code'         => "TR-09-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Köşk",
            'slug'         => Str::slug("Köşk", '-'),
            'code'         => "TR-09-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Kuşadası",
            'slug'         => Str::slug("Kuşadası", '-'),
            'code'         => "TR-09-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Kuyucak",
            'slug'         => Str::slug("Kuyucak", '-'),
            'code'         => "TR-09-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Nazilli",
            'slug'         => Str::slug("Nazilli", '-'),
            'code'         => "TR-09-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Söke",
            'slug'         => Str::slug("Söke", '-'),
            'code'         => "TR-09-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Sultanhisar",
            'slug'         => Str::slug("Sultanhisar", '-'),
            'code'         => "TR-09-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 11,
            'city_code' => "TR-09",
            'title'        => "Yenipazar",
            'slug'         => Str::slug("Yenipazar", '-'),
            'code'         => "TR-09-17",
            'status'       => 'ACTIVE',
        ]);

        // Balıkesir
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Altıeylül",
            'slug'         => Str::slug("Altıeylül", '-'),
            'code'         => "TR-10-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Ayvalık",
            'slug'         => Str::slug("Ayvalık", '-'),
            'code'         => "TR-10-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Balya",
            'slug'         => Str::slug("Balya", '-'),
            'code'         => "TR-10-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Bandırma",
            'slug'         => Str::slug("Bandırma", '-'),
            'code'         => "TR-10-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Bigadiç",
            'slug'         => Str::slug("Bigadiç", '-'),
            'code'         => "TR-10-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Burhaniye",
            'slug'         => Str::slug("Burhaniye", '-'),
            'code'         => "TR-10-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Dursunbey",
            'slug'         => Str::slug("Dursunbey", '-'),
            'code'         => "TR-10-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Edremit",
            'slug'         => Str::slug("Edremit", '-'),
            'code'         => "TR-10-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Erdek",
            'slug'         => Str::slug("Erdek", '-'),
            'code'         => "TR-10-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Gömeç",
            'slug'         => Str::slug("Gömeç", '-'),
            'code'         => "TR-10-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Gönen",
            'slug'         => Str::slug("Gönen", '-'),
            'code'         => "TR-10-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Havran",
            'slug'         => Str::slug("Havran", '-'),
            'code'         => "TR-10-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "İvrindi",
            'slug'         => Str::slug("İvrindi", '-'),
            'code'         => "TR-10-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Karesi",
            'slug'         => Str::slug("Karesi", '-'),
            'code'         => "TR-10-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Kepsut",
            'slug'         => Str::slug("Kepsut", '-'),
            'code'         => "TR-10-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Manyas",
            'slug'         => Str::slug("Manyas", '-'),
            'code'         => "TR-10-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Marmara",
            'slug'         => Str::slug("Marmara", '-'),
            'code'         => "TR-10-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Savaştepe",
            'slug'         => Str::slug("Savaştepe", '-'),
            'code'         => "TR-10-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Sındırgı",
            'slug'         => Str::slug("Sındırgı", '-'),
            'code'         => "TR-10-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 12,
            'city_code' => "TR-10",
            'title'        => "Susurluk",
            'slug'         => Str::slug("Susurluk", '-'),
            'code'         => "TR-10-20",
            'status'       => 'ACTIVE',
        ]);

        // Bartın
        District::create([
            'city_id'   => 13,
            'city_code' => "TR-74",
            'title'        => "Amasra",
            'slug'         => Str::slug("Amasra", '-'),
            'code'         => "TR-74-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 13,
            'city_code' => "TR-74",
            'title'        => "Kurucaşile",
            'slug'         => Str::slug("Kurucaşile", '-'),
            'code'         => "TR-74-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 13,
            'city_code' => "TR-74",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-74-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 13,
            'city_code' => "TR-74",
            'title'        => "Ulus",
            'slug'         => Str::slug("Ulus", '-'),
            'code'         => "TR-74-04",
            'status'       => 'ACTIVE',
        ]);

        // Batman
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Beşiri",
            'slug'         => Str::slug("Beşiri", '-'),
            'code'         => "TR-72-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Gercüş",
            'slug'         => Str::slug("Gercüş", '-'),
            'code'         => "TR-72-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Hasankeyf",
            'slug'         => Str::slug("Hasankeyf", '-'),
            'code'         => "TR-72-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Kozluk",
            'slug'         => Str::slug("Kozluk", '-'),
            'code'         => "TR-72-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-72-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 14,
            'city_code' => "TR-72",
            'title'        => "Sason",
            'slug'         => Str::slug("Sason", '-'),
            'code'         => "TR-72-06",
            'status'       => 'ACTIVE',
        ]);

        // Bayburt
        District::create([
            'city_id'   => 15,
            'city_code' => "TR-69",
            'title'        => "Aydıntepe",
            'slug'         => Str::slug("Aydıntepe", '-'),
            'code'         => "TR-69-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 15,
            'city_code' => "TR-69",
            'title'        => "Demirözü",
            'slug'         => Str::slug("Demirözü", '-'),
            'code'         => "TR-69-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 15,
            'city_code' => "TR-69",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-69-03",
            'status'       => 'ACTIVE',
        ]);

        // Bilecik
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Bozüyük",
            'slug'         => Str::slug("Bozüyük", '-'),
            'code'         => "TR-11-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Gölpazarı",
            'slug'         => Str::slug("Gölpazarı", '-'),
            'code'         => "TR-11-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "İnhisar",
            'slug'         => Str::slug("İnhisar", '-'),
            'code'         => "TR-11-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-11-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Osmaneli",
            'slug'         => Str::slug("Osmaneli", '-'),
            'code'         => "TR-11-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Pazaryeri",
            'slug'         => Str::slug("Pazaryeri", '-'),
            'code'         => "TR-11-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Söğüt",
            'slug'         => Str::slug("Söğüt", '-'),
            'code'         => "TR-11-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 16,
            'city_code' => "TR-11",
            'title'        => "Yenipazar",
            'slug'         => Str::slug("Yenipazar", '-'),
            'code'         => "TR-11-08",
            'status'       => 'ACTIVE',
        ]);

        // Bingöl
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Adaklı",
            'slug'         => Str::slug("Adaklı", '-'),
            'code'         => "TR-12-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Genç",
            'slug'         => Str::slug("Genç", '-'),
            'code'         => "TR-12-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Karlıova",
            'slug'         => Str::slug("Karlıova", '-'),
            'code'         => "TR-12-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Kiğı",
            'slug'         => Str::slug("Kiğı", '-'),
            'code'         => "TR-12-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-12-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Solhan",
            'slug'         => Str::slug("Solhan", '-'),
            'code'         => "TR-12-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Yayladere",
            'slug'         => Str::slug("Yayladere", '-'),
            'code'         => "TR-12-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 17,
            'city_code' => "TR-12",
            'title'        => "Yedisu",
            'slug'         => Str::slug("Yedisu", '-'),
            'code'         => "TR-12-08",
            'status'       => 'ACTIVE',
        ]);

        // Bitlis
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Adilcevaz",
            'slug'         => Str::slug("Adilcevaz", '-'),
            'code'         => "TR-13-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Ahlat",
            'slug'         => Str::slug("Ahlat", '-'),
            'code'         => "TR-13-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Güroymak",
            'slug'         => Str::slug("Güroymak", '-'),
            'code'         => "TR-13-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Hizan",
            'slug'         => Str::slug("Hizan", '-'),
            'code'         => "TR-13-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-13-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Mutki",
            'slug'         => Str::slug("Mutki", '-'),
            'code'         => "TR-13-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 18,
            'city_code' => "TR-13",
            'title'        => "Tatvan",
            'slug'         => Str::slug("Tatvan", '-'),
            'code'         => "TR-13-07",
            'status'       => 'ACTIVE',
        ]);

        // Bolu
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Dörtdivan",
            'slug'         => Str::slug("Dörtdivan", '-'),
            'code'         => "TR-14-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Gerede",
            'slug'         => Str::slug("Gerede", '-'),
            'code'         => "TR-14-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Göynük",
            'slug'         => Str::slug("Göynük", '-'),
            'code'         => "TR-14-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Kıbrıscık",
            'slug'         => Str::slug("Kıbrıscık", '-'),
            'code'         => "TR-14-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Mengen",
            'slug'         => Str::slug("Mengen", '-'),
            'code'         => "TR-14-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-14-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Mudurnu",
            'slug'         => Str::slug("Mudurnu", '-'),
            'code'         => "TR-14-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Seben",
            'slug'         => Str::slug("Seben", '-'),
            'code'         => "TR-14-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 19,
            'city_code' => "TR-14",
            'title'        => "Yeniçağa",
            'slug'         => Str::slug("Yeniçağa", '-'),
            'code'         => "TR-14-09",
            'status'       => 'ACTIVE',
        ]);

        // Burdur
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Ağlasun",
            'slug'         => Str::slug("Ağlasun", '-'),
            'code'         => "TR-15-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Bucak",
            'slug'         => Str::slug("Bucak", '-'),
            'code'         => "TR-15-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Çavdır",
            'slug'         => Str::slug("Çavdır", '-'),
            'code'         => "TR-15-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Çeltikçi",
            'slug'         => Str::slug("Çeltikçi", '-'),
            'code'         => "TR-15-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Gölhisar",
            'slug'         => Str::slug("Gölhisar", '-'),
            'code'         => "TR-15-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Karamanlı",
            'slug'         => Str::slug("Karamanlı", '-'),
            'code'         => "TR-15-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Kemer",
            'slug'         => Str::slug("Kemer", '-'),
            'code'         => "TR-15-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-15-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Tefenni",
            'slug'         => Str::slug("Tefenni", '-'),
            'code'         => "TR-15-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 20,
            'city_code' => "TR-15",
            'title'        => "Yeşilova",
            'slug'         => Str::slug("Yeşilova", '-'),
            'code'         => "TR-15-10",
            'status'       => 'ACTIVE',
        ]);

        // Busa
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Büyükorhan",
            'slug'         => Str::slug("Büyükorhan", '-'),
            'code'         => "TR-16-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Gemlik",
            'slug'         => Str::slug("Gemlik", '-'),
            'code'         => "TR-16-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Gürsu",
            'slug'         => Str::slug("Gürsu", '-'),
            'code'         => "TR-16-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Harmancık",
            'slug'         => Str::slug("Harmancık", '-'),
            'code'         => "TR-16-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "İnegöl",
            'slug'         => Str::slug("İnegöl", '-'),
            'code'         => "TR-16-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "İznik",
            'slug'         => Str::slug("İznik", '-'),
            'code'         => "TR-16-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Karacabey",
            'slug'         => Str::slug("Karacabey", '-'),
            'code'         => "TR-16-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Keles",
            'slug'         => Str::slug("Keles", '-'),
            'code'         => "TR-16-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Kestel",
            'slug'         => Str::slug("Kestel", '-'),
            'code'         => "TR-16-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Mudanya",
            'slug'         => Str::slug("Mudanya", '-'),
            'code'         => "TR-16-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Mustafakemalpaşa",
            'slug'         => Str::slug("Mustafakemalpaşa", '-'),
            'code'         => "TR-16-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Nilüfer",
            'slug'         => Str::slug("Nilüfer", '-'),
            'code'         => "TR-16-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Orhaneli",
            'slug'         => Str::slug("Orhaneli", '-'),
            'code'         => "TR-16-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Orhangazi",
            'slug'         => Str::slug("Orhangazi", '-'),
            'code'         => "TR-16-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Osmangazi",
            'slug'         => Str::slug("Osmangazi", '-'),
            'code'         => "TR-16-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Yenişehir",
            'slug'         => Str::slug("Yenişehir", '-'),
            'code'         => "TR-16-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 21,
            'city_code' => "TR-16",
            'title'        => "Yıldırım",
            'slug'         => Str::slug("Yıldırım", '-'),
            'code'         => "TR-16-17",
            'status'       => 'ACTIVE',
        ]);

        // Çanakkale
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Ayvacık",
            'slug'         => Str::slug("Ayvacık", '-'),
            'code'         => "TR-17-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Bayramiç",
            'slug'         => Str::slug("Bayramiç", '-'),
            'code'         => "TR-17-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Biga",
            'slug'         => Str::slug("Biga", '-'),
            'code'         => "TR-17-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Bozcaada",
            'slug'         => Str::slug("Bozcaada", '-'),
            'code'         => "TR-17-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Çan",
            'slug'         => Str::slug("Çan", '-'),
            'code'         => "TR-17-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Eceabat",
            'slug'         => Str::slug("Eceabat", '-'),
            'code'         => "TR-17-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Ezine",
            'slug'         => Str::slug("Ezine", '-'),
            'code'         => "TR-17-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Gelibolu",
            'slug'         => Str::slug("Gelibolu", '-'),
            'code'         => "TR-17-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Gökçeada",
            'slug'         => Str::slug("Gökçeada", '-'),
            'code'         => "TR-17-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Lapseki",
            'slug'         => Str::slug("Lapseki", '-'),
            'code'         => "TR-17-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-17-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 22,
            'city_code' => "TR-17",
            'title'        => "Yenice",
            'slug'         => Str::slug("Yenice", '-'),
            'code'         => "TR-17-12",
            'status'       => 'ACTIVE',
        ]);

        // Çankırı
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Atkaracalar",
            'slug'         => Str::slug("Atkaracalar", '-'),
            'code'         => "TR-18-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Bayramören",
            'slug'         => Str::slug("Bayramören", '-'),
            'code'         => "TR-18-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Çerkeş",
            'slug'         => Str::slug("Çerkeş", '-'),
            'code'         => "TR-18-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Eldivan",
            'slug'         => Str::slug("Eldivan", '-'),
            'code'         => "TR-18-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Ilgaz",
            'slug'         => Str::slug("Ilgaz", '-'),
            'code'         => "TR-18-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Kızılırmak",
            'slug'         => Str::slug("Kızılırmak", '-'),
            'code'         => "TR-18-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Korgun",
            'slug'         => Str::slug("Korgun", '-'),
            'code'         => "TR-18-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Kurşunlu",
            'slug'         => Str::slug("Kurşunlu", '-'),
            'code'         => "TR-18-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-18-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Orta",
            'slug'         => Str::slug("Orta", '-'),
            'code'         => "TR-18-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Şabanözü",
            'slug'         => Str::slug("Şabanözü", '-'),
            'code'         => "TR-18-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 23,
            'city_code' => "TR-18",
            'title'        => "Yapraklı",
            'slug'         => Str::slug("Yapraklı", '-'),
            'code'         => "TR-18-12",
            'status'       => 'ACTIVE',
        ]);

        // Çorum
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Alaca",
            'slug'         => Str::slug("Alaca", '-'),
            'code'         => "TR-19-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Bayat",
            'slug'         => Str::slug("Bayat", '-'),
            'code'         => "TR-19-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Boğazkale",
            'slug'         => Str::slug("Boğazkale", '-'),
            'code'         => "TR-19-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Dodurga",
            'slug'         => Str::slug("Dodurga", '-'),
            'code'         => "TR-19-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "İskilip",
            'slug'         => Str::slug("İskilip", '-'),
            'code'         => "TR-19-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Kargı",
            'slug'         => Str::slug("Kargı", '-'),
            'code'         => "TR-19-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Laçin",
            'slug'         => Str::slug("Laçin", '-'),
            'code'         => "TR-19-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Mecitözü",
            'slug'         => Str::slug("Mecitözü", '-'),
            'code'         => "TR-19-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-19-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Oğuzlar",
            'slug'         => Str::slug("Oğuzlar", '-'),
            'code'         => "TR-19-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Ortaköy",
            'slug'         => Str::slug("Ortaköy", '-'),
            'code'         => "TR-19-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Osmancık",
            'slug'         => Str::slug("Osmancık", '-'),
            'code'         => "TR-19-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Sungurlu",
            'slug'         => Str::slug("Sungurlu", '-'),
            'code'         => "TR-19-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 24,
            'city_code' => "TR-19",
            'title'        => "Uğurludağ",
            'slug'         => Str::slug("Sungurlu", '-'),
            'code'         => "TR-19-14",
            'status'       => 'ACTIVE',
        ]);

        // Denizli
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Acıpayam",
            'slug'         => Str::slug("Acıpayam", '-'),
            'code'         => "TR-20-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Babadağ",
            'slug'         => Str::slug("Babadağ", '-'),
            'code'         => "TR-20-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Baklan",
            'slug'         => Str::slug("Baklan", '-'),
            'code'         => "TR-20-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Bekilli",
            'slug'         => Str::slug("Bekilli", '-'),
            'code'         => "TR-20-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Beyağaç",
            'slug'         => Str::slug("Beyağaç", '-'),
            'code'         => "TR-20-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Bozkurt",
            'slug'         => Str::slug("Bozkurt", '-'),
            'code'         => "TR-20-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Buldan",
            'slug'         => Str::slug("Buldan", '-'),
            'code'         => "TR-20-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Çal",
            'slug'         => Str::slug("Çal", '-'),
            'code'         => "TR-20-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Çameli",
            'slug'         => Str::slug("Çameli", '-'),
            'code'         => "TR-20-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Çardak",
            'slug'         => Str::slug("Çardak", '-'),
            'code'         => "TR-20-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Çivril",
            'slug'         => Str::slug("Çivril", '-'),
            'code'         => "TR-20-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Güney",
            'slug'         => Str::slug("Güney", '-'),
            'code'         => "TR-20-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Honaz",
            'slug'         => Str::slug("Honaz", '-'),
            'code'         => "TR-20-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Kale",
            'slug'         => Str::slug("Kale", '-'),
            'code'         => "TR-20-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Merkezefendi",
            'slug'         => Str::slug("Merkezefendi", '-'),
            'code'         => "TR-20-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Pamukkale",
            'slug'         => Str::slug("Pamukkale", '-'),
            'code'         => "TR-20-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Sarayköy",
            'slug'         => Str::slug("Sarayköy", '-'),
            'code'         => "TR-20-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Serinhisar",
            'slug'         => Str::slug("Serinhisar", '-'),
            'code'         => "TR-20-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 25,
            'city_code' => "TR-20",
            'title'        => "Tavas",
            'slug'         => Str::slug("Tavas", '-'),
            'code'         => "TR-20-19",
            'status'       => 'ACTIVE',
        ]);

        // Diyarbakır
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Bağlar",
            'slug'         => Str::slug("Bağlar", '-'),
            'code'         => "TR-21-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Bismil",
            'slug'         => Str::slug("Bismil", '-'),
            'code'         => "TR-21-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Çermik",
            'slug'         => Str::slug("Çermik", '-'),
            'code'         => "TR-21-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Çınar",
            'slug'         => Str::slug("Çınar", '-'),
            'code'         => "TR-21-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Çüngüş",
            'slug'         => Str::slug("Çüngüş", '-'),
            'code'         => "TR-21-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Dicle",
            'slug'         => Str::slug("Dicle", '-'),
            'code'         => "TR-21-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Eğil",
            'slug'         => Str::slug("Eğil", '-'),
            'code'         => "TR-21-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Ergani",
            'slug'         => Str::slug("Ergani", '-'),
            'code'         => "TR-21-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Hani",
            'slug'         => Str::slug("Hani", '-'),
            'code'         => "TR-21-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Hazro",
            'slug'         => Str::slug("Hazro", '-'),
            'code'         => "TR-21-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Kayapınar",
            'slug'         => Str::slug("Kayapınar", '-'),
            'code'         => "TR-21-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Kocaköy",
            'slug'         => Str::slug("Kocaköy", '-'),
            'code'         => "TR-21-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Kulp",
            'slug'         => Str::slug("Kulp", '-'),
            'code'         => "TR-21-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Lice",
            'slug'         => Str::slug("Lice", '-'),
            'code'         => "TR-21-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Silvan",
            'slug'         => Str::slug("Silvan", '-'),
            'code'         => "TR-21-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Sur",
            'slug'         => Str::slug("Sur", '-'),
            'code'         => "TR-21-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 26,
            'city_code' => "TR-21",
            'title'        => "Yenişehir",
            'slug'         => Str::slug("Yenişehir", '-'),
            'code'         => "TR-21-17",
            'status'       => 'ACTIVE',
        ]);

        // Düzce
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Akçakoca",
            'slug'         => Str::slug("Akçakoca", '-'),
            'code'         => "TR-81-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Cumayeri",
            'slug'         => Str::slug("Cumayeri", '-'),
            'code'         => "TR-81-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Çilimli",
            'slug'         => Str::slug("Çilimli", '-'),
            'code'         => "TR-81-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Gölyaka",
            'slug'         => Str::slug("Gölyaka", '-'),
            'code'         => "TR-81-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Gümüşova",
            'slug'         => Str::slug("Gümüşova", '-'),
            'code'         => "TR-81-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Kaynaşlı",
            'slug'         => Str::slug("Kaynaşlı", '-'),
            'code'         => "TR-81-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-81-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 27,
            'city_code' => "TR-81",
            'title'        => "Yığılca",
            'slug'         => Str::slug("Yığılca", '-'),
            'code'         => "TR-81-08",
            'status'       => 'ACTIVE',
        ]);

        // Edirne
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Enez",
            'slug'         => Str::slug("Enez", '-'),
            'code'         => "TR-22-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Havsa",
            'slug'         => Str::slug("Havsa", '-'),
            'code'         => "TR-22-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "İpsala",
            'slug'         => Str::slug("İpsala", '-'),
            'code'         => "TR-22-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Keşan",
            'slug'         => Str::slug("Keşan", '-'),
            'code'         => "TR-22-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Lalapaşa",
            'slug'         => Str::slug("Lalapaşa", '-'),
            'code'         => "TR-22-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Meriç",
            'slug'         => Str::slug("Meriç", '-'),
            'code'         => "TR-22-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-22-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Süloğlu",
            'slug'         => Str::slug("Süloğlu", '-'),
            'code'         => "TR-22-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 28,
            'city_code' => "TR-22",
            'title'        => "Uzunköprü",
            'slug'         => Str::slug("Uzunköprü", '-'),
            'code'         => "TR-22-09",
            'status'       => 'ACTIVE',
        ]);

        // Elazığ
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Ağın",
            'slug'         => Str::slug("Ağın", '-'),
            'code'         => "TR-23-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Alacakaya",
            'slug'         => Str::slug("Alacakaya", '-'),
            'code'         => "TR-23-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Arıcak",
            'slug'         => Str::slug("Arıcak", '-'),
            'code'         => "TR-23-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Baskil",
            'slug'         => Str::slug("Baskil", '-'),
            'code'         => "TR-23-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Karakoçan",
            'slug'         => Str::slug("Karakoçan", '-'),
            'code'         => "TR-23-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Keban",
            'slug'         => Str::slug("Keban", '-'),
            'code'         => "TR-23-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Kovancılar",
            'slug'         => Str::slug("Kovancılar", '-'),
            'code'         => "TR-23-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Maden",
            'slug'         => Str::slug("Maden", '-'),
            'code'         => "TR-23-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-23-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Palu",
            'slug'         => Str::slug("Palu", '-'),
            'code'         => "TR-23-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 29,
            'city_code' => "TR-23",
            'title'        => "Sivrice",
            'slug'         => Str::slug("Sivrice", '-'),
            'code'         => "TR-23-11",
            'status'       => 'ACTIVE',
        ]);

        // Erzincan
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Çayırlı",
            'slug'         => Str::slug("Çayırlı", '-'),
            'code'         => "TR-24-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "İliç",
            'slug'         => Str::slug("İliç", '-'),
            'code'         => "TR-24-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Kemah",
            'slug'         => Str::slug("Kemah", '-'),
            'code'         => "TR-24-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Kemaliye",
            'slug'         => Str::slug("Kemaliye", '-'),
            'code'         => "TR-24-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-24-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Otlukbeli",
            'slug'         => Str::slug("Otlukbeli", '-'),
            'code'         => "TR-24-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Refahiye",
            'slug'         => Str::slug("Refahiye", '-'),
            'code'         => "TR-24-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Tercan",
            'slug'         => Str::slug("Tercan", '-'),
            'code'         => "TR-24-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 30,
            'city_code' => "TR-24",
            'title'        => "Üzümlü",
            'slug'         => Str::slug("Üzümlü", '-'),
            'code'         => "TR-24-09",
            'status'       => 'ACTIVE',
        ]);

        // Erzurum
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Aşkale",
            'slug'         => Str::slug("Aşkale", '-'),
            'code'         => "TR-25-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Aziziye",
            'slug'         => Str::slug("Aziziye", '-'),
            'code'         => "TR-25-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Çat",
            'slug'         => Str::slug("Çat", '-'),
            'code'         => "TR-25-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Hınıs",
            'slug'         => Str::slug("Hınıs", '-'),
            'code'         => "TR-25-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Horasan",
            'slug'         => Str::slug("Horasan", '-'),
            'code'         => "TR-25-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "İspir",
            'slug'         => Str::slug("İspir", '-'),
            'code'         => "TR-25-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Karaçoban",
            'slug'         => Str::slug("Karaçoban", '-'),
            'code'         => "TR-25-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Karayazı",
            'slug'         => Str::slug("Karayazı", '-'),
            'code'         => "TR-25-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Köprüköy",
            'slug'         => Str::slug("Köprüköy", '-'),
            'code'         => "TR-25-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Narman",
            'slug'         => Str::slug("Narman", '-'),
            'code'         => "TR-25-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Oltu",
            'slug'         => Str::slug("Oltu", '-'),
            'code'         => "TR-25-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Olur",
            'slug'         => Str::slug("Olur", '-'),
            'code'         => "TR-25-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Palandöken",
            'slug'         => Str::slug("Palandöken", '-'),
            'code'         => "TR-25-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Pasinler",
            'slug'         => Str::slug("Pasinler", '-'),
            'code'         => "TR-25-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Pazaryolu",
            'slug'         => Str::slug("Pazaryolu", '-'),
            'code'         => "TR-25-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Şenkaya",
            'slug'         => Str::slug("Şenkaya", '-'),
            'code'         => "TR-25-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Tekman",
            'slug'         => Str::slug("Tekman", '-'),
            'code'         => "TR-25-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Tortum",
            'slug'         => Str::slug("Tortum", '-'),
            'code'         => "TR-25-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Uzundere",
            'slug'         => Str::slug("Uzundere", '-'),
            'code'         => "TR-25-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 31,
            'city_code' => "TR-25",
            'title'        => "Yakutiye",
            'slug'         => Str::slug("Yakutiye", '-'),
            'code'         => "TR-25-20",
            'status'       => 'ACTIVE',
        ]);

        // Eskişehir
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Alpu",
            'slug'         => Str::slug("Alpu", '-'),
            'code'         => "TR-26-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Beylikova",
            'slug'         => Str::slug("Beylikova", '-'),
            'code'         => "TR-26-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Çifteler",
            'slug'         => Str::slug("Çifteler", '-'),
            'code'         => "TR-26-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Günyüzü",
            'slug'         => Str::slug("Günyüzü", '-'),
            'code'         => "TR-26-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Han",
            'slug'         => Str::slug("Han", '-'),
            'code'         => "TR-26-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "İnönü",
            'slug'         => Str::slug("İnönü", '-'),
            'code'         => "TR-26-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Mahmudiye",
            'slug'         => Str::slug("Mahmudiye", '-'),
            'code'         => "TR-26-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Mihalgazi",
            'slug'         => Str::slug("Mihalgazi", '-'),
            'code'         => "TR-26-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Mihalıççık",
            'slug'         => Str::slug("Mihalıççık", '-'),
            'code'         => "TR-26-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Odunpazarı",
            'slug'         => Str::slug("Odunpazarı", '-'),
            'code'         => "TR-26-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Sarıcakaya",
            'slug'         => Str::slug("Sarıcakaya", '-'),
            'code'         => "TR-26-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Seyitgazi",
            'slug'         => Str::slug("Seyitgazi", '-'),
            'code'         => "TR-26-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Sivrihisar",
            'slug'         => Str::slug("Sivrihisar", '-'),
            'code'         => "TR-26-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 32,
            'city_code' => "TR-26",
            'title'        => "Tepebaşı",
            'slug'         => Str::slug("Tepebaşı", '-'),
            'code'         => "TR-26-14",
            'status'       => 'ACTIVE',
        ]);

        // Gaziantep
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Araban",
            'slug'         => Str::slug("Araban", '-'),
            'code'         => "TR-27-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "İslahiye",
            'slug'         => Str::slug("İslahiye", '-'),
            'code'         => "TR-27-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Karkamış",
            'slug'         => Str::slug("Karkamış", '-'),
            'code'         => "TR-27-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Nizip",
            'slug'         => Str::slug("Nizip", '-'),
            'code'         => "TR-27-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Nurdağı",
            'slug'         => Str::slug("Nurdağı", '-'),
            'code'         => "TR-27-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Oğuzeli",
            'slug'         => Str::slug("Oğuzeli", '-'),
            'code'         => "TR-27-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Şahinbey",
            'slug'         => Str::slug("Şahinbey", '-'),
            'code'         => "TR-27-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Şehitkamil",
            'slug'         => Str::slug("Şehitkamil", '-'),
            'code'         => "TR-27-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 33,
            'city_code' => "TR-27",
            'title'        => "Yavuzeli",
            'slug'         => Str::slug("Yavuzeli", '-'),
            'code'         => "TR-27-09",
            'status'       => 'ACTIVE',
        ]);

        // Giresun
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Alucra",
            'slug'         => Str::slug("Alucra", '-'),
            'code'         => "TR-28-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Bulancak",
            'slug'         => Str::slug("Bulancak", '-'),
            'code'         => "TR-28-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Çamoluk",
            'slug'         => Str::slug("Çamoluk", '-'),
            'code'         => "TR-28-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Çanakçı",
            'slug'         => Str::slug("Çanakçı", '-'),
            'code'         => "TR-28-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Dereli",
            'slug'         => Str::slug("Dereli", '-'),
            'code'         => "TR-28-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Doğankent",
            'slug'         => Str::slug("Doğankent", '-'),
            'code'         => "TR-28-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Espiye",
            'slug'         => Str::slug("Espiye", '-'),
            'code'         => "TR-28-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Eynesil",
            'slug'         => Str::slug("Eynesil", '-'),
            'code'         => "TR-28-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Görele",
            'slug'         => Str::slug("Görele", '-'),
            'code'         => "TR-28-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Güce",
            'slug'         => Str::slug("Güce", '-'),
            'code'         => "TR-28-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Keşap",
            'slug'         => Str::slug("Keşap", '-'),
            'code'         => "TR-28-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-28-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Piraziz",
            'slug'         => Str::slug("Piraziz", '-'),
            'code'         => "TR-28-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Şebinkarahisar",
            'slug'         => Str::slug("Şebinkarahisar", '-'),
            'code'         => "TR-28-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Tirebolu",
            'slug'         => Str::slug("Tirebolu", '-'),
            'code'         => "TR-28-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 34,
            'city_code' => "TR-28",
            'title'        => "Yağlıdere",
            'slug'         => Str::slug("Yağlıdere", '-'),
            'code'         => "TR-28-16",
            'status'       => 'ACTIVE',
        ]);

        // Gümüşhane
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Kelkit",
            'slug'         => Str::slug("Kelkit", '-'),
            'code'         => "TR-29-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Köse",
            'slug'         => Str::slug("Köse", '-'),
            'code'         => "TR-29-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Kürtün",
            'slug'         => Str::slug("Kürtün", '-'),
            'code'         => "TR-29-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-29-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Şiran",
            'slug'         => Str::slug("Şiran", '-'),
            'code'         => "TR-29-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 35,
            'city_code' => "TR-29",
            'title'        => "Torul",
            'slug'         => Str::slug("Torul", '-'),
            'code'         => "TR-29-06",
            'status'       => 'ACTIVE',
        ]);

        // Hakkari
        District::create([
            'city_id'   => 36,
            'city_code' => "TR-30",
            'title'        => "Çukurca",
            'slug'         => Str::slug("Çukurca", '-'),
            'code'         => "TR-30-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 36,
            'city_code' => "TR-30",
            'title'        => "Derecik",
            'slug'         => Str::slug("Derecik", '-'),
            'code'         => "TR-30-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 36,
            'city_code' => "TR-30",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-30-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 36,
            'city_code' => "TR-30",
            'title'        => "Şemdinli",
            'slug'         => Str::slug("Şemdinli", '-'),
            'code'         => "TR-30-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 36,
            'city_code' => "TR-30",
            'title'        => "Yüksekova",
            'slug'         => Str::slug("Yüksekova", '-'),
            'code'         => "TR-30-05",
            'status'       => 'ACTIVE',
        ]);

        // Hatay
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Altınözü",
            'slug'         => Str::slug("Altınözü", '-'),
            'code'         => "TR-31-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Antakya",
            'slug'         => Str::slug("Antakya", '-'),
            'code'         => "TR-31-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Arsuz",
            'slug'         => Str::slug("Arsuz", '-'),
            'code'         => "TR-31-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Belen",
            'slug'         => Str::slug("Belen", '-'),
            'code'         => "TR-31-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Defne",
            'slug'         => Str::slug("Defne", '-'),
            'code'         => "TR-31-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Dörtyol",
            'slug'         => Str::slug("Dörtyol", '-'),
            'code'         => "TR-31-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Erzin",
            'slug'         => Str::slug("Erzin", '-'),
            'code'         => "TR-31-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Hassa",
            'slug'         => Str::slug("Hassa", '-'),
            'code'         => "TR-31-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "İskenderun",
            'slug'         => Str::slug("İskenderun", '-'),
            'code'         => "TR-31-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Kırıkhan",
            'slug'         => Str::slug("Kırıkhan", '-'),
            'code'         => "TR-31-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Kumlu",
            'slug'         => Str::slug("Kumlu", '-'),
            'code'         => "TR-31-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Payas",
            'slug'         => Str::slug("Payas", '-'),
            'code'         => "TR-31-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Reyhanlı",
            'slug'         => Str::slug("Reyhanlı", '-'),
            'code'         => "TR-31-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Samandağ",
            'slug'         => Str::slug("Samandağ", '-'),
            'code'         => "TR-31-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 37,
            'city_code' => "TR-31",
            'title'        => "Yayladağı",
            'slug'         => Str::slug("Yayladağı", '-'),
            'code'         => "TR-31-15",
            'status'       => 'ACTIVE',
        ]);

        // Iğdır
        District::create([
            'city_id'   => 38,
            'city_code' => "TR-76",
            'title'        => "Aralık",
            'slug'         => Str::slug("Aralık", '-'),
            'code'         => "TR-76-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 38,
            'city_code' => "TR-76",
            'title'        => "Karakoyunlu",
            'slug'         => Str::slug("Karakoyunlu", '-'),
            'code'         => "TR-76-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 38,
            'city_code' => "TR-76",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-76-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 38,
            'city_code' => "TR-76",
            'title'        => "Tuzluca",
            'slug'         => Str::slug("Tuzluca", '-'),
            'code'         => "TR-76-04",
            'status'       => 'ACTIVE',
        ]);

        // Isparta
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Aksu",
            'slug'         => Str::slug("Aksu", '-'),
            'code'         => "TR-32-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Atabey",
            'slug'         => Str::slug("Atabey", '-'),
            'code'         => "TR-32-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Eğirdir",
            'slug'         => Str::slug("Eğirdir", '-'),
            'code'         => "TR-32-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Gelendost",
            'slug'         => Str::slug("Gelendost", '-'),
            'code'         => "TR-32-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Gönen",
            'slug'         => Str::slug("Gönen", '-'),
            'code'         => "TR-32-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Keçiborlu",
            'slug'         => Str::slug("Keçiborlu", '-'),
            'code'         => "TR-32-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-32-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Senirkent",
            'slug'         => Str::slug("Senirkent", '-'),
            'code'         => "TR-32-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Sütçüler",
            'slug'         => Str::slug("Sütçüler", '-'),
            'code'         => "TR-32-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Şarkikaraağaç",
            'slug'         => Str::slug("Şarkikaraağaç", '-'),
            'code'         => "TR-32-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Uluborlu",
            'slug'         => Str::slug("Uluborlu", '-'),
            'code'         => "TR-32-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Yalvaç",
            'slug'         => Str::slug("Yalvaç", '-'),
            'code'         => "TR-32-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 39,
            'city_code' => "TR-32",
            'title'        => "Yenişarbademli",
            'slug'         => Str::slug("Yenişarbademli", '-'),
            'code'         => "TR-32-13",
            'status'       => 'ACTIVE',
        ]);

        // İstanbul
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Adalar",
            'slug'         => Str::slug("Adalar", '-'),
            'code'         => "TR-34-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Arnavutköy",
            'slug'         => Str::slug("Arnavutköy", '-'),
            'code'         => "TR-34-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Ataşehir",
            'slug'         => Str::slug("Ataşehir", '-'),
            'code'         => "TR-34-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Avcılar",
            'slug'         => Str::slug("Avcılar", '-'),
            'code'         => "TR-34-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Bağcılar",
            'slug'         => Str::slug("Bağcılar", '-'),
            'code'         => "TR-34-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Bahçelievler",
            'slug'         => Str::slug("Bahçelievler", '-'),
            'code'         => "TR-34-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Bakırköy",
            'slug'         => Str::slug("Bakırköy", '-'),
            'code'         => "TR-34-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Başakşehir",
            'slug'         => Str::slug("Başakşehir", '-'),
            'code'         => "TR-34-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Bayrampaşa",
            'slug'         => Str::slug("Bayrampaşa", '-'),
            'code'         => "TR-34-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Beşiktaş",
            'slug'         => Str::slug("Beşiktaş", '-'),
            'code'         => "TR-34-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Beykoz",
            'slug'         => Str::slug("Beykoz", '-'),
            'code'         => "TR-34-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Beylikdüzü",
            'slug'         => Str::slug("Beylikdüzü", '-'),
            'code'         => "TR-34-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Beyoğlu",
            'slug'         => Str::slug("Beyoğlu", '-'),
            'code'         => "TR-34-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Büyükçekmece",
            'slug'         => Str::slug("Büyükçekmece", '-'),
            'code'         => "TR-34-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Çatalca",
            'slug'         => Str::slug("Çatalca", '-'),
            'code'         => "TR-34-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Çekmeköy",
            'slug'         => Str::slug("Çekmeköy", '-'),
            'code'         => "TR-34-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Esenler",
            'slug'         => Str::slug("Esenler", '-'),
            'code'         => "TR-34-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Esenyurt",
            'slug'         => Str::slug("Esenyurt", '-'),
            'code'         => "TR-34-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Eyüpsultan",
            'slug'         => Str::slug("Eyüpsultan", '-'),
            'code'         => "TR-34-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Fatih",
            'slug'         => Str::slug("Fatih", '-'),
            'code'         => "TR-34-20",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Gaziosmanpaşa",
            'slug'         => Str::slug("Gaziosmanpaşa", '-'),
            'code'         => "TR-34-21",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Güngören",
            'slug'         => Str::slug("Güngören", '-'),
            'code'         => "TR-34-22",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Kadıköy",
            'slug'         => Str::slug("Kadıköy", '-'),
            'code'         => "TR-34-23",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Kağıthane",
            'slug'         => Str::slug("Kağıthane", '-'),
            'code'         => "TR-34-24",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Kartal",
            'slug'         => Str::slug("Kartal", '-'),
            'code'         => "TR-34-25",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Küçükçekmece",
            'slug'         => Str::slug("Küçükçekmece", '-'),
            'code'         => "TR-34-26",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Maltepe",
            'slug'         => Str::slug("Maltepe", '-'),
            'code'         => "TR-34-27",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Pendik",
            'slug'         => Str::slug("Pendik", '-'),
            'code'         => "TR-34-28",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Sancaktepe",
            'slug'         => Str::slug("Sancaktepe", '-'),
            'code'         => "TR-34-29",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Sarıyer",
            'slug'         => Str::slug("Sarıyer", '-'),
            'code'         => "TR-34-30",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Silivri",
            'slug'         => Str::slug("Silivri", '-'),
            'code'         => "TR-34-31",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Sultanbeyli",
            'slug'         => Str::slug("Sultanbeyli", '-'),
            'code'         => "TR-34-32",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Sultangazi",
            'slug'         => Str::slug("Sultangazi", '-'),
            'code'         => "TR-34-33",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Şile",
            'slug'         => Str::slug("Şile", '-'),
            'code'         => "TR-34-34",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Şişli",
            'slug'         => Str::slug("Şişli", '-'),
            'code'         => "TR-34-35",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Tuzla",
            'slug'         => Str::slug("Tuzla", '-'),
            'code'         => "TR-34-36",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Ümraniye",
            'slug'         => Str::slug("Ümraniye", '-'),
            'code'         => "TR-34-37",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Üsküdar",
            'slug'         => Str::slug("Üsküdar", '-'),
            'code'         => "TR-34-38",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 40,
            'city_code' => "TR-34",
            'title'        => "Zeytinburnu",
            'slug'         => Str::slug("Zeytinburnu", '-'),
            'code'         => "TR-34-39",
            'status'       => 'ACTIVE',
        ]);

        // İzmir
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Aliağa",
            'slug'         => Str::slug("Aliağa", '-'),
            'code'         => "TR-35-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Balçova",
            'slug'         => Str::slug("Balçova", '-'),
            'code'         => "TR-35-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Bayındır",
            'slug'         => Str::slug("Bayındır", '-'),
            'code'         => "TR-35-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Bayraklı",
            'slug'         => Str::slug("Bayraklı", '-'),
            'code'         => "TR-35-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Bergama",
            'slug'         => Str::slug("Bergama", '-'),
            'code'         => "TR-35-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Beydağ",
            'slug'         => Str::slug("Beydağ", '-'),
            'code'         => "TR-35-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Bornova",
            'slug'         => Str::slug("Bornova", '-'),
            'code'         => "TR-35-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Buca",
            'slug'         => Str::slug("Buca", '-'),
            'code'         => "TR-35-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Çeşme",
            'slug'         => Str::slug("Çeşme", '-'),
            'code'         => "TR-35-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Çiğli",
            'slug'         => Str::slug("Çiğli", '-'),
            'code'         => "TR-35-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Dikili",
            'slug'         => Str::slug("Dikili", '-'),
            'code'         => "TR-35-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Foça",
            'slug'         => Str::slug("Foça", '-'),
            'code'         => "TR-35-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Gaziemir",
            'slug'         => Str::slug("Gaziemir", '-'),
            'code'         => "TR-35-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Güzelbahçe",
            'slug'         => Str::slug("Güzelbahçe", '-'),
            'code'         => "TR-35-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Karabağlar",
            'slug'         => Str::slug("Karabağlar", '-'),
            'code'         => "TR-35-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Karaburun",
            'slug'         => Str::slug("Karaburun", '-'),
            'code'         => "TR-35-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Karşıyaka",
            'slug'         => Str::slug("Karşıyaka", '-'),
            'code'         => "TR-35-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Kemalpaşa",
            'slug'         => Str::slug("Kemalpaşa", '-'),
            'code'         => "TR-35-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Kınık",
            'slug'         => Str::slug("Kınık", '-'),
            'code'         => "TR-35-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Kiraz",
            'slug'         => Str::slug("Kiraz", '-'),
            'code'         => "TR-35-20",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Konak",
            'slug'         => Str::slug("Konak", '-'),
            'code'         => "TR-35-21",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Menderes",
            'slug'         => Str::slug("Menderes", '-'),
            'code'         => "TR-35-22",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Menemen",
            'slug'         => Str::slug("Menemen", '-'),
            'code'         => "TR-35-23",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Narlıdere",
            'slug'         => Str::slug("Narlıdere", '-'),
            'code'         => "TR-35-24",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Ödemiş",
            'slug'         => Str::slug("Ödemiş", '-'),
            'code'         => "TR-35-25",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Seferihisar",
            'slug'         => Str::slug("Seferihisar", '-'),
            'code'         => "TR-35-26",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Selçuk",
            'slug'         => Str::slug("Selçuk", '-'),
            'code'         => "TR-35-27",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Tire",
            'slug'         => Str::slug("Tire", '-'),
            'code'         => "TR-35-28",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Torbalı",
            'slug'         => Str::slug("Torbalı", '-'),
            'code'         => "TR-35-29",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 41,
            'city_code' => "TR-35",
            'title'        => "Urla",
            'slug'         => Str::slug("Urla", '-'),
            'code'         => "TR-35-30",
            'status'       => 'ACTIVE',
        ]);

        // Kahramanmaraş
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Afşin",
            'slug'         => Str::slug("Afşin", '-'),
            'code'         => "TR-46-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Andırın",
            'slug'         => Str::slug("Andırın", '-'),
            'code'         => "TR-46-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Çağlayancerit",
            'slug'         => Str::slug("Çağlayancerit", '-'),
            'code'         => "TR-46-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Dulkadiroğlu",
            'slug'         => Str::slug("Dulkadiroğlu", '-'),
            'code'         => "TR-46-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Ekinözü",
            'slug'         => Str::slug("Ekinözü", '-'),
            'code'         => "TR-46-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Elbistan",
            'slug'         => Str::slug("Elbistan", '-'),
            'code'         => "TR-46-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Göksun",
            'slug'         => Str::slug("Göksun", '-'),
            'code'         => "TR-46-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Nurhak",
            'slug'         => Str::slug("Nurhak", '-'),
            'code'         => "TR-46-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Onikişubat",
            'slug'         => Str::slug("Onikişubat", '-'),
            'code'         => "TR-46-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Pazarcık",
            'slug'         => Str::slug("Pazarcık", '-'),
            'code'         => "TR-46-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Türkoğlu",
            'slug'         => Str::slug("Türkoğlu", '-'),
            'code'         => "TR-46-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 42,
            'city_code' => "TR-46",
            'title'        => "Türkoğlu",
            'slug'         => Str::slug("Türkoğlu", '-'),
            'code'         => "TR-46-12",
            'status'       => 'ACTIVE',
        ]);

        // Karabük
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Eflani",
            'slug'         => Str::slug("Eflani", '-'),
            'code'         => "TR-78-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Eskipazar",
            'slug'         => Str::slug("Eskipazar", '-'),
            'code'         => "TR-78-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-78-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Ovacık",
            'slug'         => Str::slug("Ovacık", '-'),
            'code'         => "TR-78-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Safranbolu",
            'slug'         => Str::slug("Safranbolu", '-'),
            'code'         => "TR-78-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 43,
            'city_code' => "TR-78",
            'title'        => "Yenice",
            'slug'         => Str::slug("Yenice", '-'),
            'code'         => "TR-78-06",
            'status'       => 'ACTIVE',
        ]);

        // Karaman
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Ayrancı",
            'slug'         => Str::slug("Ayrancı", '-'),
            'code'         => "TR-70-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Başyayla",
            'slug'         => Str::slug("Başyayla", '-'),
            'code'         => "TR-70-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Ermenek",
            'slug'         => Str::slug("Ermenek", '-'),
            'code'         => "TR-70-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Kazımkarabekir",
            'slug'         => Str::slug("Kazımkarabekir", '-'),
            'code'         => "TR-70-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-70-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 44,
            'city_code' => "TR-70",
            'title'        => "Sarıveliler",
            'slug'         => Str::slug("Sarıveliler", '-'),
            'code'         => "TR-70-06",
            'status'       => 'ACTIVE',
        ]);

        // Kars
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Akyaka",
            'slug'         => Str::slug("Akyaka", '-'),
            'code'         => "TR-36-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Arpaçay",
            'slug'         => Str::slug("Arpaçay", '-'),
            'code'         => "TR-36-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Digor",
            'slug'         => Str::slug("Digor", '-'),
            'code'         => "TR-36-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Kağızman",
            'slug'         => Str::slug("Kağızman", '-'),
            'code'         => "TR-36-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-36-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Sarıkamış",
            'slug'         => Str::slug("Sarıkamış", '-'),
            'code'         => "TR-36-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Selim",
            'slug'         => Str::slug("Selim", '-'),
            'code'         => "TR-36-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 45,
            'city_code' => "TR-36",
            'title'        => "Susuz",
            'slug'         => Str::slug("Susuz", '-'),
            'code'         => "TR-36-08",
            'status'       => 'ACTIVE',
        ]);

        // Kastamonu
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Abana",
            'slug'         => Str::slug("Abana", '-'),
            'code'         => "TR-37-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Ağlı",
            'slug'         => Str::slug("Ağlı", '-'),
            'code'         => "TR-37-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Araç",
            'slug'         => Str::slug("Araç", '-'),
            'code'         => "TR-37-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Azdavay",
            'slug'         => Str::slug("Azdavay", '-'),
            'code'         => "TR-37-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Bozkurt",
            'slug'         => Str::slug("Bozkurt", '-'),
            'code'         => "TR-37-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Cide",
            'slug'         => Str::slug("Cide", '-'),
            'code'         => "TR-37-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Çatalzeytin",
            'slug'         => Str::slug("Çatalzeytin", '-'),
            'code'         => "TR-37-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Daday",
            'slug'         => Str::slug("Daday", '-'),
            'code'         => "TR-37-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Devrekani",
            'slug'         => Str::slug("Devrekani", '-'),
            'code'         => "TR-37-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Doğanyurt",
            'slug'         => Str::slug("Doğanyurt", '-'),
            'code'         => "TR-37-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Hanönü",
            'slug'         => Str::slug("Hanönü", '-'),
            'code'         => "TR-37-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "İhsangazi",
            'slug'         => Str::slug("İhsangazi", '-'),
            'code'         => "TR-37-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "İnebolu",
            'slug'         => Str::slug("İnebolu", '-'),
            'code'         => "TR-37-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Küre",
            'slug'         => Str::slug("Küre", '-'),
            'code'         => "TR-37-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-37-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Pınarbaşı",
            'slug'         => Str::slug("Pınarbaşı", '-'),
            'code'         => "TR-37-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Seydiler",
            'slug'         => Str::slug("Seydiler", '-'),
            'code'         => "TR-37-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Şenpazar",
            'slug'         => Str::slug("Şenpazar", '-'),
            'code'         => "TR-37-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Taşköprü",
            'slug'         => Str::slug("Taşköprü", '-'),
            'code'         => "TR-37-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 46,
            'city_code' => "TR-37",
            'title'        => "Tosya",
            'slug'         => Str::slug("Tosya", '-'),
            'code'         => "TR-37-20",
            'status'       => 'ACTIVE',
        ]);

        // Kayseri
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Akkışla",
            'slug'         => Str::slug("Akkışla", '-'),
            'code'         => "TR-38-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Bünyan",
            'slug'         => Str::slug("Bünyan", '-'),
            'code'         => "TR-38-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Develi",
            'slug'         => Str::slug("Develi", '-'),
            'code'         => "TR-38-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Felahiye",
            'slug'         => Str::slug("Felahiye", '-'),
            'code'         => "TR-38-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Hacılar",
            'slug'         => Str::slug("Hacılar", '-'),
            'code'         => "TR-38-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "İncesu",
            'slug'         => Str::slug("İncesu", '-'),
            'code'         => "TR-38-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Kocasinan",
            'slug'         => Str::slug("Kocasinan", '-'),
            'code'         => "TR-38-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Melikgazi",
            'slug'         => Str::slug("Melikgazi", '-'),
            'code'         => "TR-38-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Özvatan",
            'slug'         => Str::slug("Özvatan", '-'),
            'code'         => "TR-38-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Pınarbaşı",
            'slug'         => Str::slug("Pınarbaşı", '-'),
            'code'         => "TR-38-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Sarıoğlan",
            'slug'         => Str::slug("Sarıoğlan", '-'),
            'code'         => "TR-38-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Sarız",
            'slug'         => Str::slug("Sarız", '-'),
            'code'         => "TR-38-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Talas",
            'slug'         => Str::slug("Talas", '-'),
            'code'         => "TR-38-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Tomarza",
            'slug'         => Str::slug("Tomarza", '-'),
            'code'         => "TR-38-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Yahyalı",
            'slug'         => Str::slug("Yahyalı", '-'),
            'code'         => "TR-38-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 47,
            'city_code' => "TR-38",
            'title'        => "Yeşilhisar",
            'slug'         => Str::slug("Yeşilhisar", '-'),
            'code'         => "TR-38-16",
            'status'       => 'ACTIVE',
        ]);

        // Kırıkkale
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Bahşılı",
            'slug'         => Str::slug("Bahşılı", '-'),
            'code'         => "TR-71-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Balışeyh",
            'slug'         => Str::slug("Balışeyh", '-'),
            'code'         => "TR-71-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Çelebi",
            'slug'         => Str::slug("Çelebi", '-'),
            'code'         => "TR-71-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Delice",
            'slug'         => Str::slug("Delice", '-'),
            'code'         => "TR-71-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Karakeçili",
            'slug'         => Str::slug("Karakeçili", '-'),
            'code'         => "TR-71-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Keskin",
            'slug'         => Str::slug("Keskin", '-'),
            'code'         => "TR-71-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-71-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Sulakyurt",
            'slug'         => Str::slug("Sulakyurt", '-'),
            'code'         => "TR-71-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Yahşihan",
            'slug'         => Str::slug("Yahşihan", '-'),
            'code'         => "TR-71-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 48,
            'city_code' => "TR-71",
            'title'        => "Babaeski",
            'slug'         => Str::slug("Babaeski", '-'),
            'code'         => "TR-71-10",
            'status'       => 'ACTIVE',
        ]);

        // Kırklareli
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Demirköy",
            'slug'         => Str::slug("Demirköy", '-'),
            'code'         => "TR-39-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Kofçaz",
            'slug'         => Str::slug("Kofçaz", '-'),
            'code'         => "TR-39-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Lüleburgaz",
            'slug'         => Str::slug("Lüleburgaz", '-'),
            'code'         => "TR-39-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-39-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Pehlivanköy",
            'slug'         => Str::slug("Pehlivanköy", '-'),
            'code'         => "TR-39-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Pınarhisar",
            'slug'         => Str::slug("Pınarhisar", '-'),
            'code'         => "TR-39-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 49,
            'city_code' => "TR-39",
            'title'        => "Vize",
            'slug'         => Str::slug("Vize", '-'),
            'code'         => "TR-39-07",
            'status'       => 'ACTIVE',
        ]);

        // Kırşehir
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Akçakent",
            'slug'         => Str::slug("Akçakent", '-'),
            'code'         => "TR-40-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Akpınar",
            'slug'         => Str::slug("Akpınar", '-'),
            'code'         => "TR-40-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Boztepe",
            'slug'         => Str::slug("Boztepe", '-'),
            'code'         => "TR-40-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Çiçekdağı",
            'slug'         => Str::slug("Çiçekdağı", '-'),
            'code'         => "TR-40-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Kaman",
            'slug'         => Str::slug("Kaman", '-'),
            'code'         => "TR-40-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-40-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 50,
            'city_code' => "TR-40",
            'title'        => "Mucur",
            'slug'         => Str::slug("Mucur", '-'),
            'code'         => "TR-40-07",
            'status'       => 'ACTIVE',
        ]);

        // Kilis
        District::create([
            'city_id'   => 51,
            'city_code' => "TR-79",
            'title'        => "Elbeyli",
            'slug'         => Str::slug("Elbeyli", '-'),
            'code'         => "TR-79-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 51,
            'city_code' => "TR-79",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-79-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 51,
            'city_code' => "TR-79",
            'title'        => "Musabeyli",
            'slug'         => Str::slug("Musabeyli", '-'),
            'code'         => "TR-79-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 51,
            'city_code' => "TR-79",
            'title'        => "Polateli",
            'slug'         => Str::slug("Polateli", '-'),
            'code'         => "TR-79-04",
            'status'       => 'ACTIVE',
        ]);

        // Kocaeli
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Başiskele",
            'slug'         => Str::slug("Başiskele", '-'),
            'code'         => "TR-41-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Çayırova",
            'slug'         => Str::slug("Çayırova", '-'),
            'code'         => "TR-41-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Darıca",
            'slug'         => Str::slug("Darıca", '-'),
            'code'         => "TR-41-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Derince",
            'slug'         => Str::slug("Derince", '-'),
            'code'         => "TR-41-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Dilovası",
            'slug'         => Str::slug("Dilovası", '-'),
            'code'         => "TR-41-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Gebze",
            'slug'         => Str::slug("Gebze", '-'),
            'code'         => "TR-41-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Gölcük",
            'slug'         => Str::slug("Gölcük", '-'),
            'code'         => "TR-41-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "İzmit",
            'slug'         => Str::slug("İzmit", '-'),
            'code'         => "TR-41-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Kandıra",
            'slug'         => Str::slug("Kandıra", '-'),
            'code'         => "TR-41-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Karamürsel",
            'slug'         => Str::slug("Karamürsel", '-'),
            'code'         => "TR-41-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Kartepe",
            'slug'         => Str::slug("Kartepe", '-'),
            'code'         => "TR-41-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 52,
            'city_code' => "TR-41",
            'title'        => "Körfez",
            'slug'         => Str::slug("Körfez", '-'),
            'code'         => "TR-41-12",
            'status'       => 'ACTIVE',
        ]);

        // Konya
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Ahırlı",
            'slug'         => Str::slug("Ahırlı", '-'),
            'code'         => "TR-42-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Akören",
            'slug'         => Str::slug("Akören", '-'),
            'code'         => "TR-42-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Akşehir",
            'slug'         => Str::slug("Akşehir", '-'),
            'code'         => "TR-42-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Altınekin",
            'slug'         => Str::slug("Altınekin", '-'),
            'code'         => "TR-42-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Beyşehir",
            'slug'         => Str::slug("Beyşehir", '-'),
            'code'         => "TR-42-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Bozkır",
            'slug'         => Str::slug("Bozkır", '-'),
            'code'         => "TR-42-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Cihanbeyli",
            'slug'         => Str::slug("Cihanbeyli", '-'),
            'code'         => "TR-42-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Çeltik",
            'slug'         => Str::slug("Çeltik", '-'),
            'code'         => "TR-42-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Çumra",
            'slug'         => Str::slug("Çumra", '-'),
            'code'         => "TR-42-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Derbent",
            'slug'         => Str::slug("Derbent", '-'),
            'code'         => "TR-42-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Derebucak",
            'slug'         => Str::slug("Derebucak", '-'),
            'code'         => "TR-42-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Doğanhisar",
            'slug'         => Str::slug("Doğanhisar", '-'),
            'code'         => "TR-42-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Emirgazi",
            'slug'         => Str::slug("Emirgazi", '-'),
            'code'         => "TR-42-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Ereğli",
            'slug'         => Str::slug("Ereğli", '-'),
            'code'         => "TR-42-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Güneysınır",
            'slug'         => Str::slug("Güneysınır", '-'),
            'code'         => "TR-42-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Hadim",
            'slug'         => Str::slug("Hadim", '-'),
            'code'         => "TR-42-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Halkapınar",
            'slug'         => Str::slug("Halkapınar", '-'),
            'code'         => "TR-42-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Hüyük",
            'slug'         => Str::slug("Hüyük", '-'),
            'code'         => "TR-42-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Ilgın",
            'slug'         => Str::slug("Ilgın", '-'),
            'code'         => "TR-42-19",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Kadınhanı",
            'slug'         => Str::slug("Kadınhanı", '-'),
            'code'         => "TR-42-20",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Karapınar",
            'slug'         => Str::slug("Karapınar", '-'),
            'code'         => "TR-42-21",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Karatay",
            'slug'         => Str::slug("Karatay", '-'),
            'code'         => "TR-42-22",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Kulu",
            'slug'         => Str::slug("Kulu", '-'),
            'code'         => "TR-42-23",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Meram",
            'slug'         => Str::slug("Meram", '-'),
            'code'         => "TR-42-24",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Sarayönü",
            'slug'         => Str::slug("Sarayönü", '-'),
            'code'         => "TR-42-25",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Selçuklu",
            'slug'         => Str::slug("Selçuklu", '-'),
            'code'         => "TR-42-26",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Seydişehir",
            'slug'         => Str::slug("Seydişehir", '-'),
            'code'         => "TR-42-27",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Taşkent",
            'slug'         => Str::slug("Taşkent", '-'),
            'code'         => "TR-42-28",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Tuzlukçu",
            'slug'         => Str::slug("Tuzlukçu", '-'),
            'code'         => "TR-42-29",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Yalıhüyük",
            'slug'         => Str::slug("Yalıhüyük", '-'),
            'code'         => "TR-42-30",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 53,
            'city_code' => "TR-42",
            'title'        => "Yunak",
            'slug'         => Str::slug("Yunak", '-'),
            'code'         => "TR-42-31",
            'status'       => 'ACTIVE',
        ]);

        // Kütahya
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Altıntaş",
            'slug'         => Str::slug("Altıntaş", '-'),
            'code'         => "TR-43-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Aslanapa",
            'slug'         => Str::slug("Aslanapa", '-'),
            'code'         => "TR-43-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Çavdarhisar",
            'slug'         => Str::slug("Çavdarhisar", '-'),
            'code'         => "TR-43-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Domaniç",
            'slug'         => Str::slug("Domaniç", '-'),
            'code'         => "TR-43-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Dumlupınar",
            'slug'         => Str::slug("Dumlupınar", '-'),
            'code'         => "TR-43-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Emet",
            'slug'         => Str::slug("Emet", '-'),
            'code'         => "TR-43-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Gediz",
            'slug'         => Str::slug("Gediz", '-'),
            'code'         => "TR-43-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Hisarcık",
            'slug'         => Str::slug("Hisarcık", '-'),
            'code'         => "TR-43-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-43-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Pazarlar",
            'slug'         => Str::slug("Pazarlar", '-'),
            'code'         => "TR-43-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Simav",
            'slug'         => Str::slug("Simav", '-'),
            'code'         => "TR-43-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Şaphane",
            'slug'         => Str::slug("Şaphane", '-'),
            'code'         => "TR-43-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 54,
            'city_code' => "TR-43",
            'title'        => "Tavşanlı",
            'slug'         => Str::slug("Tavşanlı", '-'),
            'code'         => "TR-43-13",
            'status'       => 'ACTIVE',
        ]);

        // Malatya
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Akçadağ",
            'slug'         => Str::slug("Akçadağ", '-'),
            'code'         => "TR-44-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Arapgir",
            'slug'         => Str::slug("Arapgir", '-'),
            'code'         => "TR-44-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Arguvan",
            'slug'         => Str::slug("Arguvan", '-'),
            'code'         => "TR-44-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Battalgazi",
            'slug'         => Str::slug("Battalgazi", '-'),
            'code'         => "TR-44-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Darende",
            'slug'         => Str::slug("Darende", '-'),
            'code'         => "TR-44-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Doğanşehir",
            'slug'         => Str::slug("Doğanşehir", '-'),
            'code'         => "TR-44-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Doğanyol",
            'slug'         => Str::slug("Doğanyol", '-'),
            'code'         => "TR-44-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Hekimhan",
            'slug'         => Str::slug("Hekimhan", '-'),
            'code'         => "TR-44-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Kale",
            'slug'         => Str::slug("Kale", '-'),
            'code'         => "TR-44-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Kuluncak",
            'slug'         => Str::slug("Kuluncak", '-'),
            'code'         => "TR-44-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Pütürge",
            'slug'         => Str::slug("Pütürge", '-'),
            'code'         => "TR-44-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Yazıhan",
            'slug'         => Str::slug("Yazıhan", '-'),
            'code'         => "TR-44-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 55,
            'city_code' => "TR-44",
            'title'        => "Yeşilyurt",
            'slug'         => Str::slug("Yeşilyurt", '-'),
            'code'         => "TR-44-13",
            'status'       => 'ACTIVE',
        ]);

        // Manisa
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Ahmetli",
            'slug'         => Str::slug("Ahmetli", '-'),
            'code'         => "TR-45-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Akhisar",
            'slug'         => Str::slug("Akhisar", '-'),
            'code'         => "TR-45-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Alaşehir",
            'slug'         => Str::slug("Alaşehir", '-'),
            'code'         => "TR-45-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Demirci",
            'slug'         => Str::slug("Demirci", '-'),
            'code'         => "TR-45-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Gölmarmara",
            'slug'         => Str::slug("Gölmarmara", '-'),
            'code'         => "TR-45-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Gördes",
            'slug'         => Str::slug("Gördes", '-'),
            'code'         => "TR-45-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Kırkağaç",
            'slug'         => Str::slug("Kırkağaç", '-'),
            'code'         => "TR-45-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Köprübaşı",
            'slug'         => Str::slug("Köprübaşı", '-'),
            'code'         => "TR-45-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Kula",
            'slug'         => Str::slug("Kula", '-'),
            'code'         => "TR-45-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Salihli",
            'slug'         => Str::slug("Salihli", '-'),
            'code'         => "TR-45-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Sarıgöl",
            'slug'         => Str::slug("Sarıgöl", '-'),
            'code'         => "TR-45-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Saruhanlı",
            'slug'         => Str::slug("Saruhanlı", '-'),
            'code'         => "TR-45-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Selendi",
            'slug'         => Str::slug("Selendi", '-'),
            'code'         => "TR-45-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Soma",
            'slug'         => Str::slug("Soma", '-'),
            'code'         => "TR-45-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Şehzadeler",
            'slug'         => Str::slug("Şehzadeler", '-'),
            'code'         => "TR-45-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Turgutlu",
            'slug'         => Str::slug("Turgutlu", '-'),
            'code'         => "TR-45-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 56,
            'city_code' => "TR-45",
            'title'        => "Yunusemre",
            'slug'         => Str::slug("Yunusemre", '-'),
            'code'         => "TR-45-17",
            'status'       => 'ACTIVE',
        ]);

        // Mardin
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Artuklu",
            'slug'         => Str::slug("Artuklu", '-'),
            'code'         => "TR-47-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Dargeçit",
            'slug'         => Str::slug("Dargeçit", '-'),
            'code'         => "TR-47-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Derik",
            'slug'         => Str::slug("Derik", '-'),
            'code'         => "TR-47-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Kızıltepe",
            'slug'         => Str::slug("Kızıltepe", '-'),
            'code'         => "TR-47-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Mazıdağı",
            'slug'         => Str::slug("Mazıdağı", '-'),
            'code'         => "TR-47-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Midyat",
            'slug'         => Str::slug("Midyat", '-'),
            'code'         => "TR-47-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Nusaybin",
            'slug'         => Str::slug("Nusaybin", '-'),
            'code'         => "TR-47-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Ömerli",
            'slug'         => Str::slug("Ömerli", '-'),
            'code'         => "TR-47-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Savur",
            'slug'         => Str::slug("Savur", '-'),
            'code'         => "TR-47-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 57,
            'city_code' => "TR-47",
            'title'        => "Yeşilli",
            'slug'         => Str::slug("Yeşilli", '-'),
            'code'         => "TR-47-10",
            'status'       => 'ACTIVE',
        ]);

        // Mersin
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Akdeniz",
            'slug'         => Str::slug("Akdeniz", '-'),
            'code'         => "TR-33-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Anamur",
            'slug'         => Str::slug("Anamur", '-'),
            'code'         => "TR-33-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Aydıncık",
            'slug'         => Str::slug("Aydıncık", '-'),
            'code'         => "TR-33-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Bozyazı",
            'slug'         => Str::slug("Bozyazı", '-'),
            'code'         => "TR-33-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Çamlıyayla",
            'slug'         => Str::slug("Çamlıyayla", '-'),
            'code'         => "TR-33-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Erdemli",
            'slug'         => Str::slug("Erdemli", '-'),
            'code'         => "TR-33-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Gülnar",
            'slug'         => Str::slug("Gülnar", '-'),
            'code'         => "TR-33-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Mezitli",
            'slug'         => Str::slug("Mezitli", '-'),
            'code'         => "TR-33-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Mut",
            'slug'         => Str::slug("Mut", '-'),
            'code'         => "TR-33-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Silifke",
            'slug'         => Str::slug("Silifke", '-'),
            'code'         => "TR-33-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Tarsus",
            'slug'         => Str::slug("Tarsus", '-'),
            'code'         => "TR-33-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Toroslar",
            'slug'         => Str::slug("Toroslar", '-'),
            'code'         => "TR-33-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 58,
            'city_code' => "TR-33",
            'title'        => "Yenişehir",
            'slug'         => Str::slug("Yenişehir", '-'),
            'code'         => "TR-33-13",
            'status'       => 'ACTIVE',
        ]);

        // Muğla
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Bodrum",
            'slug'         => Str::slug("Bodrum", '-'),
            'code'         => "TR-48-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Dalaman",
            'slug'         => Str::slug("Dalaman", '-'),
            'code'         => "TR-48-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Datça",
            'slug'         => Str::slug("Datça", '-'),
            'code'         => "TR-48-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Fethiye",
            'slug'         => Str::slug("Fethiye", '-'),
            'code'         => "TR-48-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Kavaklıdere",
            'slug'         => Str::slug("Kavaklıdere", '-'),
            'code'         => "TR-48-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Köyceğiz",
            'slug'         => Str::slug("Köyceğiz", '-'),
            'code'         => "TR-48-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Marmaris",
            'slug'         => Str::slug("Marmaris", '-'),
            'code'         => "TR-48-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Menteşe",
            'slug'         => Str::slug("Menteşe", '-'),
            'code'         => "TR-48-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Milas",
            'slug'         => Str::slug("Milas", '-'),
            'code'         => "TR-48-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Ortaca",
            'slug'         => Str::slug("Ortaca", '-'),
            'code'         => "TR-48-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Seydikemer",
            'slug'         => Str::slug("Seydikemer", '-'),
            'code'         => "TR-48-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Ula",
            'slug'         => Str::slug("Ula", '-'),
            'code'         => "TR-48-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 59,
            'city_code' => "TR-48",
            'title'        => "Yatağan",
            'slug'         => Str::slug("Yatağan", '-'),
            'code'         => "TR-48-13",
            'status'       => 'ACTIVE',
        ]);

        // Muş
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Bulanık",
            'slug'         => Str::slug("Bulanık", '-'),
            'code'         => "TR-49-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Hasköy",
            'slug'         => Str::slug("Hasköy", '-'),
            'code'         => "TR-49-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Korkut",
            'slug'         => Str::slug("Korkut", '-'),
            'code'         => "TR-49-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Malazgirt",
            'slug'         => Str::slug("Malazgirt", '-'),
            'code'         => "TR-49-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-49-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 60,
            'city_code' => "TR-49",
            'title'        => "Varto",
            'slug'         => Str::slug("Varto", '-'),
            'code'         => "TR-49-06",
            'status'       => 'ACTIVE',
        ]);

        // Nevşehir
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Acıgöl",
            'slug'         => Str::slug("Acıgöl", '-'),
            'code'         => "TR-50-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Avanos",
            'slug'         => Str::slug("Avanos", '-'),
            'code'         => "TR-50-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Derinkuyu",
            'slug'         => Str::slug("Derinkuyu", '-'),
            'code'         => "TR-50-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Gülşehir",
            'slug'         => Str::slug("Gülşehir", '-'),
            'code'         => "TR-50-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Hacıbektaş",
            'slug'         => Str::slug("Hacıbektaş", '-'),
            'code'         => "TR-50-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Kozaklı",
            'slug'         => Str::slug("Kozaklı", '-'),
            'code'         => "TR-50-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-50-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 61,
            'city_code' => "TR-50",
            'title'        => "Ürgüp",
            'slug'         => Str::slug("Ürgüp", '-'),
            'code'         => "TR-50-08",
            'status'       => 'ACTIVE',
        ]);

        // Niğde
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Altunhisar",
            'slug'         => Str::slug("Altunhisar", '-'),
            'code'         => "TR-51-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Bor",
            'slug'         => Str::slug("Bor", '-'),
            'code'         => "TR-51-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Çamardı",
            'slug'         => Str::slug("Çamardı", '-'),
            'code'         => "TR-51-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Çiftlik",
            'slug'         => Str::slug("Çiftlik", '-'),
            'code'         => "TR-51-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-51-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 62,
            'city_code' => "TR-51",
            'title'        => "Ulukışla",
            'slug'         => Str::slug("Ulukışla", '-'),
            'code'         => "TR-51-06",
            'status'       => 'ACTIVE',
        ]);

        // Ordu
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Akkuş",
            'slug'         => Str::slug("Akkuş", '-'),
            'code'         => "TR-52-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Altınordu",
            'slug'         => Str::slug("Altınordu", '-'),
            'code'         => "TR-52-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Aybastı",
            'slug'         => Str::slug("Aybastı", '-'),
            'code'         => "TR-52-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Çamaş",
            'slug'         => Str::slug("Çamaş", '-'),
            'code'         => "TR-52-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Çatalpınar",
            'slug'         => Str::slug("Çatalpınar", '-'),
            'code'         => "TR-52-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Çaybaşı",
            'slug'         => Str::slug("Çaybaşı", '-'),
            'code'         => "TR-52-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Fatsa",
            'slug'         => Str::slug("Fatsa", '-'),
            'code'         => "TR-52-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Gölköy",
            'slug'         => Str::slug("Gölköy", '-'),
            'code'         => "TR-52-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Gülyalı",
            'slug'         => Str::slug("Gülyalı", '-'),
            'code'         => "TR-52-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Gürgentepe",
            'slug'         => Str::slug("Gürgentepe", '-'),
            'code'         => "TR-52-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "İkizce",
            'slug'         => Str::slug("İkizce", '-'),
            'code'         => "TR-52-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Kabadüz",
            'slug'         => Str::slug("Kabadüz", '-'),
            'code'         => "TR-52-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Kabataş",
            'slug'         => Str::slug("Kabataş", '-'),
            'code'         => "TR-52-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Korgan",
            'slug'         => Str::slug("Korgan", '-'),
            'code'         => "TR-52-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Kumru",
            'slug'         => Str::slug("Kumru", '-'),
            'code'         => "TR-52-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Mesudiye",
            'slug'         => Str::slug("Mesudiye", '-'),
            'code'         => "TR-52-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Perşembe",
            'slug'         => Str::slug("Perşembe", '-'),
            'code'         => "TR-52-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Ulubey",
            'slug'         => Str::slug("Ulubey", '-'),
            'code'         => "TR-52-18",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 63,
            'city_code' => "TR-52",
            'title'        => "Ünye",
            'slug'         => Str::slug("Ünye", '-'),
            'code'         => "TR-52-19",
            'status'       => 'ACTIVE',
        ]);

        // Osmaniye
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Bahçe",
            'slug'         => Str::slug("Bahçe", '-'),
            'code'         => "TR-80-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Düziçi",
            'slug'         => Str::slug("Düziçi", '-'),
            'code'         => "TR-80-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Hasanbeyli",
            'slug'         => Str::slug("Hasanbeyli", '-'),
            'code'         => "TR-80-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Kadirli",
            'slug'         => Str::slug("Kadirli", '-'),
            'code'         => "TR-80-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-80-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Sumbas",
            'slug'         => Str::slug("Sumbas", '-'),
            'code'         => "TR-80-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 64,
            'city_code' => "TR-80",
            'title'        => "Toprakkale",
            'slug'         => Str::slug("Toprakkale", '-'),
            'code'         => "TR-80-07",
            'status'       => 'ACTIVE',
        ]);

        // Rize
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Ardeşen",
            'slug'         => Str::slug("Ardeşen", '-'),
            'code'         => "TR-53-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Çamlıhemşin",
            'slug'         => Str::slug("Çamlıhemşin", '-'),
            'code'         => "TR-53-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Çayeli",
            'slug'         => Str::slug("Çayeli", '-'),
            'code'         => "TR-53-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-04",
            'title'        => "Derepazarı",
            'slug'         => Str::slug("Derepazarı", '-'),
            'code'         => "TR-53-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Fındıklı",
            'slug'         => Str::slug("Fındıklı", '-'),
            'code'         => "TR-53-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Güneysu",
            'slug'         => Str::slug("Güneysu", '-'),
            'code'         => "TR-53-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Hemşin",
            'slug'         => Str::slug("Hemşin", '-'),
            'code'         => "TR-53-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "İkizdere",
            'slug'         => Str::slug("İkizdere", '-'),
            'code'         => "TR-53-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "İyidere",
            'slug'         => Str::slug("İyidere", '-'),
            'code'         => "TR-53-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Kalkandere",
            'slug'         => Str::slug("Kalkandere", '-'),
            'code'         => "TR-53-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-53-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 65,
            'city_code' => "TR-53",
            'title'        => "Pazar",
            'slug'         => Str::slug("Pazar", '-'),
            'code'         => "TR-53-12",
            'status'       => 'ACTIVE',
        ]);

        // Sakarya
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Adapazarı",
            'slug'         => Str::slug("Adapazarı", '-'),
            'code'         => "TR-54-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Akyazı",
            'slug'         => Str::slug("Akyazı", '-'),
            'code'         => "TR-54-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Arifiye",
            'slug'         => Str::slug("Arifiye", '-'),
            'code'         => "TR-54-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Erenler",
            'slug'         => Str::slug("Erenler", '-'),
            'code'         => "TR-54-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Ferizli",
            'slug'         => Str::slug("Ferizli", '-'),
            'code'         => "TR-54-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Geyve",
            'slug'         => Str::slug("Geyve", '-'),
            'code'         => "TR-54-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Hendek",
            'slug'         => Str::slug("Hendek", '-'),
            'code'         => "TR-54-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Karapürçek",
            'slug'         => Str::slug("Karapürçek", '-'),
            'code'         => "TR-54-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Karasu",
            'slug'         => Str::slug("Karasu", '-'),
            'code'         => "TR-54-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Kaynarca",
            'slug'         => Str::slug("Kaynarca", '-'),
            'code'         => "TR-54-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Kocaali",
            'slug'         => Str::slug("Kocaali", '-'),
            'code'         => "TR-54-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Pamukova",
            'slug'         => Str::slug("Pamukova", '-'),
            'code'         => "TR-54-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Sapanca",
            'slug'         => Str::slug("Sapanca", '-'),
            'code'         => "TR-54-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Serdivan",
            'slug'         => Str::slug("Serdivan", '-'),
            'code'         => "TR-54-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Söğütlü",
            'slug'         => Str::slug("Söğütlü", '-'),
            'code'         => "TR-54-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 66,
            'city_code' => "TR-54",
            'title'        => "Taraklı",
            'slug'         => Str::slug("Taraklı", '-'),
            'code'         => "TR-54-16",
            'status'       => 'ACTIVE',
        ]);

        // Samsun
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "19 Mayıs",
            'slug'         => Str::slug("19 Mayıs", '-'),
            'code'         => "TR-55-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Alaçam",
            'slug'         => Str::slug("Alaçam", '-'),
            'code'         => "TR-55-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Asarcık",
            'slug'         => Str::slug("Asarcık", '-'),
            'code'         => "TR-55-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Atakum",
            'slug'         => Str::slug("Atakum", '-'),
            'code'         => "TR-55-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Ayvacık",
            'slug'         => Str::slug("Ayvacık", '-'),
            'code'         => "TR-55-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Bafra",
            'slug'         => Str::slug("Bafra", '-'),
            'code'         => "TR-55-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Canik",
            'slug'         => Str::slug("Canik", '-'),
            'code'         => "TR-55-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Çarşamba",
            'slug'         => Str::slug("Çarşamba", '-'),
            'code'         => "TR-55-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Havza",
            'slug'         => Str::slug("Havza", '-'),
            'code'         => "TR-55-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "İlkadım",
            'slug'         => Str::slug("İlkadım", '-'),
            'code'         => "TR-55-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Kavak",
            'slug'         => Str::slug("Kavak", '-'),
            'code'         => "TR-55-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Ladik",
            'slug'         => Str::slug("Ladik", '-'),
            'code'         => "TR-55-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Salıpazarı",
            'slug'         => Str::slug("Salıpazarı", '-'),
            'code'         => "TR-55-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Tekkeköy",
            'slug'         => Str::slug("Tekkeköy", '-'),
            'code'         => "TR-55-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Terme",
            'slug'         => Str::slug("Terme", '-'),
            'code'         => "TR-55-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Vezirköprü",
            'slug'         => Str::slug("Vezirköprü", '-'),
            'code'         => "TR-55-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 67,
            'city_code' => "TR-55",
            'title'        => "Yakakent",
            'slug'         => Str::slug("Yakakent", '-'),
            'code'         => "TR-55-17",
            'status'       => 'ACTIVE',
        ]);

        // Siirt
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Baykan",
            'slug'         => Str::slug("Baykan", '-'),
            'code'         => "TR-56-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Eruh",
            'slug'         => Str::slug("Eruh", '-'),
            'code'         => "TR-56-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Kurtalan",
            'slug'         => Str::slug("Kurtalan", '-'),
            'code'         => "TR-56-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-56-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Pervari",
            'slug'         => Str::slug("Pervari", '-'),
            'code'         => "TR-56-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Şirvan",
            'slug'         => Str::slug("Şirvan", '-'),
            'code'         => "TR-56-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 68,
            'city_code' => "TR-56",
            'title'        => "Tillo",
            'slug'         => Str::slug("Tillo", '-'),
            'code'         => "TR-56-07",
            'status'       => 'ACTIVE',
        ]);

        // Sinop
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Ayancık",
            'slug'         => Str::slug("Ayancık", '-'),
            'code'         => "TR-57-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Boyabat",
            'slug'         => Str::slug("Boyabat", '-'),
            'code'         => "TR-57-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Dikmen",
            'slug'         => Str::slug("Dikmen", '-'),
            'code'         => "TR-57-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Durağan",
            'slug'         => Str::slug("Durağan", '-'),
            'code'         => "TR-57-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Erfelek",
            'slug'         => Str::slug("Erfelek", '-'),
            'code'         => "TR-57-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Gerze",
            'slug'         => Str::slug("Gerze", '-'),
            'code'         => "TR-57-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-57-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Saraydüzü",
            'slug'         => Str::slug("Saraydüzü", '-'),
            'code'         => "TR-57-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 69,
            'city_code' => "TR-57",
            'title'        => "Türkeli",
            'slug'         => Str::slug("Türkeli", '-'),
            'code'         => "TR-57-09",
            'status'       => 'ACTIVE',
        ]);

        // Sivas
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Akıncılar",
            'slug'         => Str::slug("Akıncılar", '-'),
            'code'         => "TR-58-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Altınyayla",
            'slug'         => Str::slug("Altınyayla", '-'),
            'code'         => "TR-58-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Divriği",
            'slug'         => Str::slug("Divriği", '-'),
            'code'         => "TR-58-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Doğanşar",
            'slug'         => Str::slug("Doğanşar", '-'),
            'code'         => "TR-58-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Gemerek",
            'slug'         => Str::slug("Gemerek", '-'),
            'code'         => "TR-58-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Gölova",
            'slug'         => Str::slug("Gölova", '-'),
            'code'         => "TR-58-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Gürün",
            'slug'         => Str::slug("Gürün", '-'),
            'code'         => "TR-58-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Hafik",
            'slug'         => Str::slug("Hafik", '-'),
            'code'         => "TR-58-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "İmranlı",
            'slug'         => Str::slug("İmranlı", '-'),
            'code'         => "TR-58-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Kangal",
            'slug'         => Str::slug("Kangal", '-'),
            'code'         => "TR-58-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Koyulhisar",
            'slug'         => Str::slug("Koyulhisar", '-'),
            'code'         => "TR-58-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-58-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Suşehri",
            'slug'         => Str::slug("Suşehri", '-'),
            'code'         => "TR-58-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Şarkışla",
            'slug'         => Str::slug("Şarkışla", '-'),
            'code'         => "TR-58-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Ulaş",
            'slug'         => Str::slug("Ulaş", '-'),
            'code'         => "TR-58-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Yıldızeli",
            'slug'         => Str::slug("Yıldızeli", '-'),
            'code'         => "TR-58-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 70,
            'city_code' => "TR-58",
            'title'        => "Zara",
            'slug'         => Str::slug("Zara", '-'),
            'code'         => "TR-58-17",
            'status'       => 'ACTIVE',
        ]);

        // Şanlıurfa
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Akçakale",
            'slug'         => Str::slug("Akçakale", '-'),
            'code'         => "TR-63-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Birecik",
            'slug'         => Str::slug("Birecik", '-'),
            'code'         => "TR-63-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Bozova",
            'slug'         => Str::slug("Bozova", '-'),
            'code'         => "TR-63-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Ceylanpınar",
            'slug'         => Str::slug("Ceylanpınar", '-'),
            'code'         => "TR-63-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Eyyübiye",
            'slug'         => Str::slug("Eyyübiye", '-'),
            'code'         => "TR-63-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Halfeti",
            'slug'         => Str::slug("Halfeti", '-'),
            'code'         => "TR-63-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Haliliye",
            'slug'         => Str::slug("Haliliye", '-'),
            'code'         => "TR-63-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Harran",
            'slug'         => Str::slug("Harran", '-'),
            'code'         => "TR-63-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Hilvan",
            'slug'         => Str::slug("Hilvan", '-'),
            'code'         => "TR-63-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Karaköprü",
            'slug'         => Str::slug("Karaköprü", '-'),
            'code'         => "TR-63-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Siverek",
            'slug'         => Str::slug("Siverek", '-'),
            'code'         => "TR-63-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Suruç",
            'slug'         => Str::slug("Suruç", '-'),
            'code'         => "TR-63-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 71,
            'city_code' => "TR-63",
            'title'        => "Viranşehir",
            'slug'         => Str::slug("Viranşehir", '-'),
            'code'         => "TR-63-13",
            'status'       => 'ACTIVE',
        ]);

        // Şırnak
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Beytüşşebap",
            'slug'         => Str::slug("Beytüşşebap", '-'),
            'code'         => "TR-73-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Cizre",
            'slug'         => Str::slug("Cizre", '-'),
            'code'         => "TR-73-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Güçlükonak",
            'slug'         => Str::slug("Güçlükonak", '-'),
            'code'         => "TR-73-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "İdil",
            'slug'         => Str::slug("İdil", '-'),
            'code'         => "TR-73-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-73-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Silopi",
            'slug'         => Str::slug("Silopi", '-'),
            'code'         => "TR-73-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 72,
            'city_code' => "TR-73",
            'title'        => "Uludere",
            'slug'         => Str::slug("Uludere", '-'),
            'code'         => "TR-73-07",
            'status'       => 'ACTIVE',
        ]);

        // Tekirdağ
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Çerkezköy",
            'slug'         => Str::slug("Çerkezköy", '-'),
            'code'         => "TR-59-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Çorlu",
            'slug'         => Str::slug("Çorlu", '-'),
            'code'         => "TR-59-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Ergene",
            'slug'         => Str::slug("Ergene", '-'),
            'code'         => "TR-59-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Hayrabolu",
            'slug'         => Str::slug("Hayrabolu", '-'),
            'code'         => "TR-59-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Kapaklı",
            'slug'         => Str::slug("Kapaklı", '-'),
            'code'         => "TR-59-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Malkara",
            'slug'         => Str::slug("Malkara", '-'),
            'code'         => "TR-59-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Marmaraereğlisi",
            'slug'         => Str::slug("Marmaraereğlisi", '-'),
            'code'         => "TR-59-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Muratlı",
            'slug'         => Str::slug("Muratlı", '-'),
            'code'         => "TR-59-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Saray",
            'slug'         => Str::slug("Saray", '-'),
            'code'         => "TR-59-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Süleymanpaşa",
            'slug'         => Str::slug("Süleymanpaşa", '-'),
            'code'         => "TR-59-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 73,
            'city_code' => "TR-59",
            'title'        => "Şarköy",
            'slug'         => Str::slug("Şarköy", '-'),
            'code'         => "TR-59-11",
            'status'       => 'ACTIVE',
        ]);

        // Tokat
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Almus",
            'slug'         => Str::slug("Almus", '-'),
            'code'         => "TR-60-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Artova",
            'slug'         => Str::slug("Artova", '-'),
            'code'         => "TR-60-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Başçiftlik",
            'slug'         => Str::slug("Başçiftlik", '-'),
            'code'         => "TR-60-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Erbaa",
            'slug'         => Str::slug("Erbaa", '-'),
            'code'         => "TR-60-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-60-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Niksar",
            'slug'         => Str::slug("Niksar", '-'),
            'code'         => "TR-60-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Pazar",
            'slug'         => Str::slug("Pazar", '-'),
            'code'         => "TR-60-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Reşadiye",
            'slug'         => Str::slug("Reşadiye", '-'),
            'code'         => "TR-60-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Sulusaray",
            'slug'         => Str::slug("Sulusaray", '-'),
            'code'         => "TR-60-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Turhal",
            'slug'         => Str::slug("Turhal", '-'),
            'code'         => "TR-60-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Yeşilyurt",
            'slug'         => Str::slug("Yeşilyurt", '-'),
            'code'         => "TR-60-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 74,
            'city_code' => "TR-60",
            'title'        => "Zile",
            'slug'         => Str::slug("Zile", '-'),
            'code'         => "TR-60-12",
            'status'       => 'ACTIVE',
        ]);

        // Trabzon
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Akçaabat",
            'slug'         => Str::slug("Akçaabat", '-'),
            'code'         => "TR-61-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Araklı",
            'slug'         => Str::slug("Araklı", '-'),
            'code'         => "TR-61-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Arsin",
            'slug'         => Str::slug("Arsin", '-'),
            'code'         => "TR-61-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Beşikdüzü",
            'slug'         => Str::slug("Beşikdüzü", '-'),
            'code'         => "TR-61-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Çarşıbaşı",
            'slug'         => Str::slug("Çarşıbaşı", '-'),
            'code'         => "TR-61-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Çaykara",
            'slug'         => Str::slug("Çaykara", '-'),
            'code'         => "TR-61-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Dernekpazarı",
            'slug'         => Str::slug("Dernekpazarı", '-'),
            'code'         => "TR-61-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Düzköy",
            'slug'         => Str::slug("Düzköy", '-'),
            'code'         => "TR-61-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Hayrat",
            'slug'         => Str::slug("Hayrat", '-'),
            'code'         => "TR-61-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Köprübaşı",
            'slug'         => Str::slug("Köprübaşı", '-'),
            'code'         => "TR-61-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Maçka",
            'slug'         => Str::slug("Maçka", '-'),
            'code'         => "TR-61-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Of",
            'slug'         => Str::slug("Of", '-'),
            'code'         => "TR-61-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Ortahisar",
            'slug'         => Str::slug("Ortahisar", '-'),
            'code'         => "TR-61-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Sürmene",
            'slug'         => Str::slug("Sürmene", '-'),
            'code'         => "TR-61-14",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Şalpazarı",
            'slug'         => Str::slug("Şalpazarı", '-'),
            'code'         => "TR-61-15",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Tonya",
            'slug'         => Str::slug("Tonya", '-'),
            'code'         => "TR-61-16",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Vakfıkebir",
            'slug'         => Str::slug("Vakfıkebir", '-'),
            'code'         => "TR-61-17",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 75,
            'city_code' => "TR-61",
            'title'        => "Yomra",
            'slug'         => Str::slug("Yomra", '-'),
            'code'         => "TR-61-18",
            'status'       => 'ACTIVE',
        ]);

        // Tunceli
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Çemişgezek",
            'slug'         => Str::slug("Çemişgezek", '-'),
            'code'         => "TR-62-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Hozat",
            'slug'         => Str::slug("Hozat", '-'),
            'code'         => "TR-62-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Mazgirt",
            'slug'         => Str::slug("Mazgirt", '-'),
            'code'         => "TR-62-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-62-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Nazımiye",
            'slug'         => Str::slug("Nazımiye", '-'),
            'code'         => "TR-62-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Ovacık",
            'slug'         => Str::slug("Ovacık", '-'),
            'code'         => "TR-62-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Pertek",
            'slug'         => Str::slug("Pertek", '-'),
            'code'         => "TR-62-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 76,
            'city_code' => "TR-62",
            'title'        => "Pülümür",
            'slug'         => Str::slug("Pülümür", '-'),
            'code'         => "TR-62-08",
            'status'       => 'ACTIVE',
        ]);

        // Uşak
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Banaz",
            'slug'         => Str::slug("Banaz", '-'),
            'code'         => "TR-64-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Eşme",
            'slug'         => Str::slug("Eşme", '-'),
            'code'         => "TR-64-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Karahallı",
            'slug'         => Str::slug("Karahallı", '-'),
            'code'         => "TR-64-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-64-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Sivaslı",
            'slug'         => Str::slug("Sivaslı", '-'),
            'code'         => "TR-64-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 77,
            'city_code' => "TR-64",
            'title'        => "Ulubey",
            'slug'         => Str::slug("Ulubey", '-'),
            'code'         => "TR-64-06",
            'status'       => 'ACTIVE',
        ]);

        // Van
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Bahçesaray",
            'slug'         => Str::slug("Bahçesaray", '-'),
            'code'         => "TR-65-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Başkale",
            'slug'         => Str::slug("Başkale", '-'),
            'code'         => "TR-65-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Çaldıran",
            'slug'         => Str::slug("Çaldıran", '-'),
            'code'         => "TR-65-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Çatak",
            'slug'         => Str::slug("Çatak", '-'),
            'code'         => "TR-65-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Edremit",
            'slug'         => Str::slug("Edremit", '-'),
            'code'         => "TR-65-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Erciş",
            'slug'         => Str::slug("Erciş", '-'),
            'code'         => "TR-65-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Gevaş",
            'slug'         => Str::slug("Gevaş", '-'),
            'code'         => "TR-65-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Gürpınar",
            'slug'         => Str::slug("Gürpınar", '-'),
            'code'         => "TR-65-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "İpekyolu",
            'slug'         => Str::slug("İpekyolu", '-'),
            'code'         => "TR-65-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Muradiye",
            'slug'         => Str::slug("Muradiye", '-'),
            'code'         => "TR-65-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Özalp",
            'slug'         => Str::slug("Özalp", '-'),
            'code'         => "TR-65-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Saray",
            'slug'         => Str::slug("Saray", '-'),
            'code'         => "TR-65-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 78,
            'city_code' => "TR-65",
            'title'        => "Tuşba",
            'slug'         => Str::slug("Tuşba", '-'),
            'code'         => "TR-65-13",
            'status'       => 'ACTIVE',
        ]);

        // Yalova
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Altınova",
            'slug'         => Str::slug("Altınova", '-'),
            'code'         => "TR-77-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Armutlu",
            'slug'         => Str::slug("Armutlu", '-'),
            'code'         => "TR-77-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Çınarcık",
            'slug'         => Str::slug("Çınarcık", '-'),
            'code'         => "TR-77-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Çiftlikköy",
            'slug'         => Str::slug("Çiftlikköy", '-'),
            'code'         => "TR-77-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-77-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 79,
            'city_code' => "TR-77",
            'title'        => "Termal",
            'slug'         => Str::slug("Termal", '-'),
            'code'         => "TR-77-06",
            'status'       => 'ACTIVE',
        ]);

        // Yozgat
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Akdağmadeni",
            'slug'         => Str::slug("Akdağmadeni", '-'),
            'code'         => "TR-66-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Aydıncık",
            'slug'         => Str::slug("Aydıncık", '-'),
            'code'         => "TR-66-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Boğazlıyan",
            'slug'         => Str::slug("Boğazlıyan", '-'),
            'code'         => "TR-66-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Çandır",
            'slug'         => Str::slug("Çandır", '-'),
            'code'         => "TR-66-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Çayıralan",
            'slug'         => Str::slug("Çayıralan", '-'),
            'code'         => "TR-66-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Çekerek",
            'slug'         => Str::slug("Çekerek", '-'),
            'code'         => "TR-66-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Kadışehri",
            'slug'         => Str::slug("Kadışehri", '-'),
            'code'         => "TR-66-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-66-08",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Saraykent",
            'slug'         => Str::slug("Saraykent", '-'),
            'code'         => "TR-66-09",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Sarıkaya",
            'slug'         => Str::slug("Sarıkaya", '-'),
            'code'         => "TR-66-10",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Sorgun",
            'slug'         => Str::slug("Sorgun", '-'),
            'code'         => "TR-66-11",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Şefaatli",
            'slug'         => Str::slug("Şefaatli", '-'),
            'code'         => "TR-66-12",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Yenifakılı",
            'slug'         => Str::slug("Yenifakılı", '-'),
            'code'         => "TR-66-13",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 80,
            'city_code' => "TR-66",
            'title'        => "Yerköy",
            'slug'         => Str::slug("Yerköy", '-'),
            'code'         => "TR-66-14",
            'status'       => 'ACTIVE',
        ]);

        // Zonguldak
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Alaplı",
            'slug'         => Str::slug("Alaplı", '-'),
            'code'         => "TR-67-01",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Çaycuma",
            'slug'         => Str::slug("Çaycuma", '-'),
            'code'         => "TR-67-02",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Devrek",
            'slug'         => Str::slug("Devrek", '-'),
            'code'         => "TR-67-03",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Ereğli",
            'slug'         => Str::slug("Ereğli", '-'),
            'code'         => "TR-67-04",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Gökçebey",
            'slug'         => Str::slug("Gökçebey", '-'),
            'code'         => "TR-67-05",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Kilimli",
            'slug'         => Str::slug("Kilimli", '-'),
            'code'         => "TR-67-06",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Kozlu",
            'slug'         => Str::slug("Kozlu", '-'),
            'code'         => "TR-67-07",
            'status'       => 'ACTIVE',
        ]);
        District::create([
            'city_id'   => 81,
            'city_code' => "TR-67",
            'title'        => "Merkez",
            'slug'         => Str::slug("Merkez", '-'),
            'code'         => "TR-67-08",
            'status'       => 'ACTIVE',
        ]);


    }
}
