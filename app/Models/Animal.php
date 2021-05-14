<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'animalName', 'animalColor',
        'colorcast_colorcastId', 'gender_genderId'
    ];

    public $timestamps = false;

    public static function getTotalAnimals() {
        $query = Animal::join('colorcast', 'colorcastId', '=', 'colorcast_colorcastId')
            ->join('gender', 'genderId', '=', 'gender_genderId')
            ->join('state', 'stateId', '=', 'state_stateId')->get();

        return $query;
    }
}
