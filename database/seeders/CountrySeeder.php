<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        Country::create([
            'title'             => 'Afganistan',
            'slug'              => Str::slug('Afganistan', '-'),
            'iso_code_2'        => 'AF',
            'iso_code_3'        => 'AFG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Arnavutluk',
            'slug'              => Str::slug('Arnavutluk', '-'),
            'iso_code_2'        => 'AL',
            'iso_code_3'        => 'ALB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cezayir',
            'slug'              => Str::slug('Cezayir', '-'),
            'iso_code_2'        => 'DZ',
            'iso_code_3'        => 'DZA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Amerikan Samoası',
            'slug'              => Str::slug('Amerikan Samoası', '-'),
            'iso_code_2'        => 'AS',
            'iso_code_3'        => 'ASM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Andora',
            'slug'              => Str::slug('Andora', '-'),
            'iso_code_2'        => 'AD',
            'iso_code_3'        => 'AND',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Angola',
            'slug'              => Str::slug('Angola', '-'),
            'iso_code_2'        => 'AO',
            'iso_code_3'        => 'AGO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Anguilla',
            'slug'              => Str::slug('Anguilla', '-'),
            'iso_code_2'        => 'AI',
            'iso_code_3'        => 'AIA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Antartika',
            'slug'              => Str::slug('Antartika', '-'),
            'iso_code_2'        => 'AQ',
            'iso_code_3'        => 'ATA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Antigua ve Barbuda',
            'slug'              => Str::slug('Antigua ve Barbuda', '-'),
            'iso_code_2'        => 'AG',
            'iso_code_3'        => 'ATG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Arjantin',
            'slug'              => Str::slug('Arjantin', '-'),
            'iso_code_2'        => 'AR',
            'iso_code_3'        => 'ARG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Ermenistan',
            'slug'              => Str::slug('Ermenistan', '-'),
            'iso_code_2'        => 'AM',
            'iso_code_3'        => 'ARM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Aruba',
            'slug'              => Str::slug('Aruba', '-'),
            'iso_code_2'        => 'AW',
            'iso_code_3'        => 'ABW',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Avusturalya',
            'slug'              => Str::slug('Aruba', '-'),
            'iso_code_2'        => 'AU',
            'iso_code_3'        => 'AUS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Avusturya',
            'slug'              => Str::slug('Avusturya', '-'),
            'iso_code_2'        => 'AT',
            'iso_code_3'        => 'AUT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Azerbeycan',
            'slug'              => Str::slug('Azerbeycan', '-'),
            'iso_code_2'        => 'AZ',
            'iso_code_3'        => 'AZE',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => 'Bahamalar',
            'slug'              => Str::slug('Bahamalar', '-'),
            'iso_code_2'        => 'BS',
            'iso_code_3'        => 'BHS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bahreyn',
            'slug'              => Str::slug('Bahreyn', '-'),
            'iso_code_2'        => 'BH',
            'iso_code_3'        => 'BHR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bangladeş',
            'slug'              => Str::slug('Bangladeş', '-'),
            'iso_code_2'        => 'BD',
            'iso_code_3'        => 'BGD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Barbados',
            'slug'              => Str::slug('Barbados', '-'),
            'iso_code_2'        => 'BB',
            'iso_code_3'        => 'BRB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Belarus',
            'slug'              => Str::slug('Belarus', '-'),
            'iso_code_2'        => 'BY',
            'iso_code_3'        => 'BLR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Belçika',
            'slug'              => Str::slug('Belçika', '-'),
            'iso_code_2'        => 'BE',
            'iso_code_3'        => 'BEL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Belize',
            'slug'              => Str::slug('Belize', '-'),
            'iso_code_2'        => 'BZ',
            'iso_code_3'        => 'BLZ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Benin',
            'slug'              => Str::slug('Benin', '-'),
            'iso_code_2'        => 'BJ',
            'iso_code_3'        => 'BEN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bermuda',
            'slug'              => Str::slug('Bermuda', '-'),
            'iso_code_2'        => 'BM',
            'iso_code_3'        => 'BMU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Butan',
            'slug'              => Str::slug('Butan', '-'),
            'iso_code_2'        => 'BT',
            'iso_code_3'        => 'BTN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bolivya',
            'slug'              => Str::slug('Bolivya', '-'),
            'iso_code_2'        => 'BO',
            'iso_code_3'        => 'BOL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bosna Hersek',
            'slug'              => Str::slug('Bosna Hersek', '-'),
            'iso_code_2'        => 'BA',
            'iso_code_3'        => 'BIH',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Botswana',
            'slug'              => Str::slug('Botswana', '-'),
            'iso_code_2'        => 'BW',
            'iso_code_3'        => 'BWA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bouvet Island',
            'slug'              => Str::slug('Bouvet Island', '-'),
            'iso_code_2'        => 'BV',
            'iso_code_3'        => 'BVT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Brazilya',
            'slug'              => Str::slug('Brazilya', '-'),
            'iso_code_2'        => 'BR',
            'iso_code_3'        => 'BRA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'British Indian Ocean Territory',
            'slug'              => Str::slug('British Indian Ocean Territory', '-'),
            'iso_code_2'        => 'IO',
            'iso_code_3'        => 'IOT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Brunei Darussalam',
            'slug'              => Str::slug('Brunei Darussalam', '-'),
            'iso_code_2'        => 'BN',
            'iso_code_3'        => 'BRN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Bulgaristan',
            'slug'              => Str::slug('Bulgaristan', '-'),
            'iso_code_2'        => 'BG',
            'iso_code_3'        => 'BGR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Burkina Faso',
            'slug'              => Str::slug('Burkina Faso', '-'),
            'iso_code_2'        => 'BF',
            'iso_code_3'        => 'BFA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Burundi',
            'slug'              => Str::slug('Burundi', '-'),
            'iso_code_2'        => 'BI',
            'iso_code_3'        => 'BDI',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => 'Cambodia',
            'slug'              => Str::slug('Burundi', '-'),
            'iso_code_2'        => 'KH',
            'iso_code_3'        => 'KHM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cameroon',
            'slug'              => Str::slug('Cameroon', '-'),
            'iso_code_2'        => 'CM',
            'iso_code_3'        => 'CMR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Kanada',
            'slug'              => Str::slug('Kanada', '-'),
            'iso_code_2'        => 'CA',
            'iso_code_3'        => 'CAN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cape Verde',
            'slug'              => Str::slug('Cape Verde', '-'),
            'iso_code_2'        => 'CV',
            'iso_code_3'        => 'CPV',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cayman Islands',
            'slug'              => Str::slug('Cayman Islands', '-'),
            'iso_code_2'        => 'KY',
            'iso_code_3'        => 'CYM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Central African Republic',
            'slug'              => Str::slug('Central African Republic', '-'),
            'iso_code_2'        => 'CF',
            'iso_code_3'        => 'CAF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Chad',
            'slug'              => Str::slug('Chad', '-'),
            'iso_code_2'        => 'TD',
            'iso_code_3'        => 'TCD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Chile',
            'slug'              => Str::slug('Chile', '-'),
            'iso_code_2'        => 'CL',
            'iso_code_3'        => 'CHL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'China',
            'slug'              => Str::slug('China', '-'),
            'iso_code_2'        => 'CN',
            'iso_code_3'        => 'CHN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Christmas Island',
            'slug'              => Str::slug('Christmas Island', '-'),
            'iso_code_2'        => 'CX',
            'iso_code_3'        => 'CXR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cocos (Keeling) Islands',
            'slug'              => Str::slug('Cocos (Keeling) Islands', '-'),
            'iso_code_2'        => 'CC',
            'iso_code_3'        => 'CCK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Colombia',
            'slug'              => Str::slug('Colombia', '-'),
            'iso_code_2'        => 'CO',
            'iso_code_3'        => 'COL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Comoros',
            'slug'              => Str::slug('Comoros', '-'),
            'iso_code_2'        => 'KM',
            'iso_code_3'        => 'COM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Congo',
            'slug'              => Str::slug('Congo', '-'),
            'iso_code_2'        => 'CG',
            'iso_code_3'        => 'COG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Cook Islands',
            'slug'              => Str::slug('Cook Islands', '-'),
            'iso_code_2'        => 'CK',
            'iso_code_3'        => 'COK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => 'Costa Rica',
            'slug'              => Str::slug('Costa Rica', '-'),
            'iso_code_2'        => 'CR',
            'iso_code_3'        => 'CRI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Cote D'Ivoire",
            'slug'              => Str::slug("Cote D'Ivoire", '-'),
            'iso_code_2'        => 'CI',
            'iso_code_3'        => 'CIV',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Croatia",
            'slug'              => Str::slug("Croatia", '-'),
            'iso_code_2'        => 'HR',
            'iso_code_3'        => 'HRV',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Cuba",
            'slug'              => Str::slug("Cuba", '-'),
            'iso_code_2'        => 'CU',
            'iso_code_3'        => 'CUB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kıbrıs",
            'slug'              => Str::slug("Cyprus", '-'),
            'iso_code_2'        => 'CY',
            'iso_code_3'        => 'CYP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Czech Republic",
            'slug'              => Str::slug("Czech Republic", '-'),
            'iso_code_2'        => 'CZ',
            'iso_code_3'        => 'CZE',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Denmark",
            'slug'              => Str::slug("Denmark", '-'),
            'iso_code_2'        => 'DK',
            'iso_code_3'        => 'DNK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Djibouti",
            'slug'              => Str::slug("Djibouti", '-'),
            'iso_code_2'        => 'DJ',
            'iso_code_3'        => 'DJI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Dominica",
            'slug'              => Str::slug("Dominica", '-'),
            'iso_code_2'        => 'DM',
            'iso_code_3'        => 'DMA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Dominican Republic",
            'slug'              => Str::slug("Dominican Republic", '-'),
            'iso_code_2'        => 'DO',
            'iso_code_3'        => 'DOM',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "East Timor",
            'slug'              => Str::slug("East Timor", '-'),
            'iso_code_2'        => 'TL',
            'iso_code_3'        => 'TLS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Ekvador",
            'slug'              => Str::slug("Ecuador", '-'),
            'iso_code_2'        => 'EC',
            'iso_code_3'        => 'ECU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mısır",
            'slug'              => Str::slug("Egypt", '-'),
            'iso_code_2'        => 'EG',
            'iso_code_3'        => 'EGY',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "El Salvador",
            'slug'              => Str::slug("El Salvador", '-'),
            'iso_code_2'        => 'SV',
            'iso_code_3'        => 'SLV',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Equatorial Guinea",
            'slug'              => Str::slug("Equatorial Guinea", '-'),
            'iso_code_2'        => 'GQ',
            'iso_code_3'        => 'GNQ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Eritrea",
            'slug'              => Str::slug("Eritrea", '-'),
            'iso_code_2'        => 'ER',
            'iso_code_3'        => 'ERI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Estonya",
            'slug'              => Str::slug("Estonia", '-'),
            'iso_code_2'        => 'EE',
            'iso_code_3'        => 'EST',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Etiopya",
            'slug'              => Str::slug("Ethiopia", '-'),
            'iso_code_2'        => 'ET',
            'iso_code_3'        => 'ETH',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Falkland Islands (Malvinas)",
            'slug'              => Str::slug("Falkland Islands (Malvinas)", '-'),
            'iso_code_2'        => 'FK',
            'iso_code_3'        => 'FLK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Faroe Islands",
            'slug'              => Str::slug("Faroe Islands", '-'),
            'iso_code_2'        => 'FO',
            'iso_code_3'        => 'FRO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Fiji",
            'slug'              => Str::slug("Fiji", '-'),
            'iso_code_2'        => 'FJ',
            'iso_code_3'        => 'FJI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Finlandiya",
            'slug'              => Str::slug("Finland", '-'),
            'iso_code_2'        => 'FI',
            'iso_code_3'        => 'FIN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "France, Metropolitan",
            'slug'              => Str::slug("France, Metropolitan", '-'),
            'iso_code_2'        => 'FR',
            'iso_code_3'        => 'FRA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "French Guiana",
            'slug'              => Str::slug("French Guiana", '-'),
            'iso_code_2'        => 'GF',
            'iso_code_3'        => 'GUF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "French Polynesia",
            'slug'              => Str::slug("French Polynesia", '-'),
            'iso_code_2'        => 'PF',
            'iso_code_3'        => 'PYF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "French Southern Territories",
            'slug'              => Str::slug("French Southern Territories", '-'),
            'iso_code_2'        => 'TF',
            'iso_code_3'        => 'ATF',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Gabon",
            'slug'              => Str::slug("Gabon", '-'),
            'iso_code_2'        => 'GA',
            'iso_code_3'        => 'GAB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Gambia",
            'slug'              => Str::slug("Gambia", '-'),
            'iso_code_2'        => 'GM',
            'iso_code_3'        => 'GMB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Gürcistan",
            'slug'              => Str::slug("Georgia", '-'),
            'iso_code_2'        => 'GE',
            'iso_code_3'        => 'GEO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Almanya",
            'slug'              => Str::slug("Germany", '-'),
            'iso_code_2'        => 'DE',
            'iso_code_3'        => 'DEU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Gana",
            'slug'              => Str::slug("Ghana", '-'),
            'iso_code_2'        => 'GH',
            'iso_code_3'        => 'GHA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Cebelitarık",
            'slug'              => Str::slug("Gibraltar", '-'),
            'iso_code_2'        => 'GI',
            'iso_code_3'        => 'GIB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Yunanistan",
            'slug'              => Str::slug("Greece", '-'),
            'iso_code_2'        => 'GR',
            'iso_code_3'        => 'GRC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Grönland",
            'slug'              => Str::slug("Greenland", '-'),
            'iso_code_2'        => 'GL',
            'iso_code_3'        => 'GRL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Grenada",
            'slug'              => Str::slug("Grenada", '-'),
            'iso_code_2'        => 'GD',
            'iso_code_3'        => 'GRD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guadeloupe",
            'slug'              => Str::slug("Guadeloupe", '-'),
            'iso_code_2'        => 'GP',
            'iso_code_3'        => 'GLP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guam",
            'slug'              => Str::slug("Guam", '-'),
            'iso_code_2'        => 'GU',
            'iso_code_3'        => 'GUM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guatemala",
            'slug'              => Str::slug("Guatemala", '-'),
            'iso_code_2'        => 'GT',
            'iso_code_3'        => 'GTM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guinea",
            'slug'              => Str::slug("Guinea", '-'),
            'iso_code_2'        => 'GN',
            'iso_code_3'        => 'GIN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guinea-Bissau",
            'slug'              => Str::slug("Guinea-Bissau", '-'),
            'iso_code_2'        => 'GW',
            'iso_code_3'        => 'GNB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guyana",
            'slug'              => Str::slug("Guyana", '-'),
            'iso_code_2'        => 'GY',
            'iso_code_3'        => 'GUY',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Haiti",
            'slug'              => Str::slug("Haiti", '-'),
            'iso_code_2'        => 'HT',
            'iso_code_3'        => 'HTI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Heard and Mc Donald Islands",
            'slug'              => Str::slug("Heard and Mc Donald Islands", '-'),
            'iso_code_2'        => 'HM',
            'iso_code_3'        => 'HMD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Honduras",
            'slug'              => Str::slug("Honduras", '-'),
            'iso_code_2'        => 'HN',
            'iso_code_3'        => 'HND',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Hong Kong",
            'slug'              => Str::slug("Hong Kong", '-'),
            'iso_code_2'        => 'HK',
            'iso_code_3'        => 'HKG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Macaristan",
            'slug'              => Str::slug("Hungary", '-'),
            'iso_code_2'        => 'HU',
            'iso_code_3'        => 'HUN',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "İzlanda",
            'slug'              => Str::slug("Iceland", '-'),
            'iso_code_2'        => 'IS',
            'iso_code_3'        => 'ISL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Hindistan",
            'slug'              => Str::slug("India", '-'),
            'iso_code_2'        => 'IN',
            'iso_code_3'        => 'IND',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Endonezya",
            'slug'              => Str::slug("India", '-'),
            'iso_code_2'        => 'ID',
            'iso_code_3'        => 'IDN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İran",
            'slug'              => Str::slug("Iran (Islamic Republic of)", '-'),
            'iso_code_2'        => 'IR',
            'iso_code_3'        => 'IRN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Irak",
            'slug'              => Str::slug("Iraq", '-'),
            'iso_code_2'        => 'IQ',
            'iso_code_3'        => 'IRQ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İrlanda",
            'slug'              => Str::slug("Ireland", '-'),
            'iso_code_2'        => 'IE',
            'iso_code_3'        => 'IRL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İsrail",
            'slug'              => Str::slug("Israel", '-'),
            'iso_code_2'        => 'IL',
            'iso_code_3'        => 'ISR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İtalya",
            'slug'              => Str::slug("Italy", '-'),
            'iso_code_2'        => 'IT',
            'iso_code_3'        => 'ITA',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Jameika",
            'slug'              => Str::slug("Jamaica", '-'),
            'iso_code_2'        => 'JM',
            'iso_code_3'        => 'JAM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Japonya",
            'slug'              => Str::slug("Japan", '-'),
            'iso_code_2'        => 'JP',
            'iso_code_3'        => 'JPN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Ürdün",
            'slug'              => Str::slug("Jordan", '-'),
            'iso_code_2'        => 'JO',
            'iso_code_3'        => 'JOR',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Kazakistan",
            'slug'              => Str::slug("Kazakhstan", '-'),
            'iso_code_2'        => 'KZ',
            'iso_code_3'        => 'KAZ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kenya",
            'slug'              => Str::slug("Kenya", '-'),
            'iso_code_2'        => 'KE',
            'iso_code_3'        => 'KEN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kiribati",
            'slug'              => Str::slug("Kiribati", '-'),
            'iso_code_2'        => 'KI',
            'iso_code_3'        => 'KIR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kuzey Kore",
            'slug'              => Str::slug("North Korea", '-'),
            'iso_code_2'        => 'KP',
            'iso_code_3'        => 'PRK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Güney Kore",
            'slug'              => Str::slug("South Korea", '-'),
            'iso_code_2'        => 'KR',
            'iso_code_3'        => 'KOR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kuveyt",
            'slug'              => Str::slug("Kuwait", '-'),
            'iso_code_2'        => 'KW',
            'iso_code_3'        => 'KWT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kırgızistan",
            'slug'              => Str::slug("Kyrgyzstan", '-'),
            'iso_code_2'        => 'KG',
            'iso_code_3'        => 'KGZ',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Lao People's Democratic Republic",
            'slug'              => Str::slug("Lao People's Democratic Republic", '-'),
            'iso_code_2'        => 'LA',
            'iso_code_3'        => 'LAO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Letonya",
            'slug'              => Str::slug("Latvia", '-'),
            'iso_code_2'        => 'LV',
            'iso_code_3'        => 'LVA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Lübnan",
            'slug'              => Str::slug("Lebanon", '-'),
            'iso_code_2'        => 'LB',
            'iso_code_3'        => 'LBN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Lesotho",
            'slug'              => Str::slug("Lesotho", '-'),
            'iso_code_2'        => 'LS',
            'iso_code_3'        => 'LSO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Liberya",
            'slug'              => Str::slug("Liberia", '-'),
            'iso_code_2'        => 'LR',
            'iso_code_3'        => 'LBR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Libya",
            'slug'              => Str::slug("Libyan Arab Jamahiriya", '-'),
            'iso_code_2'        => 'LY',
            'iso_code_3'        => 'LBY',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Liechtenstein",
            'slug'              => Str::slug("Liechtenstein", '-'),
            'iso_code_2'        => 'LI',
            'iso_code_3'        => 'LIE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Litvanya",
            'slug'              => Str::slug("Lithuania", '-'),
            'iso_code_2'        => 'LT',
            'iso_code_3'        => 'LTU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Lüksemburg",
            'slug'              => Str::slug("Luxembourg", '-'),
            'iso_code_2'        => 'LU',
            'iso_code_3'        => 'LUX',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Macau",
            'slug'              => Str::slug("Macau", '-'),
            'iso_code_2'        => 'MO',
            'iso_code_3'        => 'MAC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kuzey Makedonya",
            'slug'              => Str::slug("FYROM", '-'),
            'iso_code_2'        => 'MK',
            'iso_code_3'        => 'MKD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Madagaskar",
            'slug'              => Str::slug("Madagascar", '-'),
            'iso_code_2'        => 'MG',
            'iso_code_3'        => 'MDG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Malawi",
            'slug'              => Str::slug("Malawi", '-'),
            'iso_code_2'        => 'MW',
            'iso_code_3'        => 'MWI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Malezya",
            'slug'              => Str::slug("Malaysia", '-'),
            'iso_code_2'        => 'MY',
            'iso_code_3'        => 'MYS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Maldivler",
            'slug'              => Str::slug("Maldives", '-'),
            'iso_code_2'        => 'MV',
            'iso_code_3'        => 'MDV',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mali",
            'slug'              => Str::slug("Mali", '-'),
            'iso_code_2'        => 'ML',
            'iso_code_3'        => 'MLI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Malta",
            'slug'              => Str::slug("Malta", '-'),
            'iso_code_2'        => 'MT',
            'iso_code_3'        => 'MLT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Marshall Islands",
            'slug'              => Str::slug("Marshall Islands", '-'),
            'iso_code_2'        => 'MH',
            'iso_code_3'        => 'MHL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Martinique",
            'slug'              => Str::slug("Martinique", '-'),
            'iso_code_2'        => 'MQ',
            'iso_code_3'        => 'MTQ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Moritanya",
            'slug'              => Str::slug("Mauritania", '-'),
            'iso_code_2'        => 'MR',
            'iso_code_3'        => 'MRT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mauritius",
            'slug'              => Str::slug("Mauritius", '-'),
            'iso_code_2'        => 'MU',
            'iso_code_3'        => 'MUS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mayotte",
            'slug'              => Str::slug("Mayotte", '-'),
            'iso_code_2'        => 'YT',
            'iso_code_3'        => 'MYT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Meksika",
            'slug'              => Str::slug("Mexico", '-'),
            'iso_code_2'        => 'MX',
            'iso_code_3'        => 'MEX',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mikronezya",
            'slug'              => Str::slug("Micronesia, Federated States of", '-'),
            'iso_code_2'        => 'FM',
            'iso_code_3'        => 'FSM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Moldova",
            'slug'              => Str::slug("Moldova, Republic of", '-'),
            'iso_code_2'        => 'MD',
            'iso_code_3'        => 'MDA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Monaco",
            'slug'              => Str::slug("Monaco", '-'),
            'iso_code_2'        => 'MC',
            'iso_code_3'        => 'MCO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Moğolistan",
            'slug'              => Str::slug("Mongolia", '-'),
            'iso_code_2'        => 'MN',
            'iso_code_3'        => 'MNG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Montserrat",
            'slug'              => Str::slug("Montserrat", '-'),
            'iso_code_2'        => 'MS',
            'iso_code_3'        => 'MSR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Morocco",
            'slug'              => Str::slug("Morocco", '-'),
            'iso_code_2'        => 'MA',
            'iso_code_3'        => 'MAR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Mozambik",
            'slug'              => Str::slug("Mozambique", '-'),
            'iso_code_2'        => 'MZ',
            'iso_code_3'        => 'MOZ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Myanmar",
            'slug'              => Str::slug("Myanmar", '-'),
            'iso_code_2'        => 'MM',
            'iso_code_3'        => 'MMR',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Namibya",
            'slug'              => Str::slug("Namibia", '-'),
            'iso_code_2'        => 'NA',
            'iso_code_3'        => 'NAM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Nauru",
            'slug'              => Str::slug("Nauru", '-'),
            'iso_code_2'        => 'NR',
            'iso_code_3'        => 'NRU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Nepal",
            'slug'              => Str::slug("Nepal", '-'),
            'iso_code_2'        => 'NP',
            'iso_code_3'        => 'NPL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Hollanda",
            'slug'              => Str::slug("Netherlands", '-'),
            'iso_code_2'        => 'NL',
            'iso_code_3'        => 'NLD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Hollanda Antilleri",
            'slug'              => Str::slug("Netherlands Antilles", '-'),
            'iso_code_2'        => 'AN',
            'iso_code_3'        => 'ANT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Yeni Kaledonya",
            'slug'              => Str::slug("New Caledonia", '-'),
            'iso_code_2'        => 'NC',
            'iso_code_3'        => 'NCL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Yeni Zellanda",
            'slug'              => Str::slug("New Zealand", '-'),
            'iso_code_2'        => 'NZ',
            'iso_code_3'        => 'NZL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Nicaragua",
            'slug'              => Str::slug("Nicaragua", '-'),
            'iso_code_2'        => 'NI',
            'iso_code_3'        => 'NIC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Nijer",
            'slug'              => Str::slug("Niger", '-'),
            'iso_code_2'        => 'NE',
            'iso_code_3'        => 'NER',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Nijerya",
            'slug'              => Str::slug("Nigeria", '-'),
            'iso_code_2'        => 'NG',
            'iso_code_3'        => 'NGA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Niue",
            'slug'              => Str::slug("Niue", '-'),
            'iso_code_2'        => 'NU',
            'iso_code_3'        => 'NIU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Norfolk Adası",
            'slug'              => Str::slug("Norfolk Island", '-'),
            'iso_code_2'        => 'NF',
            'iso_code_3'        => 'NFK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Northern Mariana Islands",
            'slug'              => Str::slug("Northern Mariana Islands", '-'),
            'iso_code_2'        => 'MP',
            'iso_code_3'        => 'MNP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Norveç",
            'slug'              => Str::slug("Norway", '-'),
            'iso_code_2'        => 'NO',
            'iso_code_3'        => 'NOR',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Umman",
            'slug'              => Str::slug("Oman", '-'),
            'iso_code_2'        => 'OM',
            'iso_code_3'        => 'OMN',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Pakistan",
            'slug'              => Str::slug("Pakistan", '-'),
            'iso_code_2'        => 'PK',
            'iso_code_3'        => 'PAK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Palau",
            'slug'              => Str::slug("Palau", '-'),
            'iso_code_2'        => 'PW',
            'iso_code_3'        => 'PLW',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Panama",
            'slug'              => Str::slug("Panama", '-'),
            'iso_code_2'        => 'PA',
            'iso_code_3'        => 'PAN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Papua Yeni Gine",
            'slug'              => Str::slug("Papua New Guinea", '-'),
            'iso_code_2'        => 'PG',
            'iso_code_3'        => 'PNG',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Paraguay",
            'slug'              => Str::slug("Paraguay", '-'),
            'iso_code_2'        => 'PY',
            'iso_code_3'        => 'PRY',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Peru",
            'slug'              => Str::slug("Peru", '-'),
            'iso_code_2'        => 'PE',
            'iso_code_3'        => 'PER',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Filipinler",
            'slug'              => Str::slug("Philippines", '-'),
            'iso_code_2'        => 'PH',
            'iso_code_3'        => 'PHL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Pitcairn",
            'slug'              => Str::slug("Pitcairn", '-'),
            'iso_code_2'        => 'PN',
            'iso_code_3'        => 'PCN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Polonya",
            'slug'              => Str::slug("Poland", '-'),
            'iso_code_2'        => 'PL',
            'iso_code_3'        => 'POL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Portekiz",
            'slug'              => Str::slug("Portugal", '-'),
            'iso_code_2'        => 'PT',
            'iso_code_3'        => 'PRT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Porto Riko",
            'slug'              => Str::slug("Puerto Rico", '-'),
            'iso_code_2'        => 'PR',
            'iso_code_3'        => 'PRI',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Katar",
            'slug'              => Str::slug("Qatar", '-'),
            'iso_code_2'        => 'QA',
            'iso_code_3'        => 'QAT',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Reunion",
            'slug'              => Str::slug("Reunion", '-'),
            'iso_code_2'        => 'RE',
            'iso_code_3'        => 'REU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Romanya",
            'slug'              => Str::slug("Romania", '-'),
            'iso_code_2'        => 'RO',
            'iso_code_3'        => 'ROM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Rusya",
            'slug'              => Str::slug("Russian Federation", '-'),
            'iso_code_2'        => 'RU',
            'iso_code_3'        => 'RUS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Ruanda",
            'slug'              => Str::slug("Rwanda", '-'),
            'iso_code_2'        => 'RW',
            'iso_code_3'        => 'RWA',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Saint Kitts and Nevis",
            'slug'              => Str::slug("Saint Kitts and Nevis", '-'),
            'iso_code_2'        => 'KN',
            'iso_code_3'        => 'KNA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Saint Lucia",
            'slug'              => Str::slug("Saint Lucia", '-'),
            'iso_code_2'        => 'LC',
            'iso_code_3'        => 'LCA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Saint Vincent and the Grenadines",
            'slug'              => Str::slug("Saint Vincent and the Grenadines", '-'),
            'iso_code_2'        => 'VC',
            'iso_code_3'        => 'VCT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Samoa",
            'slug'              => Str::slug("Samoa", '-'),
            'iso_code_2'        => 'WS',
            'iso_code_3'        => 'WSM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "San Marino",
            'slug'              => Str::slug("San Marino", '-'),
            'iso_code_2'        => 'SM',
            'iso_code_3'        => 'SMR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sao Tome and Principe",
            'slug'              => Str::slug("Sao Tome and Principe", '-'),
            'iso_code_2'        => 'ST',
            'iso_code_3'        => 'STP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sudi Arabistan",
            'slug'              => Str::slug("Saudi Arabia", '-'),
            'iso_code_2'        => 'SA',
            'iso_code_3'        => 'SAU',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Senegal",
            'slug'              => Str::slug("Senegal", '-'),
            'iso_code_2'        => 'SN',
            'iso_code_3'        => 'SEN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Seychelles",
            'slug'              => Str::slug("Seychelles", '-'),
            'iso_code_2'        => 'SC',
            'iso_code_3'        => 'SYC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sierra Leone",
            'slug'              => Str::slug("Sierra Leone", '-'),
            'iso_code_2'        => 'SL',
            'iso_code_3'        => 'SLE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Singapur",
            'slug'              => Str::slug("Singapore", '-'),
            'iso_code_2'        => 'SG',
            'iso_code_3'        => 'SGP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Slovakya",
            'slug'              => Str::slug("Slovak Republic", '-'),
            'iso_code_2'        => 'SK',
            'iso_code_3'        => 'SVK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Slovenya",
            'slug'              => Str::slug("Slovenia", '-'),
            'iso_code_2'        => 'SI',
            'iso_code_3'        => 'SVN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Solomon Islands",
            'slug'              => Str::slug("Solomon Islands", '-'),
            'iso_code_2'        => 'SB',
            'iso_code_3'        => 'SLB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Somali",
            'slug'              => Str::slug("Somalia", '-'),
            'iso_code_2'        => 'SO',
            'iso_code_3'        => 'SOM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Güney Afrika",
            'slug'              => Str::slug("South Africa", '-'),
            'iso_code_2'        => 'ZA',
            'iso_code_3'        => 'ZAF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Güney Georgia ve Güney Sandwich Adaları",
            'slug'              => Str::slug("South Georgia & South Sandwich Islands", '-'),
            'iso_code_2'        => 'GS',
            'iso_code_3'        => 'SGS',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İspanya",
            'slug'              => Str::slug("Spain", '-'),
            'iso_code_2'        => 'ES',
            'iso_code_3'        => 'ESP',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sri Lanka",
            'slug'              => Str::slug("Sri Lanka", '-'),
            'iso_code_2'        => 'LK',
            'iso_code_3'        => 'LKA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "St. Helena",
            'slug'              => Str::slug("St. Helena", '-'),
            'iso_code_2'        => 'SH',
            'iso_code_3'        => 'SHN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "St. Pierre and Miquelon",
            'slug'              => Str::slug("St. Pierre and Miquelon", '-'),
            'iso_code_2'        => 'PM',
            'iso_code_3'        => 'SPM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sudan",
            'slug'              => Str::slug("Sudan", '-'),
            'iso_code_2'        => 'SD',
            'iso_code_3'        => 'SDN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Suriname",
            'slug'              => Str::slug("Suriname", '-'),
            'iso_code_2'        => 'SR',
            'iso_code_3'        => 'SUR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Svalbard and Jan Mayen Islands",
            'slug'              => Str::slug("Svalbard and Jan Mayen Islands", '-'),
            'iso_code_2'        => 'SJ',
            'iso_code_3'        => 'SJM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Swaziland",
            'slug'              => Str::slug("Swaziland", '-'),
            'iso_code_2'        => 'SZ',
            'iso_code_3'        => 'SWZ',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İsveç",
            'slug'              => Str::slug("Sweden", '-'),
            'iso_code_2'        => 'SE',
            'iso_code_3'        => 'SWE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "İsviçre",
            'slug'              => Str::slug("Switzerland", '-'),
            'iso_code_2'        => 'CH',
            'iso_code_3'        => 'CHE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Suriye",
            'slug'              => Str::slug("Syrian Arab Republic", '-'),
            'iso_code_2'        => 'SY',
            'iso_code_3'        => 'SYR',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Taiwan",
            'slug'              => Str::slug("Taiwan", '-'),
            'iso_code_2'        => 'TW',
            'iso_code_3'        => 'TWN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tacikistan",
            'slug'              => Str::slug("Tajikistan", '-'),
            'iso_code_2'        => 'TJ',
            'iso_code_3'        => 'TJK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tanzanya",
            'slug'              => Str::slug("Tanzania, United Republic of", '-'),
            'iso_code_2'        => 'TZ',
            'iso_code_3'        => 'TZA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tayland",
            'slug'              => Str::slug("Thailand", '-'),
            'iso_code_2'        => 'TH',
            'iso_code_3'        => 'THA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Togo",
            'slug'              => Str::slug("Togo", '-'),
            'iso_code_2'        => 'TG',
            'iso_code_3'        => 'TGO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tokelau",
            'slug'              => Str::slug("Tokelau", '-'),
            'iso_code_2'        => 'TK',
            'iso_code_3'        => 'TKL',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tonga",
            'slug'              => Str::slug("Tonga", '-'),
            'iso_code_2'        => 'TO',
            'iso_code_3'        => 'TON',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Trinidad and Tobago",
            'slug'              => Str::slug("Trinidad and Tobago", '-'),
            'iso_code_2'        => 'TT',
            'iso_code_3'        => 'TTO',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tunus",
            'slug'              => Str::slug("Tunisia", '-'),
            'iso_code_2'        => 'TN',
            'iso_code_3'        => 'TUN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Türkiye",
            'slug'              => Str::slug("Türkiye", '-'),
            'iso_code_2'        => 'TR',
            'iso_code_3'        => 'TUR',
            'status'            => 'ACTIVE',
        ]);
        Country::create([
            'title'             => "Türkmenistan",
            'slug'              => Str::slug("Türkmenistan", '-'),
            'iso_code_2'        => 'TM',
            'iso_code_3'        => 'TKM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Turks and Caicos Islands",
            'slug'              => Str::slug("Turks and Caicos Islands", '-'),
            'iso_code_2'        => 'TC',
            'iso_code_3'        => 'TCA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tuvalu",
            'slug'              => Str::slug("Tuvalu", '-'),
            'iso_code_2'        => 'TV',
            'iso_code_3'        => 'TUV',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Uganda",
            'slug'              => Str::slug("Uganda", '-'),
            'iso_code_2'        => 'UG',
            'iso_code_3'        => 'UGA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Ukrayna",
            'slug'              => Str::slug("Ukraine", '-'),
            'iso_code_2'        => 'UA',
            'iso_code_3'        => 'UKR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "United Arab Emirates",
            'slug'              => Str::slug("United Arab Emirates", '-'),
            'iso_code_2'        => 'AE',
            'iso_code_3'        => 'ARE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Birleşik Krallık",
            'slug'              => Str::slug("United Kingdom", '-'),
            'iso_code_2'        => 'GB',
            'iso_code_3'        => 'GBR',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Amerika Birleşik Devletleri",
            'slug'              => Str::slug("United States", '-'),
            'iso_code_2'        => 'US',
            'iso_code_3'        => 'USA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "United States Minor Outlying Islands",
            'slug'              => Str::slug("United States Minor Outlying Islands", '-'),
            'iso_code_2'        => 'UM',
            'iso_code_3'        => 'UMI',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Uruguay",
            'slug'              => Str::slug("Uruguay", '-'),
            'iso_code_2'        => 'UY',
            'iso_code_3'        => 'URY',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Özbekistan",
            'slug'              => Str::slug("Uzbekistan", '-'),
            'iso_code_2'        => 'UZ',
            'iso_code_3'        => 'UZB',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Vanuatu",
            'slug'              => Str::slug("Vanuatu", '-'),
            'iso_code_2'        => 'VU',
            'iso_code_3'        => 'VUT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Vatican City State (Holy See)",
            'slug'              => Str::slug("Vatican City State (Holy See)", '-'),
            'iso_code_2'        => 'VA',
            'iso_code_3'        => 'VAT',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Venezuella",
            'slug'              => Str::slug("Venezuela", '-'),
            'iso_code_2'        => 'VE',
            'iso_code_3'        => 'VEN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Viet Nam",
            'slug'              => Str::slug("Viet Nam", '-'),
            'iso_code_2'        => 'VN',
            'iso_code_3'        => 'VNM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Virgin Islands (British)",
            'slug'              => Str::slug("Virgin Islands (British)", '-'),
            'iso_code_2'        => 'VG',
            'iso_code_3'        => 'VGB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Virgin Islands (U.S.)",
            'slug'              => Str::slug("Virgin Islands (U.S.)", '-'),
            'iso_code_2'        => 'VI',
            'iso_code_3'        => 'VIR',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Wallis and Futuna Islands",
            'slug'              => Str::slug("Wallis and Futuna Islands", '-'),
            'iso_code_2'        => 'WF',
            'iso_code_3'        => 'WLF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Western Sahara",
            'slug'              => Str::slug("Western Sahara", '-'),
            'iso_code_2'        => 'EH',
            'iso_code_3'        => 'ESH',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Yemen",
            'slug'              => Str::slug("Yemen", '-'),
            'iso_code_2'        => 'YE',
            'iso_code_3'        => 'YEM',
            'status'            => 'PASSIVE',
        ]);

        Country::create([
            'title'             => "Demokratik Kongo Cumhuriyeti",
            'slug'              => Str::slug("Democratic Republic of Congo", '-'),
            'iso_code_2'        => 'CD',
            'iso_code_3'        => 'COD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Zambia",
            'slug'              => Str::slug("Zambia", '-'),
            'iso_code_2'        => 'ZM',
            'iso_code_3'        => 'ZMB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Zimbabwe",
            'slug'              => Str::slug("Zimbabwe", '-'),
            'iso_code_2'        => 'ZW',
            'iso_code_3'        => 'ZWE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Montenegro",
            'slug'              => Str::slug("Montenegro", '-'),
            'iso_code_2'        => 'ME',
            'iso_code_3'        => 'MNE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Sırbistan",
            'slug'              => Str::slug("Serbia", '-'),
            'iso_code_2'        => 'RS',
            'iso_code_3'        => 'SRB',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Aaland Adaları",
            'slug'              => Str::slug("Aaland Adaları", '-'),
            'iso_code_2'        => 'AX',
            'iso_code_3'        => 'ALA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Bonaire, Sint Eustatius and Saba",
            'slug'              => Str::slug("Bonaire, Sint Eustatius and Saba", '-'),
            'iso_code_2'        => 'BQ',
            'iso_code_3'        => 'BES',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Curacao",
            'slug'              => Str::slug("Curacao", '-'),
            'iso_code_2'        => 'CW',
            'iso_code_3'        => 'CUW',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Filistin",
            'slug'              => Str::slug("Palestinian", '-'),
            'iso_code_2'        => 'PS',
            'iso_code_3'        => 'PSE',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Güney Sudan",
            'slug'              => Str::slug("South Sudan", '-'),
            'iso_code_2'        => 'SS',
            'iso_code_3'        => 'SSD',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "St. Barthelemy",
            'slug'              => Str::slug("St. Barthelemy", '-'),
            'iso_code_2'        => 'BL',
            'iso_code_3'        => 'BLM',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "St. Martin (French part)",
            'slug'              => Str::slug("St. Martin (French part)", '-'),
            'iso_code_2'        => 'MF',
            'iso_code_3'        => 'MAF',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kanarya Adaları",
            'slug'              => Str::slug("Kanarya Adaları", '-'),
            'iso_code_2'        => 'IC',
            'iso_code_3'        => 'ICA',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Ascension Island (British)",
            'slug'              => Str::slug("Ascension Island (British)", '-'),
            'iso_code_2'        => 'AC',
            'iso_code_3'        => 'ASC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Kosova",
            'slug'              => Str::slug("Kosovo, Republic of", '-'),
            'iso_code_2'        => 'XK',
            'iso_code_3'        => 'UNK',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Isle of Man",
            'slug'              => Str::slug("Isle of Man", '-'),
            'iso_code_2'        => 'IM',
            'iso_code_3'        => 'IMN',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Tristan da Cunha",
            'slug'              => Str::slug("Tristan da Cunha", '-'),
            'iso_code_2'        => 'TA',
            'iso_code_3'        => 'TAC',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Guernsey",
            'slug'              => Str::slug("Guernsey", '-'),
            'iso_code_2'        => 'GG',
            'iso_code_3'        => 'GGY',
            'status'            => 'PASSIVE',
        ]);
        Country::create([
            'title'             => "Jersey",
            'slug'              => Str::slug("Jersey", '-'),
            'iso_code_2'        => 'JE',
            'iso_code_3'        => 'JEY',
            'status'            => 'PASSIVE',
        ]);


    }
}
