<?php

namespace App\Models;
use App\Models\ouvrage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'images';
    protected $fillable = [
        'copyright',
        'droitsPhotographiques',
        'imagePath',
        'ouvrage_id'
     ];
     public function ouvrage()
{
    return $this->belongsTo(ouvrage::class, 'foreign_key');
}
}
