<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model {

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'iso_code_2',
        'iso_code_3',
        'address_format',
        'postcode_required',
        'status',
    ];

}
