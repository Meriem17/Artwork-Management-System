<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ouvrage;
class Pret extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'prets';
    protected $fillable = [
        'institution',
        'nomExposition',
        'dateDepart',
        'dateRetour',
        'ouvrage_id',
  
     ];
     public function ouvrage()
     {
         return $this->belongsTo(ouvrage::class, 'foreign_key');
     }
}
