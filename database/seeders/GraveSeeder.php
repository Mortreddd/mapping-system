<?php

namespace Database\Seeders;

use App\Models\Grave;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /**
         * Seed the graves by their longitude and latitude
         */

         $graves = [
        // Column 1 Row 1 total - 50
            [
                'grave_number' => '1',
                'status' => 'available',
                'latitude' => 15.107680,
                'longitude' => 120.623901
            ],
            [
                'grave_number' => '2',
                'status' => 'available',
                'latitude' => 15.107666, 
                'longitude' => 120.623913
            ],
            [
                'grave_number' => '3',
                'status' => 'available',
                'latitude' => 15.107653,
                'longitude' => 120.623928
            ],
            [
                'grave_number' => '4',
                'status' => 'available',
                'latitude' => 15.107635,
                'longitude' => 120.623953
            ],
            [
                'grave_number' => '5',
                'status' => 'available',
                'latitude' => 15.107623,
                'longitude' =>  120.623974
            ],
            [
                'grave_number' => '6',
                'status' => 'available',
                'latitude' => 15.107610, 
                'longitude' => 120.623996
            ],
            [
                'grave_number' => '7',
                'status' => 'available',
                'latitude' => 15.107594, 
                'longitude' => 120.624021
            ],
            [
                'grave_number' => '8',
                'status' => 'available',
                'latitude' => 15.107579, 
                'longitude' => 120.624040
            ],
            [
                'grave_number' => '9',
                'status' => 'available',
                'latitude' => 15.107564, 
                'longitude' => 120.624065
            ],
            [
                'grave_number' => '10',
                'status' => 'available',
                'latitude' => 15.107550, 
                'longitude' => 120.624087
            ],
            [
                'grave_number' => '11',
                'status' => 'available',
                'latitude' => 15.107533, 
                'longitude' => 120.624110
            ],
            [
                'grave_number' => '12',
                'status' => 'available',
                'latitude' => 15.107522, 
                'longitude' => 120.624133
            ],
            [
                'grave_number' => '13',
                'status' => 'available',
                'latitude' => 15.107502, 
                'longitude' => 120.624163
            ],
            [
                'grave_number' => '14',
                'status' => 'available',
                'latitude' => 15.107488, 
                'longitude' => 120.624190
            ],
            [
                'grave_number' => '15',
                'status' => 'available',
                'latitude' => 15.107471, 
                'longitude' => 120.624216
            ],
            [
                'grave_number' => '16',
                'status' => 'available',
                'latitude' => 15.107457, 
                'longitude' => 120.624241
            ],
            [
                'grave_number' => '17',
                'status' => 'available',
                'latitude' => 15.107441, 
                'longitude' => 120.624270
            ],
            // Row 2 Column 1
            [
                'grave_number' => '18',
                'status' => 'available',
                'latitude' => 15.107620, 
                'longitude' => 120.623805
            ],
            [
                'grave_number' => '19',
                'status' => 'available',
                'latitude' => 15.107604, 
                'longitude' => 120.623828
            ],
            [
                'grave_number' => '20',
                'status' => 'available',
                'latitude' => 15.107586, 
                'longitude' => 120.623856
            ],
            [
                'grave_number' => '21',
                'status' => 'available',
                'latitude' => 15.107572, 
                'longitude' => 120.623876
            ],
            [
                'grave_number' => '22',
                'status' => 'available',
                'latitude' => 15.107555, 
                'longitude' => 120.623895
            ],
            [
                'grave_number' => '23',
                'status' => 'available',
                'latitude' => 15.107543, 
                'longitude' => 120.623919
            ],
            [
                'grave_number' => '24',
                'status' => 'available',
                'latitude' => 15.107524, 
                'longitude' => 120.623939
            ],
            [
                'grave_number' => '25',
                'status' => 'available',
                'latitude' => 15.107512, 
                'longitude' => 120.623960
            ],
            [
                'grave_number' => '26',
                'status' => 'available',
                'latitude' => 15.107495, 
                'longitude' => 120.623978
            ],
            [
                'grave_number' => '27',
                'status' => 'available',
                'latitude' => 15.107475, 
                'longitude' => 120.624002
            ],
            [
                'grave_number' => '28',
                'status' => 'available',
                'latitude' => 15.107461, 
                'longitude' => 120.624021
            ],
            [
                'grave_number' => '29',
                'status' => 'available',
                'latitude' => 15.107450, 
                'longitude' => 120.624043
            ],
            [
                'grave_number' => '30',
                'status' => 'available',
                'latitude' => 15.107440, 
                'longitude' => 120.624065
            ],
            [
                'grave_number' => '31',
                'status' => 'available',
                'latitude' => 15.107427, 
                'longitude' => 120.624088
            ],
            [
                'grave_number' => '32',
                'status' => 'available',
                'latitude' => 15.107413, 
                'longitude' => 120.624110
            ],
            [
                'grave_number' => '33',
                'status' => 'available',
                'latitude' => 15.107400, 
                'longitude' => 120.624135
            ],
            [
                'grave_number' => '34',
                'status' => 'available',
                'latitude' => 15.107386, 
                'longitude' => 120.624159
            ],
            [
                'grave_number' => '35',
                'status' => 'available',
                'latitude' => 15.107373, 
                'longitude' => 120.624182
            ],
            [
                'grave_number' => '36',
                'status' => 'available',
                'latitude' => 15.107361, 
                'longitude' => 120.624201
            ],
            // Row 3 Col 1
            [
                'grave_number' => '37',
                'status' => 'available',
                'latitude' => 15.107552, 
                'longitude' => 120.623735
            ],
            [
                'grave_number' => '38',
                'status' => 'available',
                'latitude' => 15.107537, 
                'longitude' => 120.623754
            ],
            [
                'grave_number' => '39',
                'status' => 'available',
                'latitude' => 15.107523, 
                'longitude' => 120.623780
            ],
            [
                'grave_number' => '40',
                'status' => 'available',
                'latitude' => 15.107506, 
                'longitude' => 120.623802
            ],
            [
                'grave_number' => '41',
                'status' => 'available',
                'latitude' => 15.107494, 
                'longitude' => 120.623824
            ],
            [
                'grave_number' => '42',
                'status' => 'available',
                'latitude' => 15.107475, 
                'longitude' => 120.623844
            ],
            [
                'grave_number' => '43',
                'status' => 'available',
                'latitude' => 15.107461, 
                'longitude' => 120.623868
            ],
            [
                'grave_number' => '44',
                'status' => 'available',
                'latitude' => 15.107447, 
                'longitude' => 120.623888
            ],
            [
                'grave_number' => '45',
                'status' => 'available',
                'latitude' => 15.107437, 
                'longitude' => 120.623909
            ],
            [
                'grave_number' => '46',
                'status' => 'available',
                'latitude' => 15.107421, 
                'longitude' => 120.623928
            ],
            [
                'grave_number' => '47',
                'status' => 'available',
                'latitude' => 15.107407, 
                'longitude' => 120.623947
            ],
            [
                'grave_number' => '48',
                'status' => 'available',
                'latitude' => 15.107397, 
                'longitude' => 120.623968
            ],
            [
                'grave_number' => '49',
                'status' => 'available',
                'latitude' => 15.107386, 
                'longitude' => 120.623987
            ],
            [
                'grave_number' => '50',
                'status' => 'available',
                'latitude' => 15.107376, 
                'longitude' => 120.624003
            ],
            [
                'grave_number' => '51',
                'status' => 'available',
                'latitude' => 15.107365, 
                'longitude' => 120.624019
            ],
            [
                'grave_number' => '52',
                'status' => 'available',
                'latitude' => 15.107354, 
                'longitude' => 120.624043
            ],
                // Row 1 Col 2
            [
                'grave_number' => '53',
                'status' => 'available',
                'latitude' => 15.107336, 
                'longitude' => 120.624446
            ],
            [
                'grave_number' => '54',
                'status' => 'available',
                'latitude' => 15.107325, 
                'longitude' => 120.624471
            ],
            [
                'grave_number' => '55',
                'status' => 'available',
                'latitude' => 15.107312,
                'longitude' => 120.624498
            ],
            [
                'grave_number' => '56',
                'status' => 'available',
                'latitude' => 15.107299, 
                'longitude' => 120.624521
            ],
            [
                'grave_number' => '57',
                'status' => 'available',
                'latitude' => 15.107284, 
                'longitude' => 120.624549
            ],
            [
                'grave_number' => '58',
                'status' => 'available',
                'latitude' => 15.107273, 
                'longitude' => 120.624567
            ],
            [
                'grave_number' => '59',
                'status' => 'available',
                'latitude' => 15.107262, 
                'longitude' => 120.624585
            ],
            [
                'grave_number' => '60',
                'status' => 'available',
                'latitude' => 15.107252, 
                'longitude' => 120.624608
            ],
            [
                'grave_number' => '61',
                'status' => 'available',
                'latitude' => 15.107242, 
                'longitude' => 120.624630
            ],
            [
                'grave_number' => '62',
                'status' => 'available',
                'latitude' => 15.107229, 
                'longitude' => 120.624652
            ],
            [
                'grave_number' => '63',
                'status' => 'available',
                'latitude' => 15.107216, 
                'longitude' => 120.624675
            ],
            [
                'grave_number' => '64',
                'status' => 'available',
                'latitude' => 15.107200, 
                'longitude' => 120.624697
            ],
            [
                'grave_number' => '65',
                'status' => 'available',
                'latitude' => 15.107189, 
                'longitude' => 120.624720
            ],
            [
                'grave_number' => '66',
                'status' => 'available',
                'latitude' => 15.107180, 
                'longitude' => 120.624742
            ],
            [
                'grave_number' => '67',
                'status' => 'available',
                'latitude' => 15.107167, 
                'longitude' => 120.624764
            ],
            [
                'grave_number' => '68',
                'status' => 'available',
                'latitude' => 15.107154, 
                'longitude' => 120.624783
            ],
            [
                'grave_number' => '69',
                'status' => 'available',
                'latitude' => 15.107139, 
                'longitude' => 120.624807
            ],
            [
                'grave_number' => '70',
                'status' => 'available',
                'latitude' => 15.107125, 
                'longitude' => 120.624827
            ],
            
            // TODO: assined the graves 
            // Row 2 Col 2
            [
                'grave_number' => '71',
                'status' => 'available',
                'latitude' => 15.107271, 
                'longitude' => 120.624390
            ],
            [
                'grave_number' => '72',
                'status' => 'available',
                'latitude' => 15.107251, 
                'longitude' => 120.624422
            ],
            [
                'grave_number' => '73',
                'status' => 'available',
                'latitude' => 15.107233, 
                'longitude' => 120.624453, 
            ],
            [
                'grave_number' => '74',
                'status' => 'available',
                'latitude' => 15.107217, 
                'longitude' => 120.624482
            ],
            [
                'grave_number' => '75',
                'status' => 'available',
                'latitude' => 15.107199, 
                'longitude' => 120.624509
            ],
            [
                'grave_number' => '76',
                'status' => 'available',
                'latitude' => 15.107180, 
                'longitude' => 120.624534
            ],
            [
                'grave_number' => '77',
                'status' => 'available',
                'latitude' => 15.107165, 
                'longitude' => 120.624557
            ],
            [
                'grave_number' => '78',
                'status' => 'available',
                'latitude' => 15.107142, 
                'longitude' => 120.624587
            ],
            [
                'grave_number' => '79',
                'status' => 'available',
                'latitude' => 15.107128, 
                'longitude' => 120.624611
            ],
            [
                'grave_number' => '80',
                'status' => 'available',
                'latitude' => 15.107110, 
                'longitude' => 120.624637
            ],
            [
                'grave_number' => '81',
                'status' => 'available',
                'latitude' => 15.107091, 
                'longitude' => 120.624668
            ],
            [
                'grave_number' => '82',
                'status' => 'available',
                'latitude' => 15.107080,
                'longitude' => 120.624694
            ],
            [
                'grave_number' => '83',
                'status' => 'available',
                'latitude' => 15.107065, 
                'longitude' => 120.624722
            ],
            [
                'grave_number' => '84',
                'status' => 'available',
                'latitude' => 15.107052, 
                'longitude' => 120.624749
            ],
            // [
            //     'grave_number' => '85',
            //     'status' => 'available',
            //     'latitude' => 15.107052, 
            //     'longitude' => 120.624749
            // ],
            
            // Row 3 Col 2
            
            [
                'grave_number' => '85',
                'status' => 'available',
                'latitude' => 15.107159, 
                'longitude' => 120.624419 
            ],
            [
                'grave_number' => '86',
                'status' => 'available',
                'latitude' => 15.107146, 
                'longitude' => 120.624437
            ],

            [
                'grave_number' => '87',
                'status' => 'available',
                'latitude' => 15.107132, 
                'longitude' => 120.624454
            ],
            [
                'grave_number' => '88',
                'status' => 'available',
                'latitude' => 15.107125, 
                'longitude' => 120.624467
            ],
            [
                'grave_number' => '89',
                'status' => 'available',
                'latitude' => 15.107110, 
                'longitude' => 120.624486
            ],
            [
                'grave_number' => '90',
                'status' => 'available',
                'latitude' => 15.107098, 
                'longitude' => 120.624505
            ],
            [
                'grave_number' => '91',
                'status' => 'available',
                'latitude' => 15.107089, 
                'longitude' => 120.624519
            ],
            [
                'grave_number' => '92',
                'status' => 'available',
                'latitude' => 15.107076, 
                'longitude' => 120.624534
            ],
            [
                'grave_number' => '93',
                'status' => 'available',
                'latitude' => 15.107064, 
                'longitude' => 120.624555
            ],
            [
                'grave_number' => '94',
                'status' => 'available',
                'latitude' => 15.107048, 
                'longitude' => 120.624579
            ],
            [
                'grave_number' => '95',
                'status' => 'available',
                'latitude' => 15.107034, 
                'longitude' => 120.624601
            ],
            [
                'grave_number' => '96',
                'status' => 'available',
                'latitude' => 15.107022, 
                'longitude' => 120.624623
            ],
            [
                'grave_number' => '97',
                'status' => 'available',
                'latitude' => 15.107011, 
                'longitude' => 120.624641
            ],
            [
                'grave_number' => '98',
                'status' => 'available',
                'latitude' => 15.107004, 
                'longitude' => 120.624659
            ],
            [
                'grave_number' => '99',
                'status' => 'available',
                'latitude' => 15.106994, 
                'longitude' => 120.624676
            ],
            [
                'grave_number' => '100',
                'status' => 'available',
                'latitude' => 15.106985, 
                'longitude' => 120.624694
            ],
            // Row 4 Column 1
            [
                'grave_number' => '101',
                'status' => 'available',
                'latitude' => 15.107415, 
                'longitude' => 120.623611
            ],
            [
                'grave_number' => '102',
                'status' => 'available',
                'latitude' => 15.107405, 
                'longitude' => 120.623628
            ],
            [
                'grave_number' => '103',
                'status' => 'available',
                'latitude' => 15.107394, 
                'longitude' => 120.623644
            ],
            [
                'grave_number' => '104',
                'status' => 'available',
                'latitude' => 15.107384, 
                'longitude' => 120.623664
            ],
            [
                'grave_number' => '105',
                'status' => 'available',
                'latitude' => 15.107372, 
                'longitude' => 120.623679
            ],
            [
                'grave_number' => '106',
                'status' => 'available',
                'latitude' => 15.107361, 
                'longitude' => 120.623695
            ],
            [
                'grave_number' => '107',
                'status' => 'available',
                'latitude' => 15.107349, 
                'longitude' => 120.623710
            ],
            [
                'grave_number' => '108',
                'status' => 'available',
                'latitude' => 15.107336,
                'longitude' =>  120.623728
            ],
            [
                'grave_number' => '109',
                'status' => 'available',
                'latitude' => 15.107330, 
                'longitude' => 120.623738
            ],
            [
                'grave_number' => '110',
                'status' => 'available',
                'latitude' => 15.107322, 
                'longitude' => 120.623754
            ],
            [
                'grave_number' => '111',
                'status' => 'available',
                'latitude' => 15.107309, 
                'longitude' => 120.623773
            ],
            [
                'grave_number' => '112',
                'status' => 'available',
                'latitude' => 15.107298, 
                'longitude' => 120.623791
            ],
            [
                'grave_number' => '113',
                'status' => 'available',
                'latitude' => 15.107289, 
                'longitude' => 120.623810
            ],
            [
                'grave_number' => '114',
                'status' => 'available',
                'latitude' => 15.107278, 
                'longitude' => 120.623828
            ],
            [
                'grave_number' => '115',
                'status' => 'available',
                'latitude' => 15.107266, 
                'longitude' => 120.623845
            ],
            [
                'grave_number' => '116',
                'status' => 'available',
                'latitude' => 15.107253, 
                'longitude' => 120.623861
            ],
            [
                'grave_number' => '117',
                'status' => 'available',
                'latitude' => 15.107239, 
                'longitude' => 120.623877
            ],
            [
                'grave_number' => '118',
                'status' => 'available',
                'latitude' => 15.107222, 
                'longitude' => 120.623897
            ],
            [
                'grave_number' => '119',
                'status' => 'available',
                'latitude' => 15.107209, 
                'longitude' => 120.623913
            ],
            [
                'grave_number' => '120',
                'status' => 'available',
                'latitude' => 15.107197, 
                'longitude' => 120.623927
            ],
            [
                'grave_number' => '121',
                'status' => 'available',
                'latitude' => 15.107187, 
                'longitude' => 120.623943
            ],
            [
                'grave_number' => '122',
                'status' => 'available',
                'latitude' => 15.107178,
                'longitude' => 120.623957
            ],
            [
                'grave_number' => '123',
                'status' => 'available',
                'latitude' => 15.107168, 
                'longitude' => 120.623970
            ],
            [
                'grave_number' => '124',
                'status' => 'available',
                'latitude' => 15.107156, 
                'longitude' => 120.623985
            ],
            [
                'grave_number' => '125',
                'status' => 'available',
                'latitude' => 15.107145, 
                'longitude' => 120.624003
            ],
            [
                'grave_number' => '126',
                'status' => 'available',
                'latitude' => 15.107134, 
                'longitude' => 120.624015
            ],
            [
                'grave_number' => '127',
                'status' => 'available',
                'latitude' => 15.107124, 
                'longitude' => 120.624029
            ],
            [
                'grave_number' => '128',
                'status' => 'available',
                'latitude' => 15.107114, 
                'longitude' => 120.624047
            ],
            [
                'grave_number' => '129',
                'status' => 'available',
                'latitude' => 15.107096, 
                'longitude' => 120.624072
            ],
            [
                'grave_number' => '130',
                'status' => 'available',
                'latitude' => 15.107087, 
                'longitude' => 120.624088
            ],
            [
                'grave_number' => '131',
                'status' => 'available',
                'latitude' => 15.107079, 
                'longitude' => 120.624106
            ],
            [
                'grave_number' => '132',
                'status' => 'available',
                'latitude' => 15.107071,
                'longitude' => 120.624122
            ],
            [
                'grave_number' => '133',
                'status' => 'available',
                'latitude' => 15.107062, 
                'longitude' => 120.624138
            ],
            [
                'grave_number' => '134',
                'status' => 'available',
                'latitude' => 15.107052, 
                'longitude' => 120.624155
            ],
            [
                'grave_number' => '135',
                'status' => 'available',
                'latitude' => 15.107041, 
                'longitude' => 120.624172
            ],
            [
                'grave_number' => '136',
                'status' => 'available',
                'latitude' => 15.107033, 
                'longitude' => 120.624189
            ],
            [
                'grave_number' => '137',
                'status' => 'available',
                'latitude' => 15.107020, 
                'longitude' => 120.624205
            ],
            [
                'grave_number' => '138',
                'status' => 'available',
                'latitude' => 15.107008,  
                'longitude' => 120.624223
            ],
            [
                'grave_number' => '139',
                'status' => 'available',
                'latitude' => 15.106997, 
                'longitude' => 120.624239 
            ],
            [
                'grave_number' => '140',
                'status' => 'available',
                'latitude' => 15.106984, 
                'longitude' => 120.624253
            ],
            [
                'grave_number' => '141',
                'status' => 'available',
                'latitude' => 15.106971, 
                'longitude' => 120.624272
            ],
            [
                'grave_number' => '142',
                'status' => 'available',
                'latitude' => 15.106959, 
                'longitude' => 120.624291
            ],
            [
                'grave_number' => '143',
                'status' => 'available',
                'latitude' => 15.106950, 
                'longitude' => 120.624315
            ],
            [
                'grave_number' => '144',
                'status' => 'available',
                'latitude' => 15.106941, 
                'longitude' => 120.624336
            ],
            [
                'grave_number' => '145',
                'status' => 'available',
                'latitude' => 15.106929, 
                'longitude' => 120.624356
            ],
            [
                'grave_number' => '146',
                'status' => 'available',
                'latitude' => 15.106920, 
                'longitude' => 120.624372
            ],
            [
                'grave_number' => '147',
                'status' => 'available',
                'latitude' => 15.106909, 
                'longitude' => 120.624389
            ],
            [
                'grave_number' => '148',
                'status' => 'available',
                'latitude' => 15.106899, 
                'longitude' => 120.624408
            ],
            [
                'grave_number' => '149',
                'status' => 'available',
                'latitude' => 15.106892, 
                'longitude' => 120.624424
            ],
            [
                'grave_number' => '150',
                'status' => 'available',
                'latitude' => 15.106880, 
                'longitude' => 120.624438
            ],
            [
                'grave_number' => '151',
                'status' => 'available',
                'latitude' => 15.106870,
                'longitude' => 120.624456
            ],
            [
                'grave_number' => '152',
                'status' => 'available',
                'latitude' => 15.106864, 
                'longitude' => 120.624473
            ],
            [
                'grave_number' => '153',
                'status' => 'available',
                'latitude' => 15.106860, 
                'longitude' => 120.624484
            ],
            [
                'grave_number' => '154',
                'status' => 'available',
                'latitude' => 15.106847,
                'longitude' => 120.624505
            ],
            // Row 5 Column 1 
            [
                'grave_number' => '155',
                'status' => 'available',
                'latitude' => 15.107323, 
                'longitude' => 120.623532
            ],
            [
                'grave_number' => '156',
                'status' => 'available',
                'latitude' => 15.107306, 
                'longitude' => 120.623560
            ],
            [
                'grave_number' => '157',
                'status' => 'available',
                'latitude' => 15.107295, 
                'longitude' => 120.623584
            ],
            [
                'grave_number' => '158',
                'status' => 'available',
                'latitude' => 15.107281, 
                'longitude' => 120.623602
            ],
            [
                'grave_number' => '159',
                'status' => 'available',
                'latitude' => 15.107269, 
                'longitude' => 120.623624
            ],
            [
                'grave_number' => '160',
                'status' => 'available',
                'latitude' => 15.107255, 
                'longitude' => 120.623646
            ],
            [
                'grave_number' => '161',
                'status' => 'available',
                'latitude' => 15.107243, 
                'longitude' => 120.623669
            ],
            [
                'grave_number' => '162',
                'status' => 'available',
                'latitude' => 15.107227, 
                'longitude' => 120.623686
            ],
            [
                'grave_number' => '163',
                'status' => 'available',
                'latitude' => 15.107210, 
                'longitude' => 120.623710
            ],
            [
                'grave_number' => '164',
                'status' => 'available',
                'latitude' => 15.107192, 
                'longitude' => 120.623734
            ],
            [
                'grave_number' => '165',
                'status' => 'available',
                'latitude' => 15.107180, 
                'longitude' => 120.623761
            ],
            [
                'grave_number' => '166',
                'status' => 'available',
                'latitude' => 15.107165,
                'longitude' => 120.623790
            ],
            [
                'grave_number' => '167',
                'status' => 'available',
                'latitude' => 15.107151, 
                'longitude' => 120.623811
            ],
            [
                'grave_number' => '168',
                'status' => 'available',
                'latitude' => 15.107131, 
                'longitude' => 120.623836
            ],
            [
                'grave_number' => '169',
                'status' => 'available',
                'latitude' => 15.107114, 
                'longitude' => 120.623860
            ],
            [
                'grave_number' => '170',
                'status' => 'available',
                'latitude' => 15.107098,
                'longitude' =>  120.623881
            ],
            [
                'grave_number' => '171',
                'status' => 'available',
                'latitude' => 15.107079,  
                'longitude' => 120.623908
            ],
            [
                'grave_number' => '172',
                'status' => 'available',
                'latitude' => 15.107063, 
                'longitude' => 120.623929
            ],
            [
                'grave_number' => '173',
                'status' => 'available',
                'latitude' => 15.107050, 
                'longitude' => 120.623953
            ],
            [
                'grave_number' => '174',
                'status' => 'available',
                'latitude' => 15.107035, 
                'longitude' => 120.623978
            ],
            [
                'grave_number' => '175',
                'status' => 'available',
                'latitude' => 15.107019, 
                'longitude' => 120.624003
            ],
            [
                'grave_number' => '176',
                'status' => 'available',
                'latitude' => 15.106998, 
                'longitude' => 120.624027
            ],
            [
                'grave_number' => '177',
                'status' => 'available',
                'latitude' => 15.106989, 
                'longitude' => 120.624041
            ],
            [
                'grave_number' => '178',
                'status' => 'available',
                'latitude' => 15.106979,  
                'longitude' => 120.624062
            ],
            [
                'grave_number' => '179',
                'status' => 'available',
                'latitude' => 15.106955, 
                'longitude' => 120.624102
            ],
            [
                'grave_number' => '180',
                'status' => 'available',
                'latitude' => 15.106968, 
                'longitude' => 120.624081
            ],
            // Row 6 Column 1
            [
                'grave_number' => '181',
                'status' => 'available',
                'latitude' => 15.107249, 
                'longitude' => 120.623443
            ],
            [
                'grave_number' => '182',
                'status' => 'available',
                'latitude' => 15.107224,
                'longitude' => 120.623477
            ],
            [
                'grave_number' => '183',
                'status' => 'available',
                'latitude' => 15.107205, 
                'longitude' => 120.623501
            ],
            [
                'grave_number' => '184',
                'status' => 'available',
                'latitude' => 15.107190, 
                'longitude' => 120.623526
            ],
            [
                'grave_number' => '185',
                'status' => 'available',
                'latitude' => 15.107176, 
                'longitude' => 120.623553
            ],
            [
                'grave_number' => '186',
                'status' => 'available',
                'latitude' => 15.107161, 
                'longitude' => 120.623580
            ],
            [
                'grave_number' => '187',
                'status' => 'available',
                'latitude' => 15.107148, 
                'longitude' => 120.623608
            ],
            [
                'grave_number' => '188',
                'status' => 'available',
                'latitude' => 15.107130, 
                'longitude' => 120.623630
            ],
            [
                'grave_number' => '189',
                'status' => 'available',
                'latitude' => 15.107117,  
                'longitude' => 120.623651
            ],
            [
                'grave_number' => '190',
                'status' => 'available',
                'latitude' => 15.107105, 
                'longitude' => 120.623671 
            ],
            [
                'grave_number' => '191',
                'status' => 'available',
                'latitude' => 15.107091, 
                'longitude' => 120.623694
            ],
            [
                'grave_number' => '192',
                'status' => 'available',
                'latitude' => 15.107077, 
                'longitude' => 120.623713
            ],
            [
                'grave_number' => '194',
                'status' => 'available',
                'latitude' => 15.107062, 
                'longitude' => 120.623737
            ],
            [
                'grave_number' => '195',
                'status' => 'available',
                'latitude' => 15.107184,
                'longitude' => 120.623388
            ],
            [
                'grave_number' => '196',
                'status' => 'available',
                'latitude' => 15.107164,
                'longitude' => 120.623416
            ],
            [
                'grave_number' => '197',
                'status' => 'available',
                'latitude' => 15.107150, 
                'longitude' => 120.623442
            ],
            [
                'grave_number' => '198',
                'status' => 'available',
                'latitude' => 15.107138, 
                'longitude' => 120.623475
            ],
            [
                'grave_number' => '199',
                'status' => 'available',
                'latitude' => 15.107121, 
                'longitude' => 120.623501
            ],
            [
                'grave_number' => '200',
                'status' => 'available',
                'latitude' => 15.107104,
                'longitude' => 120.623528
            ],

        ];

        foreach($graves as $grave) {
            Grave::create([
                'grave_number' => $grave['grave_number'],
                'status' => $grave['status'],
                'latitude' => $grave['latitude'],
                'longitude' => $grave['longitude']
            ]);
        }
    }
}