<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zemlja extends Model
{
    protected $table = 'zemlja';

    use HasFactory;
    protected $fillable=['naziv'];
}
