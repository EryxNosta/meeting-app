<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primaryKey = 'clie_id';
    public $timestamps = true;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id', 'user_id');
    }
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'clie_id', 'clie_id');
    }
}
