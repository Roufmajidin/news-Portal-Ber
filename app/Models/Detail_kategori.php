<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_kategori extends Model
{
    use HasFactory;
     protected $table = 'detail_kategori';
     protected $fillable = [
        'kategori_id',
        'judul_berita',
        'isi_berita',
        'foto',
        'teaser',
        'status',
        'slug',
        'iklan',
    ];

        public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
      public function Tag()
    {
        return $this->belongsToMany(Tag::class);
    }

}
