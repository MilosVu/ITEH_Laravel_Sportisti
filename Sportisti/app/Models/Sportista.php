<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sportista extends Model
{
    protected $table = 'sportista';

    use HasFactory;
    protected $fillable=['ime','prezime','pol','starost','sport_id','zemlja_id'];

    public function zemlja(){
        return $this->belongsTo(Zemlja::class);
    }

    public function sport(){
        return $this->belongsTo(Sport::class);
    }

}
