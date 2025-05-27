<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {


        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Adana",
            'slug'         => Str::slug("Adana", '-'),
            'code'         => 'TR-01',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Adıyaman",
            'slug'         => Str::slug("Adıyaman", '-'),
            'code'         => 'TR-02',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Afyonkarahisar",
            'slug'         => Str::slug("Afyonkarahisar", '-'),
            'code'         => 'TR-03',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Ağrı",
            'slug'         => Str::slug("Ağrı", '-'),
            'code'         => 'TR-04',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Aksaray",
            'slug'         => Str::slug("Aksaray", '-'),
            'code'         => 'TR-68',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Amasya",
            'slug'         => Str::slug("Amasya", '-'),
            'code'         => 'TR-05',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Ankara",
            'slug'         => Str::slug("Ankara", '-'),
            'code'         => 'TR-06',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Antalya",
            'slug'         => Str::slug("Antalya", '-'),
            'code'         => 'TR-07',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Ardahan",
            'slug'         => Str::slug("Ardahan", '-'),
            'code'         => 'TR-75',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Artvin",
            'slug'         => Str::slug("Artvin", '-'),
            'code'         => 'TR-08',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Aydın",
            'slug'         => Str::slug("Aydın", '-'),
            'code'         => 'TR-09',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Balıkesir",
            'slug'         => Str::slug("Balıkesir", '-'),
            'code'         => 'TR-10',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bartın",
            'slug'         => Str::slug("Bartın", '-'),
            'code'         => 'TR-74',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Batman",
            'slug'         => Str::slug("Batman", '-'),
            'code'         => 'TR-72',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bayburt",
            'slug'         => Str::slug("Bayburt", '-'),
            'code'         => 'TR-69',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bilecik",
            'slug'         => Str::slug("Bilecik", '-'),
            'code'         => 'TR-11',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bingöl",
            'slug'         => Str::slug("Bingöl", '-'),
            'code'         => 'TR-12',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bitlis",
            'slug'         => Str::slug("Bitlis", '-'),
            'code'         => 'TR-13',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bolu",
            'slug'         => Str::slug("Bolu", '-'),
            'code'         => 'TR-14',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Burdur",
            'slug'         => Str::slug("Burdur", '-'),
            'code'         => 'TR-15',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Bursa",
            'slug'         => Str::slug("Bursa", '-'),
            'code'         => 'TR-16',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Çanakkale",
            'slug'         => Str::slug("Çanakkale", '-'),
            'code'         => 'TR-17',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Çankırı",
            'slug'         => Str::slug("Çankırı", '-'),
            'code'         => 'TR-18',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Çorum",
            'slug'         => Str::slug("Çorum", '-'),
            'code'         => 'TR-19',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Denizli",
            'slug'         => Str::slug("Denizli", '-'),
            'code'         => 'TR-20',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Diyarbakır",
            'slug'         => Str::slug("Diyarbakır", '-'),
            'code'         => 'TR-21',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Düzce",
            'slug'         => Str::slug("Düzce", '-'),
            'code'         => 'TR-81',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Edirne",
            'slug'         => Str::slug("Edirne", '-'),
            'code'         => 'TR-22',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Elazığ",
            'slug'         => Str::slug("Elazığ", '-'),
            'code'         => 'TR-23',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Erzincan",
            'slug'         => Str::slug("Erzincan", '-'),
            'code'         => 'TR-24',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Erzurum",
            'slug'         => Str::slug("Erzurum", '-'),
            'code'         => 'TR-25',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Eskişehir",
            'slug'         => Str::slug("Eskişehir", '-'),
            'code'         => 'TR-26',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Gaziantep",
            'slug'         => Str::slug("Gaziantep", '-'),
            'code'         => 'TR-27',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Giresun",
            'slug'         => Str::slug("Giresun", '-'),
            'code'         => 'TR-28',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Gümüşhane",
            'slug'         => Str::slug("Gümüşhane", '-'),
            'code'         => 'TR-29',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Hakkari",
            'slug'         => Str::slug("Hakkari", '-'),
            'code'         => 'TR-30',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Hatay",
            'slug'         => Str::slug("Hatay", '-'),
            'code'         => 'TR-31',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Iğdır",
            'slug'         => Str::slug("Iğdır", '-'),
            'code'         => 'TR-76',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Isparta",
            'slug'         => Str::slug("Isparta", '-'),
            'code'         => 'TR-32',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "İstanbul",
            'slug'         => Str::slug("İstanbul", '-'),
            'code'         => 'TR-34',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "İzmir",
            'slug'         => Str::slug("İzmir", '-'),
            'code'         => 'TR-35',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kahramanmaraş",
            'slug'         => Str::slug("Kahramanmaraş", '-'),
            'code'         => 'TR-46',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Karabük",
            'slug'         => Str::slug("Karabük", '-'),
            'code'         => 'TR-78',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Karaman",
            'slug'         => Str::slug("Karaman", '-'),
            'code'         => 'TR-70',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kars",
            'slug'         => Str::slug("Kars", '-'),
            'code'         => 'TR-36',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kastamonu",
            'slug'         => Str::slug("Kastamonu", '-'),
            'code'         => 'TR-37',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kayseri",
            'slug'         => Str::slug("Kayseri", '-'),
            'code'         => 'TR-38',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kırıkkale",
            'slug'         => Str::slug("Kırıkkale", '-'),
            'code'         => 'TR-71',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kırklareli",
            'slug'         => Str::slug("Kırklareli", '-'),
            'code'         => 'TR-39',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kırşehir",
            'slug'         => Str::slug("Kırşehir", '-'),
            'code'         => 'TR-40',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kilis",
            'slug'         => Str::slug("Kilis", '-'),
            'code'         => 'TR-79',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kocaeli",
            'slug'         => Str::slug("Kocaeli", '-'),
            'code'         => 'TR-41',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Konya",
            'slug'         => Str::slug("Konya", '-'),
            'code'         => 'TR-42',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Kütahya",
            'slug'         => Str::slug("Kütahya", '-'),
            'code'         => 'TR-43',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Malatya",
            'slug'         => Str::slug("Malatya", '-'),
            'code'         => 'TR-44',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Manisa",
            'slug'         => Str::slug("Manisa", '-'),
            'code'         => 'TR-45',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Mardin",
            'slug'         => Str::slug("Mardin", '-'),
            'code'         => 'TR-47',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Mersin",
            'slug'         => Str::slug("Mersin", '-'),
            'code'         => 'TR-33',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Muğla",
            'slug'         => Str::slug("Muğla", '-'),
            'code'         => 'TR-48',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Muş",
            'slug'         => Str::slug("Muş", '-'),
            'code'         => 'TR-49',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Nevşehir",
            'slug'         => Str::slug("Nevşehir", '-'),
            'code'         => 'TR-50',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Niğde",
            'slug'         => Str::slug("Niğde", '-'),
            'code'         => 'TR-51',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Ordu",
            'slug'         => Str::slug("Ordu", '-'),
            'code'         => 'TR-52',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Osmaniye",
            'slug'         => Str::slug("Osmaniye", '-'),
            'code'         => 'TR-80',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Rize",
            'slug'         => Str::slug("Rize", '-'),
            'code'         => 'TR-53',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Sakarya",
            'slug'         => Str::slug("Sakarya", '-'),
            'code'         => 'TR-54',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Samsun",
            'slug'         => Str::slug("Samsun", '-'),
            'code'         => 'TR-55',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Siirt",
            'slug'         => Str::slug("Siirt", '-'),
            'code'         => 'TR-56',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Sinop",
            'slug'         => Str::slug("Sinop", '-'),
            'code'         => 'TR-57',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Sivas",
            'slug'         => Str::slug("Sivas", '-'),
            'code'         => 'TR-58',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Şanlıurfa",
            'slug'         => Str::slug("Şanlıurfa", '-'),
            'code'         => 'TR-63',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Şırnak",
            'slug'         => Str::slug("Şırnak", '-'),
            'code'         => 'TR-73',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Tekirdağ",
            'slug'         => Str::slug("Tekirdağ", '-'),
            'code'         => 'TR-59',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Tokat",
            'slug'         => Str::slug("Tokat", '-'),
            'code'         => 'TR-60',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Trabzon",
            'slug'         => Str::slug("Trabzon", '-'),
            'code'         => 'TR-61',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Tunceli",
            'slug'         => Str::slug("Tunceli", '-'),
            'code'         => 'TR-62',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Uşak",
            'slug'         => Str::slug("Uşak", '-'),
            'code'         => 'TR-64',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Van",
            'slug'         => Str::slug("Van", '-'),
            'code'         => 'TR-65',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Yalova",
            'slug'         => Str::slug("Yalova", '-'),
            'code'         => 'TR-77',
            'status'       => 'ACTIVE',
        ]);
        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Yozgat",
            'slug'         => Str::slug("Yozgat", '-'),
            'code'         => 'TR-66',
            'status'       => 'ACTIVE',
        ]);

        City::create([
            'country_id'   => 214,
            'country_code' => "TR",
            'title'        => "Zonguldak",
            'slug'         => Str::slug("Zonguldak", '-'),
            'code'         => 'TR-67',
            'status'       => 'ACTIVE',
        ]);

    }
}
