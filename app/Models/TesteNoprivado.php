<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TesteNoprivado extends Model
{
    /**
     * Nome da tabela
     *
     * @var string
     */
    protected $table = 'testes_noprivado';

    /**
     * Indica se o modelo deve usar timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Campos que podem ser preenchidos em massa
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'start_time',
        'end_time',
        'status'
    ];

    /**
     * Campos que devem ser convertidos para tipos específicos
     *
     * @var array
     */
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

} 