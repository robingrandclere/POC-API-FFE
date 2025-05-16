<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Licence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();

        Licence::factory()->create([
            'type_licence' => 'A',
            'libelle_licence'=> 'Licence A',
            'date_deb_saison'=> now(),
            'date_fin_saison'=> now(),
            'description' => 'Licence A pour cadence rapide et lente'
        ]);
 
       Licence::factory()->create([
           'type_licence' => 'B',
           'libelle_licence'=> 'Licence B',
           'date_deb_saison'=> now(),
           'date_fin_saison'=> now(),
           'description' => 'Licence B pour cadence rapide et lente'
        ]);
    }
}
