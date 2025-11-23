<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Notifications\Notifiable;
use App\Models\universidad;

class usuarios extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $table = 'usuarios';

    protected $fillable = [
        'name',
        'edad',
        'password',
        'email',
        'username',
        'idUniversidads',
    ];

    public function univer()
    {
        return $this->belongsTo(universidad::class, 'idUniversidads');
    }
}
