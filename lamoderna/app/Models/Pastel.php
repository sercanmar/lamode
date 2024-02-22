<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    protected $table ="pasteles";

    protected $fillable = ['nombre', 'sabor', 'imagen'];
    use HasFactory;
}
