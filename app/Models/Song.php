<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'album_id'];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
