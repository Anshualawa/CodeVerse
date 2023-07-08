<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtmAdmin extends Model
{
    use HasFactory;
    protected $table = "atm_admins";
    protected $primaryKey = 'adminID';
}
