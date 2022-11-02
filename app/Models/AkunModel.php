<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table = "akun";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'nama', 'username','password'];
}
