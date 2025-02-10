<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'idpengarang',
        'idkategori',
        'tahunterbit',
        'sonopsis',
        'cover'
    ];

    public function kategori()
    {
        return $this->belongsTo(Category::class);
    }

}
