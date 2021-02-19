<?php

namespace Database\Seeders;

use App\Models\Godchild;
use App\Models\Godfather;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $godfaths =  [
            ['register' => '18ESATIC0139GN', "name" => "AMOUAN", 'lname' => "Adja Yannick", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '17ESATIC0092KO', "name" => "BAMBA", 'lname' => "Awa Nourdine", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0143AN', "name" => "BEUGRE", 'lname' => "Yves Léopold", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0054YO', "name" => "BOUA", 'lname' => "José Akpoboua", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0085AB', "name" => "BIDIGA", 'lname' => "Abdoul Fadel", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0134BO', "name" => "BROU", 'lname' => "Koffi Roland", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0173DA', "name" => "CREPPY", 'lname' => "Follissossro Isaac", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0097NO', "name" => "DAO", 'lname' => "Madou", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0005BO', "name" => "DEAPO", 'lname' => "Bérénice Nanxico", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0102AB', "name" => "DIEKE", 'lname' => "Ange Jonathan", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0152AB', "name" => "DIGBEU", 'lname' => "Dago Ange", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0016CO', "name" => "EZANIN", 'lname' => "Anohouba Joel", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0061BO', "name" => "KADJOMOU", 'lname' => "Vadjo Victoria", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0053AB', "name" => "KEDJA", 'lname' => "Manzan Dominiqiue", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0137AG', "name" => "KIPLE", 'lname' => "Gbaza Jean", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0002AB', "name" => "KOCORA", 'lname' => "Angboma Marie", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0169AG', "name" => "KONE", 'lname' => "Lamine", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0057NI', "name" => "KONE", 'lname' => "Vakaramoko", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0200AG', "name" => "KONE", 'lname' => "Yedjoussigue Aziz", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0170BO', "name" => "KOUAME", 'lname' => "Moaye Ulrich", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0141YO', "name" => "KOUASSI", 'lname' => "Franck Sébastien", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0163AB', "name" => "KOUASSI", 'lname' => "Koffi Cheick", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0167AB', "name" => "OUATTARA", 'lname' => "Rokiatou", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0159AB', "name" => "PAPA", 'lname' => "Kedja Jean", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0145BO', "name" => "SILUE", 'lname' => "Namogoh Arsene", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0183AD', "name" => "SORO", 'lname' => "Bakary Philippe", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0198AB', "name" => "TOURE", 'lname' => "Said", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0068AB', "name" => "TRAORE", 'lname' => "Louisette Roye", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0055AD', "name" => "VOUHO", 'lname' => "Jonathan Ange", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0166AG', "name" => "WAYOU", 'lname' => "Franck Paterne", 'created_at' => now(), 'updated_at' => now()  ],
            ['register' => '18ESATIC0080BO', "name" => "YAO", 'lname' => "Kouakou Cédric", 'created_at' => now(), 'updated_at' => now()  ],
        ];

        $godson = [
            0 => ['register' => '19ESATIC0177BZ', "name" => "AHMED", 'lname' => "Zeinabou Mint", 'created_at' => now(), 'updated_at' => now()],
            1 => ['register' => '19ESATIC0182AA', "name" => "AKA", 'lname' => "Armel Junior", 'created_at' => now(), 'updated_at' => now()],
            2 => ['register' => '19ESATIC0113BR', "name" => "ATTO", 'lname' => "Regis François", 'created_at' => now(), 'updated_at' => now()],
            3 => ['register' => '19ESATIC0184YY', "name" => "BARRO", 'lname' => "Yaya", 'created_at' => now(), 'updated_at' => now()],
            4 => ['register' => '19ESATIC0013AB', "name" => "BEUGRE", 'lname' => "Bawa Irvin", 'created_at' => now(), 'updated_at' => now()],
            5 => ['register' => '19ESATIC0131KK', "name" => "COULIBALY", 'lname' => "Kignelman Williams", 'created_at' => now(), 'updated_at' => now()],
            7 => ['register' => '19ESATIC0156NN', "name" => "DJE", 'lname' => "N'Dri Fidèle", 'created_at' => now(), 'updated_at' => now()],
            8 => ['register' => '19ESATIC0168YY', "name" => "DIAKITE", 'lname' => "Yacouba", 'created_at' => now(), 'updated_at' => now()],
            9 => ['register' => '19ESATIC0019OG', "name" => "DOUDOU", 'lname' => "Gboabie Venus", 'created_at' => now(), 'updated_at' => now()],
            10 => ['register' => '19ESATIC0152AY', "name" => "EHUI", 'lname' => "Yann Loïc", 'created_at' => now(), 'updated_at' => now()],
            11 => ['register' => '19ESATIC0171AH', "name" => "EKRA", 'lname' => "Hamon Marie", 'created_at' => now(), 'updated_at' => now()],
            12 => ['register' => '19ESATIC0146BT', "name" => "ESSE", 'lname' => "Thierry Modeste", 'created_at' => now(), 'updated_at' => now()],
            13 => ['register' => '19ESATIC0018BH', "name" => "GOHI", 'lname' => "Henry Othniel", 'created_at' => now(), 'updated_at' => now()],
            14 => ['register' => '19ESATIC0133GL', "name" => "KARIMU", 'lname' => "Leïla Roxane", 'created_at' => now(), 'updated_at' => now()],
            15 => ['register' => '19ESATIC0165IN', "name" => "KASSE", 'lname' => "N'Guessan Mathilde", 'created_at' => now(), 'updated_at' => now()],
            16 => ['register' => '19ESATIC0090AY', "name" => "KONAN", 'lname' => "Yekonya Levi", 'created_at' => now(), 'updated_at' => now()],
            17 => ['register' => '19ESATIC0112KE', "name" => "KONAN", 'lname' => "Eluid Nicanor", 'created_at' => now(), 'updated_at' => now()],
            18 => ['register' => '19ESATIC0188SK', "name" => "KONAN", 'lname' => "Kouame Aimé", 'created_at' => now(), 'updated_at' => now()],
            19 => ['register' => '19ESATIC0027ZD', "name" => "KONATE", 'lname' => "Dotemin", 'created_at' => now(), 'updated_at' => now()],
            20 => ['register' => '19ESATIC0185TD', "name" => "KONE", 'lname' => "Donigue Kossonou", 'created_at' => now(), 'updated_at' => now()],
            21 => ['register' => '19ESATIC0101GK', "name" => "KONE", 'lname' => "Kignon Abdel", 'created_at' => now(), 'updated_at' => now()],
            22 => ['register' => '19ESATIC00205YT', "name" => "KONE", 'lname' => "Tokafolo Laciné", 'created_at' => now(), 'updated_at' => now()],
            23 => ['register' => '18ESATIC0117BO', "name" => "KOUADIO", 'lname' => "Tia Emmanuel", 'created_at' => now(), 'updated_at' => now()],
            24 => ['register' => '19ESATIC0043GK', "name" => "KOUADIO", 'lname' => "Kouassi Hyacinthe", 'created_at' => now(), 'updated_at' => now()],
            25 => ['register' => '19ESATIC0016SE', "name" => "KOUAME", 'lname' => "Esdras Jonathan", 'created_at' => now(), 'updated_at' => now()],
            26 => ['register' => '19ESATIC0192AK', "name" => "KOUAME", 'lname' => "Konan Aimé", 'created_at' => now(), 'updated_at' => now()],
            27 => ['register' => '19ESATIC0186AA', "name" => "KOUASSI", 'lname' => "Allou Koffi", 'created_at' => now(), 'updated_at' => now()],
            28 => ['register' => '19ESATIC0225YG', "name" => "MAKE", 'lname' => "Gilles Chris", 'created_at' => now(), 'updated_at' => now()],
            29 => ['register' => '19ESATIC0092AA', "name" => "MANLAN", 'lname' => "Ahoua Nathan", 'created_at' => now(), 'updated_at' => now()],
            30 => ['register' => '19ESATIC0224AL', "name" => "MENSAH", 'lname' => "Luc Germain", 'created_at' => now(), 'updated_at' => now()],
            31 => ['register' => '19ESATIC0099AA', "name" => "N'GBANDAM", 'lname' => "Abel Joel", 'created_at' => now(), 'updated_at' => now()],
            32 => ['register' => '19ESATIC0204TM', "name" => "OGUIDAN", 'lname' => "Michael", 'created_at' => now(), 'updated_at' => now()],
            33 => ['register' => '19ESATIC0094MS', "name" => "SILUE", 'lname' => "Samuel", 'created_at' => now(), 'updated_at' => now()],
            34 => ['register' => '18ESATIC0164AB', "name" => "SODARA", 'lname' => "Zie Hamed", 'created_at' => now(), 'updated_at' => now()],
            35 => ['register' => '19ESATIC0174MG', "name" => "SOUMAILA", 'lname' => "Geoffroy Evane", 'created_at' => now(), 'updated_at' => now()],
            36 => ['register' => '18ESATIC0135BE', "name" => "TAPE", 'lname' => "Kore Daniel", 'created_at' => now(), 'updated_at' => now()],
            37 => ['register' => '19ESATIC0126BR', "name" => "YEBOUE", 'lname' => "Richmond Junior", 'created_at' => now(), 'updated_at' => now()],
            38 => ['register' => '19ESATIC0135JA', "name" => "ZANTE", 'lname' => "Antoine", 'created_at' => now(), 'updated_at' => now()],
        ];

        Godfather::insert($godfaths);

        $godfathers = Godfather::all();

        foreach($godfathers as $godfather ){
            // get index of filleul from array
            $indexSon = array_rand($godson);

            //get filleul from index
            $son = $godson[$indexSon];

            //associer filleul et parrain
            $godChild = new Godchild($son);
            $godChild->godfather()->associate($godfather);
            $godChild->save();

            //delete filleul got by index
            unset($godson[$indexSon]);
        }

        $godfathers = $godfathers->shuffle(10)->shuffle(5)->shuffle();

        //repeat loop instructions for the last seven godson
        for ($i=0, $rest = count($godson); $i < $rest; $i++) {
            $indexSon = array_rand($godson);
            $son = $godson[$indexSon];
            $godChild = new Godchild($son);
            $godChild->godfather()->associate($godfathers->random());
            $godChild->save();
            unset($godson[$indexSon]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
