<?php

namespace App\Models;

use CodeIgniter\Model;

class mdl_giwan extends Model
{
    protected $table      = 'tb_giwan';
    protected $allowedFields = ['label', 'b_inggris', 'b_indo', 'status'];
}
