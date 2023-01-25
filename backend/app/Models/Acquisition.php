<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ouvrage;

class Acquisition extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'acquisitions';
    protected $fillable = [
        'poprietaire',
        'date',
        'lieu',
        'prix',
        'moyenAcquisition',
        'preuveAchat',
        'certificatAuthenticite',
        'ouvrage_id'
     ];
     public function ouvrage()
     {
         return $this->belongsTo(ouvrage::class, 'foreign_key');
     }
}
