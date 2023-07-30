<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $table = 'evento';
    protected $primaryKey = 'evento_id';
    public $timestamps = true;

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id', 'emp_id');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'cat_id', 'cat_id');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'even_id', 'even_id');
    }
}
