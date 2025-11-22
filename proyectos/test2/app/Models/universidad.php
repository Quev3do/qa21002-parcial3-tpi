<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\usuarios;

class universidad extends Model
{
    /** @use HasFactory<\Database\Factories\UniversidadFactory> */
    use HasFactory;

    protected $table = 'universidads';

    protected $fillable = [
        'universidad',
    ];

    public function usuario()
    {
        return $this->hasMany(usuarios::class, 'id');
    }
}
