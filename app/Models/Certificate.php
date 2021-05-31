<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = ['learning_hour', 'level_kegiatan', 'start_date', 'end_date', 'pembimbing', 'sk'];
}
