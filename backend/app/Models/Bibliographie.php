<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ouvrage;

class Bibliographie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'bibliographies';
    protected $fillable = [
        'nomAuteur',
        'datePublication',
        'page',
        'editeur',
        'ouvrage_id',
       
     ];
     public function ouvrage()
     {
         return $this->belongsTo(ouvrage::class, 'foreign_key');
     }
}
