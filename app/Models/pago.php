<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;
    protected $table = 'pago';
    protected $primaryKey = 'pag_id';
    public $timestamps = true;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clie_id', 'clie_id');
    }
    
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'even_id', 'even_id');
    }
}
