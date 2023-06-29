<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
     // use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'nama_tag',
        // 'detail_id',
        // 'judul_berita',
    ];
      public function detail_kategori()
    {
        return $this->belongsToMany(Detail_kategori::class);
    }

}
