<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moodle extends Model
{
    use HasFactory;
    protected $table = 'mdl_user';
}
