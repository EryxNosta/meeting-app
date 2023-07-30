<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
    
    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'user_id', 'user_id');
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'user_id', 'user_id');
    }

}
