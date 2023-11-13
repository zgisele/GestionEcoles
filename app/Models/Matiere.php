<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model

{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        'nomMatiere',
        'coefficient',
        
    ];
    public function eleves()
    {
        return $this->belongsToMany(Eleve::class);
    }
}
