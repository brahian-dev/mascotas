<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'paymentMethod_paymentMethodId', 'user_userId',
        'animal_animalId'
    ];

    public $timestamps = false;
}
