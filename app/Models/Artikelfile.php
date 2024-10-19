<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'artikel_file',
        'file'
    ];

    public function artikel(){
        return $this->belongsTo(Artikel::class);
    }
}
