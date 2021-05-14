<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'state';

    public static function getState($state) {
        switch ($state) {
            case 'bought':
                return 1;
            break;
            case 'available':
                return 2;
            break;
        }
    }
}
