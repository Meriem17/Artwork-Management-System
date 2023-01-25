<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposition extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'expositions';
    protected $fillable = [
        'titre',
        'lieuExpo',
        'dateDebut',
        'dateFin', 
        'contraintes'
     ];
}
