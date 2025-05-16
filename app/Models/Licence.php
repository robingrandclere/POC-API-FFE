<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_licence',
        'libelle_licence',
        'date_deb_saison',
        'date_fin_saison',
        'description'
    ];
}
