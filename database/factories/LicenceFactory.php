<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Licence>
 */
class LicenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_licence' => '',
            'libelle_licence'=> 'blabla',
            'date_deb_saison'=> now(),
            'date_fin_saison'=> now(),
            'description' => 'blablablablablablablabla'
       
        ];
    }
}
