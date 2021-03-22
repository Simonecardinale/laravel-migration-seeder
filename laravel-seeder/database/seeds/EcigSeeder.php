<?php

use Illuminate\Database\Seeder;
use App\Ecig;

class EcigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Ecig_array = config('array');

        foreach ($Ecig_array as $item){
            $newEcig = new Ecig;
            $newEcig -> marca = $item['marca'];
            $newEcig ->tipologia = $item['tipologia'];
            $newEcig -> liquidi = $item['liquidi'];
            $newEcig -> prezzo = $item['prezzo'];
            $newEcig -> description = $item['description'];

            $newEcig -> save();
        }
    }
}
