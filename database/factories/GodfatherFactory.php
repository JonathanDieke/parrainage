<?php

namespace Database\Factories;

use App\Models\Godfather;
use Illuminate\Database\Eloquent\Factories\Factory;

class GodfatherFactory extends Factory
{
    public $data =  [
        ['register' => '18-ESATIC0139GN', "name" => "AMOUAN", 'lname' => "Adja Yannick"],
        ['register' => '17-ESATIC0092KO', "name" => "BAMBA", 'lname' => "Awa Nourdine"],
        ['register' => '18-ESATIC0143AN', "name" => " BEUGRE", 'lname' => "Yves Léopold"],
        ['register' => '18-ESATIC0054YO', "name" => "BOUA", 'lname' => "José Akpoboua"],
        ['register' => '18-ESATIC0085AB', "name" => "BIDIGA", 'lname' => "Abdoul Fadel"],
        ['register' => '18-ESATIC0134BO', "name" => "BROU", 'lname' => "Koffi Roland"],
        ['register' => '18-ESATIC0173DA', "name" => "CREPPY", 'lname' => "Follissossro Isaac"],
        ['register' => '18-ESATIC0097NO', "name" => "DAO", 'lname' => "Madou"],
        ['register' => '18-ESATIC0005BO', "name" => "DEAPO", 'lname' => "Bérénice Nanxico"],
        ['register' => '18-ESATIC0102AB', "name" => "DIEKE", 'lname' => "Ange Jonathan"],
        ['register' => '18-ESATIC0152AB', "name" => "DIGBEU", 'lname' => "Dago Ange"],
        ['register' => '18-ESATIC0016CO', "name" => "EZANIN", 'lname' => "Anohouba Joel"],
        ['register' => '18-ESATIC0061BO', "name" => "KADJOMOU", 'lname' => "Vadjo Victoria"],
        ['register' => '18-ESATIC0137AG', "name" => "KIPLE", 'lname' => "Gbaza Jean"],
        ['register' => '18-ESATIC0002AB', "name" => "KOCORA", 'lname' => "Angboma Marie"],
        ['register' => '18-ESATIC0169AG', "name" => "KONE", 'lname' => "Lamine"],
        ['register' => '18-ESATIC0057NI', "name" => "KONE", 'lname' => "Vakaramoko"],
        ['register' => '18-ESATIC0200AG', "name" => "KONE", 'lname' => "Yedjoussougue Aziz"],
        ['register' => '18-ESATIC0170BO', "name" => "KOUAME", 'lname' => "Moaye Ulrich"],
        ['register' => '18-ESATIC0141YO', "name" => "KOUASSI", 'lname' => "Franck Sebastien"],
        ['register' => '18-ESATIC0163AB', "name" => "KOUASSI", 'lname' => "Koffi Cheick"],
        ['register' => '18-ESATIC0167AB', "name" => "OUATTARA", 'lname' => "Rokiatou"],
        ['register' => '18-ESATIC0159AB', "name" => "PAPA", 'lname' => "Kedja Jean"],
        ['register' => '18-ESATIC0145BO', "name" => "SILUE", 'lname' => "Namogo Arsene"],
        ['register' => '18-ESATIC0183AD', "name" => "SORO", 'lname' => "Bakary Philippe"],
        ['register' => '18-ESATIC0198AB', "name" => "TOURE", 'lname' => "Said"],
        ['register' => '18-ESATIC0068AB', "name" => "TRAORE", 'lname' => "Louisette Roye"],
        ['register' => '18-ESATIC0055AD', "name" => "VOUHO", 'lname' => "Jonathan Ange"],
        ['register' => '18-ESATIC0166AG', "name" => "WAYOU", 'lname' => "Franck Paterne"],
        ['register' => '18-ESATIC0080BO', "name" => "YAO", 'lname' => "Kouakou Cédric"],
    ];
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Godfather::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return $this->data;
    }
}
