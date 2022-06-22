<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $table = 'sport';

    use HasFactory;
    protected $fillable=['naziv'];
}
