<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

     protected $fillable = [
            'nom_startup',
          	'description',
            'partenariat_orange',
    		'date_creation',
            'ceo_co_fondateur',
            'adresses',
            'site_web',
            'email',
            'secteur_activites',
            'statut',
            'commentaire'

    ];
}
