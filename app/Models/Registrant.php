<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    use HasFactory;
    protected $fillable = ['divisi_1', 'divisi_2', 'reg_idrec', 'status', 'reg_nim'];
}
