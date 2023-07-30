<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primaryKey = 'cat_id';
    public $timestamps = true;
    
    public function eventos()
    {
        return $this->hasMany(Evento::class, 'cat_id', 'cat_id');
    }
}
