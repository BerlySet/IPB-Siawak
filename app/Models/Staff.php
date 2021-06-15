<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['jabatan', 'tahun_jabatan', 'status', 's_idevent', 's_iddivisi', 's_nim'];
}
