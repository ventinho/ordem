<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Utilizador extends Entity
{    
    protected $dates   = ['criado_em', 'atualizado_em', 'removido_em'];
}
