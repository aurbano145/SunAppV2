<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sun extends Model
{
    use HasFactory;
    
    protected $table = 'sun';
    
    protected $fillable = ['sin', 'cos', 'sensor1', 'sensor2', 'sensor3', 'sensor4'];
}
