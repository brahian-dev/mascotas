<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colorcast extends Model
{
    use HasFactory;

    protected $table = 'colorcast';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'colorcastId', 'colorcastName'
    ];

    public $timestamps = false;
}
