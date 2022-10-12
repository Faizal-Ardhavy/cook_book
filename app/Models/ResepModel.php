<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = "resep";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'resep', 'penjelasan_resep','gambar_resep'];
}
