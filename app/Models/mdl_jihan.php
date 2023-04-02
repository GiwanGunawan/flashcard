<?php

namespace App\Models;

use CodeIgniter\Model;

class mdl_jihan extends Model
{
    protected $table      = 'tb_jihan';
    protected $allowedFields = ['label', 'b_inggris', 'b_indo', 'status'];
}
