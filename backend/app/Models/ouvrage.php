<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artiste;

class ouvrage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'ouvrages';
    protected $fillable = [
        'titre',
        'dateCreation',
        'materials',
        'support', 
        'dimensions',
        'poid',
        'nbrElemt',
        'numTerage',
        'typeTirage',
        'description',
        'artiste_id'
     ];

     public function artiste()
     {
         return $this->belongsTo(Artiste::class, 'foreign_key');
     }
}
