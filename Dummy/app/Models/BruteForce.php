<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BruteForce extends Model
{
    use HasFactory;

    protected $table = 'brute_force_logs';
}
