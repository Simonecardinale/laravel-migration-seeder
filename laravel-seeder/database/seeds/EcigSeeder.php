<?php

use Illuminate\Database\Seeder;
use App\Ecig;
use Faker\Generator as Faker;

class EcigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $Ecig_array = config('array');

        // foreach ($Ecig_array as $item){
        //     $newEcig = new Ecig;
        //     $newEcig -> marca = $item['marca'];
        //     $newEcig ->tipologia = $item['tipologia'];
        //     $newEcig -> liquidi = $item['liquidi'];
        //     $newEcig -> prezzo = $item['prezzo'];
        //     $newEcig -> description = $item['description'];

        //     $newEcig -> save();
        // }

        for ($i = 0; $i < 10; $i++) {
            $newEcig = new Ecig;
            $newEcig -> marca = $faker->word();
            $newEcig ->tipologia = $faker->ean8();
            $newEcig -> liquidi = $faker->word();
            $newEcig -> prezzo =  $faker->randomFloat(2, 1, 999);
            $newEcig -> description =  $faker->sentence();
            $newEcig -> save();
        }

    }
}
