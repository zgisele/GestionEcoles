<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
        'date',
        'classe',
        'sexe',
    ];
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class)->withPivot('note', 'id');
    }
}
