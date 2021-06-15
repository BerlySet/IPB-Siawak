<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'tahun_akademik', 'kriteria_pendaftar', 'start_date', 'end_date', 'is_canceled', 'rec_idormawa', 'rec_idevent'];
}
