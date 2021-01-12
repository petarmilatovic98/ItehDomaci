<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlists;

class Songs extends Model
{
    use HasFactory;
    public function playlist(){

        return $this->belongsTo(Playlists::class);

    }
}
