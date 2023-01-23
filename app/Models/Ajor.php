<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajor extends Model
{
    use HasFactory;

    public $table = 'ajor';

    public $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public static $rules = [
        'name' => 'required|string|max:100',
    ];

}
