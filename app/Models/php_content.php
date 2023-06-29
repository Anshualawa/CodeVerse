<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class php_content extends Model
{
    use HasFactory;
    protected $table = "php_content";
    protected $primaryKey = 'content_id';

    public function getUpdated_atAttribute($value) // Acceeser
    {
        return date("d-M-Y", strtotime($value));
    }
}