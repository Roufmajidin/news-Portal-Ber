<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori',
        // 'detail_id',
        // 'judul_berita',
    ];
    public function detail_kategori()
    {
        return $this->hasMany(Detail_kategori::class, 'kategori_id', 'id');
    }
}
