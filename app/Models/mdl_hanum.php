<?php

namespace App\Models;

use CodeIgniter\Model;

class mdl_hanum extends Model
{
    protected $table      = 'tb_hanum';
    protected $allowedFields = ['label', 'b_inggris', 'b_indo', 'status'];
}
