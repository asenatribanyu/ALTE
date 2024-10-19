<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'judul',
        'deskripsi',
        'file'
    ];

    public function artikelfile(){
        return $this->hasMany(Artikelfile::class);
    }
}