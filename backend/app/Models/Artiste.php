<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'artistes';
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'lieuNaissance', 
        'dateDeces',
        'lieuDeces',
        'Nationalite',
        'Biographie'
     ];
}
