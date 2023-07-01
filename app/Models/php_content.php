<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class php_content extends Model
{
    use HasFactory;
    protected $table = "php_contents";
    protected $primaryKey = 'content_id';
}