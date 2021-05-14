<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userEmail', 'userPasword'
    ];

    public $timestamps = false;

    public static function getTotalBuys() {
        $query = User::query();
        $query->join('payment', 'user_userId', '=', 'userId');
        $query->join('animal', 'animal_animalId', '=', 'animalId');
        $query->join('colorcast', 'colorcast_colorcastId', '=', 'colorcastId');
        $query->join('gender', 'gender_genderId', '=', 'genderId');
        $query->join('paymentMethod', 'paymentMethod_paymentMethodId', '=', 'paymetMethodId');
        
        return $query->get();
    }
}
