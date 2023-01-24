<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'certificatAuthenticite'
     ];
}
