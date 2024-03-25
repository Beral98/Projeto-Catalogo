<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    protected $fillable = ['nome', 'marca', 'modelo', 'preço'];
}

// Path: database/migrations/2021_09_29_000000_create_produtos_table.php
$dados = [
    'nome' => '',
    'marca' => '',
    'modelo' => '',
];

