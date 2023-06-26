<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "customers";
    protected $primaryKey = 'customer_id';

    public function setNameAttribute($value) // Mutteter
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function getDobAttribute($value) // Acceeser
    {
        return date("d-M-Y", strtotime($value));
    }

}