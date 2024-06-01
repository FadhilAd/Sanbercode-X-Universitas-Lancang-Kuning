<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_cast extends Model
{
    use HasFactory;

    protected $table = 'nama_cast';
    protected $fillable = ['nama', 'umur', 'bio'];
}
