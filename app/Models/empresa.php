<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa';
    protected $primaryKey = 'emp_id';
    public $timestamps = true;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id', 'user_id');
    }
    
    public function eventos()
    {
        return $this->hasMany(Evento::class, 'empresa_id', 'emp_id');
    }
}
