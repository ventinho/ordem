<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilizadorModel extends Model
{
    
    protected $table            = 'utilizadores';
    protected $returnType       = \App\Entities\Utilizador::class;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'nome',
        'email',
        'idade',
        'telemovel',
        'morada',
        'cod_postal',
        'localidade',
        'pais',
        'password',
        'reset_hash',
        'reset_expira_em',
        'fotografia',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField = 'atualizado_em';
    protected $deletedField = 'removido_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    // Callbacks
    protected $beforeInsert   = [];
    protected $beforeUpdate   = [];    
}
