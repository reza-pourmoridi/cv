<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conatact extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
