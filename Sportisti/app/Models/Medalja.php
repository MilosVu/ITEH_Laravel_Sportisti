<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Medalja extends Model
{

    protected $table = 'medalja';

    use HasFactory;
    protected $fillable=['takmicenje','godina','sportista_id'];


    public function sportista()
    {
        return $this->belongsTo(Sportista::class);
    }
}